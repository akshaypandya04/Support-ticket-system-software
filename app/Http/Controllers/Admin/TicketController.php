<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Ticket;
use App\Models\Reply;
use Illuminate\Support\Facades\Input;
use Auth;

class TicketController extends Controller
{
    public function __construct() {
        $this->middleware('AdminLogin');
    }
      public function index(Request $request)
    {
        $data = Ticket::get();

        return view('backend.admin.tickets.index',compact('data'));
    }


     public function create(Request $request)
    {
        $tickets = Ticket::get();
        return view('backend.admin.tickets.create',compact('tickets'));
    }


      public function store(Request $request)
    {
        
            $data = $request->all();

                $tickets = new Ticket;
                $tickets->name = $request->name;
                $tickets->status = $request->status;
                $tickets->created_by = Auth::user()->id;

     // Upload Image
             if($request->hasFile('image')){
                 $image_tmp = $request->file('image');
                 $extension = $image_tmp->getClientOriginalExtension();
                 $fileName = rand(111,99999).'.'.$extension;
                 $image_tmp->move(public_path('uploads/tickets'), $fileName);
                 $tickets->image = $fileName; 
                
             }
                
                $tickets->save();

                return redirect()->route('tickets.index')
                    ->with('success', 'Ticket Created Successfully');

            
        
    }


               public function edit($id)
    {
        $tickets = Ticket::find($id);

        return view('backend.admin.tickets.edit', compact('tickets'));
    }

    
       public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|max:255',
        ]);

        $tickets = Ticket::find($id);

        $tickets->name = $request->name;
        $tickets->status = $request->status;

        if ($request->hasFile('image')) {
            if(\File::exists(public_path('/uploads/tickets/'. $tickets->image))){
                \File::delete(public_path('/uploads/tickets/'. $tickets->image));
            }
            $image = $request->file('image');
            $name = time() . '.' . $image->getClientOriginalExtension();
            $destinationPath = public_path('/uploads/tickets');
            $image->move($destinationPath, $name);
            $tickets->image = $name;
        }


        $tickets->save();


       return redirect()->route('tickets.index')
                        ->with('success','Ticket updated successfully');
    }


     public function show($id)
    {
        $tickets = Ticket::find($id);

        return view('backend.admin.tickets.show', compact('tickets'));
    }



      public function ticket_reply(Request $request)
    {

        $tickets = new Reply;

        $tickets->ticket_id = $request->ticket_id;
        $tickets->user_id = $request->user_id;
        $tickets->revert_id = Auth::user()->id;
        $tickets->comment = $request->comment;
        $tickets->status = $request->status;


       
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



      public function destroy($id)
    {
        Ticket::find($id)->delete();

        return redirect()->back()
            ->with('success', 'Ticket Deleted Successfully');
    }
}
