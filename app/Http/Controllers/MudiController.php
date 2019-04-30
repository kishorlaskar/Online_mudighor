<?php

namespace App\Http\Controllers;

use App\Catagorey;
use App\Product;
use Illuminate\Http\Request;

class MudiController extends Controller
{
  public  function  mudi(){
     $products = Product::where('publish_status',1)
                 ->orderBy('id','desc')
                 ->take(6)
                 ->get();
     $catagories = Catagorey::where('publish_status',1)->get();

      return view('front.home.home',
          [
              'products' => $products,
              'catagories' => $catagories
          ]
      );

  }
    public  function  catagorey ($id){
     $product =   Product::where('catagory_id',$id)
                         ->where('publish_status',1)
                         ->get();
        return view('front.catagorey.catagorey',
        [
         'products' => $product
        ]
        );



    }
    public  function product(){
        return view('front.product.product');
    }
}
