<?php

namespace App\Http\Controllers;

use App\Models\User;

use Auth;
use Carbon\Carbon;
use DB;
use Hash;
use App\Models\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Image;
use Session;

class AdminController extends Controller
{
      public function login(Request $request)
    {
        if ($request->isMethod('post')) {

            $credentials = $request->only('email', 'password');
            if (Auth::attempt($credentials)) {
                // Authentication passed..
                if (Auth::user()->role === "admin") {
                    Session::put('adminSession', Auth::user()->email);
                }
                return redirect('/' . Auth::user()->role . '/dashboard');

            } else {
                return redirect('/admin')->with('error', 'Invalid Username or Password');
            }

        }
        return view('backend.admin.admin_login');
    }

    public function dashboard()
    {

        return view('backend.admin.dashboard');

    }


    public function profileUpdate(Request $request)
    {

        $userDetail = User::where(['verifiy_status' => 1])->first();

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


            User::where('email', Session::get('adminSession'))->update(['email' => $data['email'], 'profile' => $profileImage]);

            return redirect()->back()->with('success', 'Profie is update Successfully');

        }

        return view('backend.admin.profile')->with(compact('userDetail'));
    }


    public function settings()
    {


        $adminDetails = User::where(['email' => Session::get('adminSession')])->first();
        return view('backend.admin.changePassword')->with(compact('adminDetails'));
    }


  public function updatePassword(Request $request)
    {
        if (!(Hash::check($request->get('currentpassword'), Auth::user()->password))) {

            return redirect()->back()->with('error', 'Your current password does not matches with the password you provided! Please try again.');
        }
        if(strcmp($request->get('currentpassword'), $request->get('newpassword')) == 0){

            return redirect()->back()->with('error', 'New Password cannot be same as your current password! Please choose a different password.');

        }

        $this->validate($request, [
            'currentpassword' => 'required',
            'newpassword' => 'required|string|min:6|confirmed',
        ]);

        $user = Auth::user();
        $user->password = Hash::make($request->get('newpassword'));
        $user->save();

        return redirect()->back()->with('success', 'Password changed successfully.');
    }

  
    public function logout()
    {
         Session::flush();
         Auth::logout();
        return redirect('/admin')->with('success', 'Logged out successfully.');

    }
}
