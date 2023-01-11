<?php

namespace App\Http\Controllers;

use App\Models\Products;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ManageProduct extends Controller
{
    public function view()
    {
        $product = Products::paginate(10);
        return view('Manageproduct', ['title' => 'Manage Product', 'product' => $product]);
    }
    public function view_add_product()
    {
        return view('Addproduct', ['title' => 'Add Product']);
    }

    public function insert(Request $request){
        $Product = $request->validate([
            'name' => 'required',
            'Category' => 'required',
            'Detail' => 'required',
            'Price' => 'required|numeric',
            'Photo' => 'required|file|mimes:jpeg, jpg, png'
        ]);

        $filePhoto = $Product['Photo'];
        $originName = $filePhoto->getClientOriginalName();
        Storage::putFileAs('public/images', $filePhoto, $originName);
        $url = 'images/'.$originName;
        $Product['Photo'] = $url;
        if(Products::create($Product)){
            return redirect()->back();
        }
    }

    public function view_edit($name, $id){
        $data_product = Products::where('id', $id)->first();
        $prod_selec = array("Beauty", "Camera", "Laptop", "Handphone");
        return view('edit', ['data_product' => $data_product, 'title' => 'View Edit', 'prod_select' => $prod_selec]);
    }

    public function delete($id){
        Products::where('id', $id)->delete();
        return redirect()->back();
    }
}
