<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Testimonial;
use App\Models\Contact;
use App\Models\Hospital;
use App\Models\State;
use App\Models\City;
use App\Models\User;
use App\Models\Country;
use App\Models\Banner;
use App\Models\Appointment;
use App\Models\Payment;
 use Redirect,Response;
use Illuminate\Support\Facades\Mail;
use DB;
use Hash;
use Session;
use Auth;

class FrontendController extends Controller
{
     public function index()
     {
     
     $banners = Banner::get();
     
        return view('frontend.index',compact('banners'));

      }
      
            
     public function login(Request $request){
         if($request->isMethod('post')){

            $credentials = $request->only('email', 'password');
            if (Auth::attempt($credentials)) {
     // Authentication passed..
              if(Auth::user()->role === "user"){
                      Session::put('userSession',Auth::user()->email);
                    }

     if (Auth::user()->verifiy_status == 1) {
                        return redirect('/'. Auth::user()->role . '/dashboard');
                      }

             }

        return redirect('/login')->with('errorsss','Invalid Username or Password');

         }

          return view('frontend.login');

   }




    public function register(Request $request)
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
                $user->unique_id = $data['unique_id'];
                $user->verifiy_status = '1';


                $user->role = "user";
                $user->role_id = "2";
                $user->password = Hash::make($data['password']);
                $user->save();
                return redirect()->back()
                    ->with('successs', 'congratulations your account has been successfully created');
            }
          }
        }


       return view('frontend.users.user-register');

    }



      

}
