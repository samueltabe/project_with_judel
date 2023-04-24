<?php

namespace App\Http\Controllers\Admin;

use App\Product;
use App\Category;
use App\Prod_Variant;
use App\ProductCategory;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;

class ProductController extends Controller
{
    public function index()
    {
        $product = Product::all();
        return view('admin.product.index', compact('product'));
    }

    public function add()
    {
        $variant = Prod_Variant::all();
        $category = Category::all();
        return view('admin.product.add', compact('category','variant'));
    }

    public function insert(Request $req)
    {

        $product = new Product();
        $product->name = $req->input('name');
        $product->variant_id = $req->input('variant_id');
        $product->slug = $req->input('slug');

        $product->save();
            for ($i=0; $i < count($req->categories); $i++) {
                 ProductCategory::create([
                'category_id'=>$req->categories[$i],
                'product_id'=>$product->id,
           ]);
         }



        return redirect('/dashboard')->with('status', 'Product added successfully');

    }

    public function edit($id)
    {
        $product = Product::with('pcategory.pccategory')->find($id);
        $category = Category::all();
        $variant = Prod_Variant::all();
        //dd($product);
        return view('admin.product.edit', compact('product', 'category', 'variant'));
    }


    public function update(Request $req, $id)
    {
        $current_product_categories= ProductCategory::where('product_id',$id);
        $current_product_categories->delete();

        $product =  Product::find($id);
        $product->name = $req->input('name');
        $product->variant_id = $req->input('variant_id');
        $product->slug = $req->input('slug');

        $product->update();
            for ($i=0; $i < count($req->categories); $i++) {
                 ProductCategory::create([
                'category_id'=>$req->categories[$i],
                'product_id'=>$product->id,
           ]);
         }

        return redirect('/product')->with('status', 'Product updated successfully');
    }

    public function delete($id)
    {
       $product = Product::find($id);

        $product->delete();

        return redirect('/product')->with('status', 'Category deleted successfully');
    }
}
