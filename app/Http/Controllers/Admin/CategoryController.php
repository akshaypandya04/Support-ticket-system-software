<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use Illuminate\Support\Facades\Input;
//use Intervention\Image\ImageManagerStatic as Image;
use Auth;

class CategoryController extends Controller
{
    public function __construct() {
        $this->middleware('AdminLogin');
    }
      public function index(Request $request)
    {
        $data = Category::get();

        return view('backend.admin.category.index',compact('data'));
    }


     public function create(Request $request)
    {
        $category = Category::get();
        return view('backend.admin.category.create',compact('category'));
    }


      public function store(Request $request)
    {
        
            $data = $request->all();

                $category = new Category;
                $category->name = $request->name;
                $category->status = $request->status;
                $category->created_by = Auth::user()->id;

     // Upload Image
            //  if($request->hasFile('image')){
            //      $image_tmp = $request->file('image');
            //      $extension = $image_tmp->getClientOriginalExtension();
            //      $fileName = rand(111,99999).'.'.$extension;
            //      $image_tmp->move(public_path('uploads/category'), $fileName);
            //      $category->image = $fileName; 
                
            //  }
                
                $category->save();

                return redirect()->route('category.index')
                    ->with('success', 'Category Created Successfully');

            
        
    }


               public function edit($id)
    {
        $category = Category::find($id);

        return view('backend.admin.category.edit', compact('category'));
    }

    
       public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|max:255',
        ]);

        $category = Category::find($id);

        $category->name = $request->name;
        $category->status = $request->status;

        // if ($request->hasFile('image')) {
        //     if(\File::exists(public_path('/uploads/category/'. $category->image))){
        //         \File::delete(public_path('/uploads/category/'. $category->image));
        //     }
        //     $image = $request->file('image');
        //     $name = time() . '.' . $image->getClientOriginalExtension();
        //     $destinationPath = public_path('/uploads/category');
        //     $image->move($destinationPath, $name);
        //     $category->image = $name;
        // }


        $category->save();


       return redirect()->route('category.index')
                        ->with('success','category updated successfully');
    }



      public function destroy($id)
    {
        Category::find($id)->delete();

        return redirect()->back()
            ->with('success', 'Category Deleted Successfully');
    }
}
