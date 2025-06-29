<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Inventory;
use Illuminate\Support\Facades\Input;
use Auth;

class InventoryController extends Controller
{
    public function __construct() {
        $this->middleware('AdminLogin');
    }
      public function index(Request $request)
    {
        $data = Inventory::get();

        return view('backend.admin.inventory.index',compact('data'));
    }


     public function create(Request $request)
    {
        $inventory = Inventory::get();
        return view('backend.admin.inventory.create',compact('inventory'));
    }


      public function store(Request $request)
    {
        
            $data = $request->all();

                $inventory = new Inventory;
                $inventory->branch_name = $request->branch_name;
                $inventory->serial_no = $request->serial_no;
                $inventory->model_no = $request->model_no;
                $inventory->mac_address = $request->mac_address;
                $inventory->created_by = Auth::user()->id;

                
                $inventory->save();

                return redirect()->route('inventory.index')
                    ->with('success', 'Inventory Created Successfully');

            
        
    }


               public function edit($id)
    {
        $inventory = Inventory::find($id);

        return view('backend.admin.inventory.edit', compact('inventory'));
    }

    
       public function update(Request $request, $id)
    {
 

        $inventory = Inventory::find($id);

                $inventory->branch_name = $request->branch_name;
                $inventory->serial_no = $request->serial_no;
                $inventory->model_no = $request->model_no;
                $inventory->mac_address = $request->mac_address;
                $inventory->created_by = Auth::user()->id;


        $inventory->save();


       return redirect()->route('inventory.index')
                        ->with('success','Inventory updated successfully');
    }


     public function show($id)
    {
        //
    }




      public function destroy($id)
    {
        Inventory::find($id)->delete();

        return redirect()->back()
            ->with('success', 'Inventory Deleted Successfully');
    }
}
