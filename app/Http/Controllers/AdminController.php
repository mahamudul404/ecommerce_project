<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Container\Attributes\CurrentUser;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function view_category()
    {

        $datas = Category::all();
        return view('admin.category', compact('datas'));
    }

    public function add_category(Request $request){

        $category = new Category();
        $category->category_name = $request->input('category');
        $category->save();

        toastr()->closeButton()-> success('Category added successfully');

        return redirect()->back();

    }

    public function delete_category($id){
        $data = Category::find($id);
        $data->delete();

        toastr()->closeButton()-> success('Category deleted successfully');
        return redirect()->back();
    }

    public function edit_category($id){
        $data = Category::find($id);
        return view('admin.edit', compact('data'));
    }

    public function update_category(Request $request, $id){

        $data = Category::find($id);
        $data->category_name = $request->input('category');
        $data->save();

        toastr()->closeButton()-> success('Category updated successfully');
        return redirect()->route('view_category');
    }
    

}
