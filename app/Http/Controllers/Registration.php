<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\DB;

class Registration extends Controller
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
    public function store(){
        //print_r(request()->input());
        $name = request()->input('name');
        $age  =  request()->input('age');
        $gender  =  request()->input('gender');
        $location  =  request()->input('location');
        $val = DB::insert('insert into registrations(id,name,age,gender,location)
         values(?,?,?,?,?)',[null,$name,$age,$gender,$location]);
         if($val==1){
            $data = DB::table('registrations')->get();
             return view('/register', ['data'=>$data]);
         }else{
            return view('/register');
         }
    }

    public function getAll(){
        $data = DB::table('registrations')->get();
        if(count($data)>0){
           // print_r($data);
            return view('/register', ['data'=>$data]);
        }
        else{
            return view('/register');
        }
    }
}
