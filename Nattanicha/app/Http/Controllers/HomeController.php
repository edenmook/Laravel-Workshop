<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    //
    function HelloMoring($ID){
        return '<h1>Good Moring '.$ID.'</h1>';

    }
}
