<?php

namespace App\Http\Controllers;

use App\Http\Controllers\TextLocal\TextLocal;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\Permission;
use Illuminate\Validation\Rule;
use Spatie\Permission\Models\Role;
use DB;
use Hash;
use Session;
use Auth;
use Illuminate\Support\Arr;
use App\Models\Ticket;
use App\Models\Reply;
use App\Models\Category;
use Illuminate\Support\Facades\Mail;
use PDF;

class UserController extends Controller
{


public function index(Request $request)
    {
        $users = User::where('role_id', '2')->get();

        return view('backend.admin.users.index',compact('users'));
    }



      public function create()
    {
        return view('backend.admin.users.create');
    }


    public function store(Request $request)
    {
        if ($request->isMethod('post')) {
            $data = $request->all();
            $emailCount = User::where('email', $data['email'])->count();
            if ($emailCount > 0) {
                return redirect()->back()->with('error', 'Email is already exist');
            } else {
            $phoneCount = User::where('phone', $data['phone'])->count();
            if ($phoneCount > 0) {
                return redirect()->back()->with('error', 'Phone Number is already exist');
            } else {
                $user = new User;
                $user->name = $data['name'];
                $user->email = $data['email'];
                $user->phone = $data['phone'];
                $user->verifiy_status = $data['verifiy_status'];


                $user->role = "user";
                $user->role_id = "2";
                $user->password = Hash::make($data['password']);
                $user->save();
                return redirect()->route('users.index')
                    ->with('success', 'User created successfully');
            }
          }
        }
    }



     public function edit($id)
    {
        $users = User::find($id);
    
        return view('backend.admin.users.edit', compact('users'));
    }


     public function show($id)
    {
        $users = User::find($id);
    
        return view('backend.admin.users.show', compact('users'));
    }


    public function update(Request $request, $id)
    {

        $user = User::findOrFail($id);

        $user->name = $request->name;
        $user->email = $request->email;
        $user->phone = $request->phone;
        $user->verifiy_status = $request->verifiy_status;

        if (!empty($request['password'])) {
            $request['password'] = Hash::make($request['password']);
        } else {
            $request = Arr::except($request, array('password'));
        }

        $user->save();

        return redirect()->route('users.index')
            ->with('success', 'User updated successfully');
    }


    public function destroy($id)
    {
        User::find($id)->delete();
        return redirect()->route('users.index')
            ->with('success', 'User deleted successfully');
    }


 public function forgot_password(Request $request){
        if($request->isMethod('post')){
            $data = $request->all();
            /*echo "<pre>"; print_r($data); die;*/
            $testerCount = User::where('email',$data['email'])->count();
            if($testerCount == 0){
                return redirect()->back()->with('error','Email does not exists!');
            }

            //Get User Details
            $userDetails = User::where('email',$data['email'])->first();

            //Generate Random Password
            //$random_password = str_random(12);
              $random_password = Str::random(12);

            //Encode/Secure Password
              $new_password = hash::make($random_password);

            //Update Password
            User::where('email',$data['email'])->update(['password'=>$new_password]);

            //Send Forgot Password Email Code
            $email = $data['email'];
            $name = $userDetails->name;
            $messageData = [
                'email'=>$email,
                'name'=>$name,
                'password'=>$random_password
            ];
            Mail::send('emails.forgotpassword',$messageData,function($message)use($email){
                $message->to($email)->subject('New Password - Society');
            });

            return redirect('/login')->with('successs','A temporary password has been sent to you via email. Please use that to set a new password!');

        }
             

            return view('frontend.forgot-password');
    }





    public function dashboard()
     {  
      
          return view('frontend.dashboard');
     }
     
     
     
  




    public function add_ticket()
    {
         
         $category = Category::get();
        return view('frontend.tickets.add-ticket',compact('category'));
    }
    
    
     public function ticket_store(Request $request)
    {

        $tickets = new Ticket;

        $series = DB::table('tickets')->orderBy('created_at','DESC')->first();

        $tickets->user_id = Auth::user()->id;

if ($series == '')
{
    $numbercode ='TICKET-1';
}
else
{
        $numbercode = 'TICKET-' . ((int)$series->id + 1);

}
        $tickets->ticket_id = $numbercode;
        $tickets->subject = $request->subject;
        $tickets->message = $request->message;
        $tickets->category_id = $request->category_id;
        $tickets->priority = $request->priority;
        $tickets->status = 'Progress';


       
        // Upload Photo
             if($request->hasFile('attachments')){
                 $image_tmp = $request->file('attachments');
                 $extension = $image_tmp->getClientOriginalExtension();
                 $fileName = rand(111,99999).'.'.$extension;
                 $image_tmp->move(public_path('uploads/tickets/'), $fileName);
                 $tickets->attachments = $fileName; 
                
             }
       


        $tickets->save();

       return redirect()->route('user.list.ticket')
            ->with('success', 'Ticket has been added successfully');
    }
    
    
       public function list_ticket()
    {
        $tickets = Ticket::where('user_id', Auth::user()->id)->get();
        return view('frontend.tickets.ticket-list',compact('tickets'));
    }






     public function show_ticket($id)
    {
        $tickets = Ticket::find($id);

        return view('frontend.tickets.ticket-show', compact('tickets'));
    }



      public function user_ticket_reply(Request $request)
    {

        $tickets = new Reply;

        $tickets->ticket_id = $request->ticket_id;
        $tickets->user_id = Auth::user()->id;
        $tickets->revert_id = Auth::user()->id;
        $tickets->comment = $request->comment;

       
        // Upload Photo
             if($request->hasFile('attachments')){
                 $image_tmp = $request->file('attachments');
                 $extension = $image_tmp->getClientOriginalExtension();
                 $fileName = rand(111,99999).'.'.$extension;
                 $image_tmp->move(public_path('uploads/replys/'), $fileName);
                 $tickets->attachments = $fileName; 
                
             }
       
        $tickets->save();

         Ticket::where('ticket_id', $request->ticket_id)->update(['status'=>$request->status]);

       return redirect()->back()
            ->with('success', 'Ticket reply successfully');
    }


               public function edit_ticket($id)
    {
        $tickets = Ticket::find($id);
        $category = Category::get();

        return view('frontend.tickets.edit-ticket', compact('tickets','category'));
    }


     public function ticket_update(Request $request, $id)
    {
        
        $tickets = Ticket::find($id);
        
       $tickets->user_id = Auth::user()->id;

        $tickets->subject = $request->subject;
        $tickets->message = $request->message;
        $tickets->category_id = $request->category_id;
        $tickets->priority = $request->priority;
        // $tickets->services = $request->services;



 // Upload Photo
        if ($request->hasFile('attachments')) {
            if(\File::exists(public_path('/uploads/tickets/'. $tickets->attachments))){
                \File::delete(public_path('/uploads/tickets/'. $tickets->attachments));
            }
            $image = $request->file('attachments');
            $name = time() . '.' . $image->getClientOriginalExtension();
            $destinationPath = public_path('/uploads/tickets');
            $image->move($destinationPath, $name);
            $tickets->attachments = $name;
        }


        $tickets->save();


       return redirect()->route('user.list.ticket')
            ->with('success', 'Ticket has been updated successfully');

    }
   



       public function profile()
    {

        $profile = Auth::user();
      
        return view('frontend.profile',compact('profile'));
    }


     public function profile_update(Request $request)
    {

          if ($request->isMethod('post')) {
            $data = $request->all();

             //Upload Profile
            if ($image = $request->file('profile')) {
                $destinationPath = 'uploads/profile/';
                $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
                $image->move($destinationPath, $profileImage);
                $input['profile'] = "$profileImage";
            } else if (!empty($data['current_image'])) {
                $profileImage = $data['current_image'];
            } else {
                $profileImage = '';
            }

              User::where('id', Auth::user()->id)->update(['name'=>$data['name'],'email'=>$data['email'],'phone'=>$data['phone'],'profile'=>$profileImage]);

              return redirect()->back()->with('successs', 'Profie is update Successfully');

        }

    }


     public function change_password()
     {
          return view('frontend.change-password');
     }



    public function password_update(Request $request)
    {
        if (!(Hash::check($request->get('currentpassword'), Auth::user()->password))) {

            return redirect()->back()->with('errorsss', 'Your current password does not matches with the password you provided! Please try again.');
        }
        if(strcmp($request->get('currentpassword'), $request->get('newpassword')) == 0){

            return redirect()->back()->with('errorsss', 'New Password cannot be same as your current password! Please choose a different password.');

        }

        $this->validate($request, [
            'currentpassword' => 'required',
            'newpassword' => 'required|string|min:6|confirmed',
        ]);

        $user = Auth::user();
        $user->password = bcrypt($request->get('newpassword'));
        $user->save();

        return redirect()->back()->with('successs', 'Password changed successfully.');
    }


    public function logout()
    {
        Session::flush();
        Auth::logout();
        Session::forget('userSession');
        return redirect('/login')->with('successs', 'Logged out successfully.');
    }
    

}
