<?php

namespace App\Models;

use Illuminate\Support\Facades\DB;


class Userku
{
    public static function getAll(){
        return DB::table('users')->select('*')->get(); 
    }

    public static function get(){
        return DB::table('users')->select('*')->get(); 
    }

    public static function update(){
        return DB::table('users')->select('*')->get(); 
    }

    public static function delete(){
        return DB::table('users')->select('*')->get(); 
    }

}
