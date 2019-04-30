<?php

namespace App\Http\Controllers;

use App\Catagorey;
use Illuminate\Http\Request;

class catagoreyController extends Controller
{
    public  function addcatagorey(){
        return view('admin.catagorey.add-catagorey');
    }
    public  function  manageCatagorey(){
        $catagoreys = Catagorey::all();
        return view('admin.catagorey.manage-catagorey',['catagoreys' => $catagoreys]);


    }

    public  function newCatagorey(Request $request){
        $Catagorey = new Catagorey();
        $Catagorey->catagorey_name = $request->catagorey_name;
        $Catagorey->catagorey_details = $request->catagorey_details;
        $Catagorey->publish_status = $request->publish_status;
        $Catagorey->save();

        return redirect('/add-catagorey')->with('message','Catagorey Info Save Successfully');


    }




    public function editCatagorey($id){
            $catagorey = Catagorey::find($id);
        return view('admin.catagorey.edit-catagorey',['catagorey'=>$catagorey]);
    }




//    public  function updateCatagorey(Request $request){
//        $catagorey =  Catagorey::find($request->id);
//        $catagorey->catagorey_name = $request->catagorey_name;
//        $catagorey->catagorey_details = $request->catagorey_details;
//        $catagorey->publish_status = $request->publish_status;
//        $catagorey->save();
//
//        return redirect('/manage-catagorey')->with('message','Catagorey Update Sucessfully');
//
//
//
//    }


 public function updateCatagorey(Request $request){
        $catagorey =  Catagorey::find($request->id);
        $catagorey->catagorey_name = $request->catagorey_name;
        $catagorey->catagorey_details = $request->catagorey_details;
        $catagorey->publish_status = $request->publish_status;
        $catagorey->save();

        return redirect('/manage-catagorey')->with('message','Catagorey Update Sucessfully');


 }

//    public  function  deleteCatagorey($id){
//
//        $catagorey =  Catagorey::find($id);
//        $catagorey->delete();
//
//        return redirect('/manage-catagorey')->with('message','Catagorey info Delete Sucessfully');
//    }
 public  function deleteCatagorey($id){

     $catagorey = Catagorey::find($id);
     $catagorey->delete();

     return redirect('/manage-catagorey')->with('message','Catagorey info Delete Sucessfully');
 }
}
