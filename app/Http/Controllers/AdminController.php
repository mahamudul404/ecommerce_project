<?php

namespace App\Http\Controllers;

use App\Models\Category;
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
}
