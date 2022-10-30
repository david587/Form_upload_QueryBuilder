<?php

namespace App\Http\Controllers;

use auth;
use App\Models\Part;
use App\Models\Type;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\DB;

class PcController extends Controller
{
    //show the form
    public function show_form(){
            return view("Form");
    }

    //submit the form
    public function store(Request $request){
       DB::table("types")->insert([
        "type"=> $request->type
       ]);

       $ids=DB::table("types")->where("type",$request->type)->pluck("id");
    //    $id=Arr::last($ids);
       $id=$ids[count($ids)-1];

       DB::table("parts")->insert([
        "type_id"=> $id,
        "part"=> $request->part,
        "price"=> $request->price
       ]);
        return redirect("/form")->with("message","Listing created succesfully!");
    }
    
    //show all information
    public function show_all(){
        return view("all_info",[
            "types"=>DB::select("select * from types"),
            "parts"=>DB::select("select * from parts")
        ]);
    }

    //find 5th element in parts
    public function find(){
        return view("5_info",[
            "types_5"=>DB::table("types")->where("id",5)->get(),
            "parts_5"=>DB::table("parts")->where("id",5)->get()
        ]);
}
}
