<?php

namespace App\Http\Controllers;

use App\Brand;
use App\Catagorey;
use App\Product;
use Illuminate\Http\Request;

class productController extends Controller
{
    public function addProduct(){
        $catagorey =   Catagorey::where('publish_status',1)->get();
        $brand = Brand::where('publish_status',1)->get();
        return view('admin.product.add-product',[
            'catagories'=>$catagorey,
            'brands'    =>$brand
        ]);
    }
    public function newProduct(Request $request){
        $productImage = $request->file('product_image');
        $directory = "product-image/";

        $imageName =  $productImage->getClientOriginalName();
        $productImage->move($directory,$imageName);
        $imageUrl = $directory.$imageName;

          ''


    }
    public function editProduct($id){
        $product = Catagorey::find($id);
        return view('admin.product.edit-product',['product'=>$product]);
    }
    public function Product(Request $request)
    {
        $productImage = $request->file('product_image');
        $directory = "product-image/";

        $imageName =  $productImage->getClientOriginalName();
        $productImage->move($directory,$imageName);
        $imageUrl = $directory.$imageName;

        $product= Product::find($request->id);
        $product->catagorey_id = $request->catagorey_id;
        $product->brand_id = $request->brand_id;
        $product->product_name = $request->product_name;
        $product->product_price = $request->product_price;
        $product-> product_quantity= $request->product_quantity;
        $product->product_skew = $request->product_skew;
        $product->product_short_description = $request->product_short_description;
        $product->product_long_description = $request->product_long_description;
        $product->product_image = $imageUrl;
        $product->publish_status = $request->publish_status;
        $product->save();

        return redirect('/manage-product')->with('message','Product info saved');



    }
}
