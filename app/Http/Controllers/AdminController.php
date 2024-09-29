<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Container\Attributes\CurrentUser;

class AdminController extends Controller
{
    public function view_category()
    {

        $datas = Category::all();
        return view('admin.category', compact('datas'));
    }

    public function add_category(Request $request)
    {

        $category = new Category();
        $category->category_name = $request->input('category');
        $category->save();

        toastr()->closeButton()->success('Category added successfully');

        return redirect()->back();
    }

    public function delete_category($id)
    {
        $data = Category::find($id);
        $data->delete();

        toastr()->closeButton()->success('Category deleted successfully');
        return redirect()->back();
    }

    public function edit_category ($id )
    {
        $data = Product::find($id);

        // $category = Category::all();

        return view('admin.edit', compact('data', 'category'));
    }

    public function update_category(Request $request, $id)
    {

        $data = Category::find($id);
        $data->category_name = $request->input('category');
        $data->save();

        toastr()->closeButton()->success('Category updated successfully');
        return redirect()->route('view_category');
    }

    public function add_product()
    {

        $category = Category::all();

        return view('admin.add_product', compact('category'));
    }

    public function upload_product(Request $request){

        $product = new Product();

        $product->title = $request->input('title');
        $product->description = $request->input('description');
        $product->category = $request->input('category');
        $product->price = $request->input('price');
        $product->quantity = $request->input('quantity');
        
        $image = $request->file('image');

        $imagename = time().'.'.$image->getClientOriginalExtension();
        $request->image->move(public_path('product'), $imagename);
        $product->image = $imagename;

       


        $product->save();

        toastr()->closeButton()->success('Product added successfully');

        return redirect()->back();
    }

    public function view_product(){

        $products = Product::simplePaginate(3);
        return view('admin.view_product', compact('products'));
    }

    public function delete_product($id)
    {
        $data = Product::find($id);

        $image_path = "product/".$data->image;
        if (file_exists($image_path)) {
            @unlink($image_path);
        }

        $data->delete();

        toastr()->closeButton()->success('Product deleted successfully');
        return redirect()->back();
    }

    public function edit_product($id){

        $data = Product::find($id);
        $category = Category::all();

        return view('admin.edit_product', compact('data', 'category'));
    }

    public function update_product(Request $request, $id)
    {

        $data = Product::find($id);
        $data->title = $request->input('title');
        $data->description = $request->input('description');
        $data->category = $request->input('category');
        $data->price = $request->input('price');
        $data->quantity = $request->input('quantity');

        $image = $request->file('image');

        if($image){
            $imagename = time().'.'.$image->getClientOriginalExtension();
            $request->image->move(public_path('product'), $imagename);
            $data->image = $imagename;
        }

        $data->save();

        toastr()->closeButton()->success('Product updated successfully');
        return redirect()->route('view_product');
    }

    public function search_product(Request $request)
    {
        $search = $request->search;
        if ($search) {
            $products = Product::where('title', 'Like', '%' . $search . '%')->orWhere('quantity', 'Like', '%' . $search . '%')->simplePaginate(3);
            return view('admin.view_product', compact('products'));
        }
    }
}