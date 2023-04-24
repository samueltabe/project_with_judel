<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Prod_Variant;
use Illuminate\Http\Request;

class VariantController extends Controller
{
    
    public function index()
    {
        $variant = Prod_Variant::all();
        return view('admin.variant.index', compact('variant'));
    }


    public function add()
    {
        return view('admin.variant.add');
    }

    public function insert(Request $req)
    {
        $variant = new Prod_Variant();

        $variant->name = $req->input('name');
        $variant->sap_product_code = $req->input('sap_product_code');
        $variant->web_product_code= $req->input('web_product_code');
        $variant->save();

        return redirect('/variant')->with('status', 'variant added successfully');
    }

    public function edit($id)
    {
        $variant = Prod_Variant::find($id);
        return view('admin.variant.edit', compact('variant'));
    }

    public function update(Request $req, $id)
    {
       $variant = Prod_Variant::find($id);
       $variant->name = $req->input('name');
       $variant->sap_product_code = $req->input('sap_product_code');
       $variant->web_product_code= $req->input('web_product_code');
       $variant->update();

       return redirect('/variant')->with('status', 'variant added successfully');
    }

    public function delete($id)
    {
       $variant = Prod_Variant::find($id);

        $variant->delete();

        return redirect('/variant')->with('status', 'variant deleted successfully');
    }
}
