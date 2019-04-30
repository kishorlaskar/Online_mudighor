<?php

namespace App\Http\Controllers;

use App\Brand;
use Illuminate\Http\Request;

class brandController extends Controller
{
    public function addBrand()
    {
        return view('admin.Brand.add-brand');
    }

    public function manageBrand()
    {
        $brand = Brand::all();
        return view('admin.Brand.manage-brand', ['brands' => $brand]);
    }

    public function newBrand(Request $request)
    {
        $brand = new Brand();
        $brand->brand_name = $request->brand_name;
        $brand->brand_details = $request->brand_details;
        $brand->publish_status = $request->publish_status;
        $brand->save();

        return redirect('/add-brand')->with('message', 'Brand Info Save Sucessfully');
    }
      public function editBrand($id){
        $brand =  Brand::find($id);
        return view('admin.Brand.edit-brand',['brand'=>$brand]);
    }
    public function updateBrand(Request $request)
    {
        $brand = Brand::find($request->id);
        $brand->brand_name = $request->brand_name;
        $brand->brand_details = $request->brand_details;
        $brand->publish_status = $request->publish_status;
        $brand->save();

        return redirect('/manage-brand')->with('message', 'Brand Info Update Sucessfully');


    }
    public function deleteBrand($id)
    {
           $brand =  Brand::find($id);
           $brand->delete();

           return redirect('/manage-brand')->with('message', 'Brand Info Delete Sucessfully');
    }


}