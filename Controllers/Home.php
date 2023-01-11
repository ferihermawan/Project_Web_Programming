<?php

namespace App\Http\Controllers;

use App\Models\Products;
use Illuminate\Http\Request;

class Home extends Controller
{
    public function view(){
        $products = Products::all();
        $temp = (array) null;
        foreach ($products as $p){
            $temp[] = $p->Category;
        }
        $product_cate = array_unique($temp);

        return view ('Home',['title'=>'Home', 'product' => $product_cate,'prod' => $products] );
    }
    
}
