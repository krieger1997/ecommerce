<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ComicsController extends Controller
{
    
    public function index(){
        return view("comics.index");
    }
}
