<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Branch;
use Illuminate\Support\Facades\Input;
use Auth;

class SoleIdController extends Controller
{
    public function __construct() {
        $this->middleware('AdminLogin');
    }
      public function index(Request $request)
    {
        $data = Branch::get();

        return view('backend.admin.branches.index',compact('data'));
    }


 

      public function store(Request $request)
    {
        
            $data = $request->all();

                $branches = new Branch;
                $branches->console_id = $request->console_id;
                
                $branches->save();

                return redirect()->back()
                    ->with('success', 'SOLE ID add Successfully');

            
        
    }


               public function edit($id)
    {
        $branches = Branch::find($id);

        return view('backend.admin.branches.edit', compact('branches'));
    }

    
       public function update(Request $request, $id)
    {
 

        $Branch = Branch::find($id);

             $branches->console_id = $request->console_id;


        $branches->save();


       return redirect()->back()
                        ->with('success','SOLE ID updated successfully');
    }


     public function show($id)
    {
        //
    }




      public function destroy($id)
    {
        Branch::find($id)->delete();

        return redirect()->back()
            ->with('success', 'SOLE ID Deleted Successfully');
    }
}
