<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{

    function index(Request $request){

        $id=request()->id;
        $name="Donal Trump";
        $age="75";

        $data=[
            'id'=>$id,
            'name'=>$name,
            'age'=>$age
        ];

       
        setcookie("access_token", "123-XYZ", time()+60,"/","",false,true);

        return $data;





    }




}
