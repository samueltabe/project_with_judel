<?php

namespace App\Http\Controllers\Admin;

use App\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use App\Http\Controllers\Controller;

class CategoryController extends Controller
{
    public function index()
    {
        $category = Category::all();
        return view('admin.category.index', compact('category'));
    }

    public function add()
    {
        return view('admin.category.add');
    }

    public function insert(Request $req)
    {
       $category = new Category();

       $category->name = $req->input('name');
       $category->meta_title = $req->input('meta_title');
       $category->meta_description= $req->input('meta_description');
       $category->meta_keywords = $req->input('meta_keywords');
       $category->save();

       return redirect('/categories')->with('status', 'Category added successfully');
    }

    public function edit($id)
    {
        $category = Category::find($id);
        return view('admin.category.edit', compact('category'));
    }

    public function update(Request $req, $id)
    {
        $category = Category::find($id);

        $category->name = $req->input('name');
        $category->meta_title = $req->input('meta_title');
        $category->meta_description= $req->input('meta_description');
        $category->meta_keywords = $req->input('meta_keywords');
        $category->update();

        return redirect('/categories')->with('status', 'Category Updated successfully');
    }

    public function delete($id)
    {
       $category = Category::find($id);

       if($category->image)
       {
           $path = 'upload/category/'.$category->image;
           if(File::exists($path))
           {
              File::delete($path);
           }
        }
        $category->delete();

        return redirect('/categpries')->with('status', 'Category deleted successfully');
    }
}
