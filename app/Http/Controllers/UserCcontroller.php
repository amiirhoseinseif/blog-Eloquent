<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserCcontroller extends Controller
{
    public function Categories()
    {
        $x = 1 ;
        return view('categories',['cat'=>$x]);
    }
}
