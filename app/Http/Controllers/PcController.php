<?php

namespace App\Http\Controllers;

use auth;
use App\Models\Part;
use App\Models\Type;
use Illuminate\Http\Request;

class PcController extends Controller
{
    //show the form
    public function show_form(){
            return view("Form");
    }

    //submit the form
    public function store_part(Request $request){
        $formFields = $request->validate([
            "part"=>"required",
            "price"=>"required"
        ]);
        
        Part::create($formFields);
        return redirect("/");
    }


    public function store_type(Request $request){
        $formFields = $request->validate([
            "type"=>"required"
        ]);
        Type::create($formFields);
        
    
        return redirect("/")->with("message","Uploaded succesfully!");;
    }
}
