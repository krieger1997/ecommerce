<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Editorial;

class EditorialesController extends Controller
{
    public function index(Editorial $editorial){
        return view("editoriales.index",compact('editorial'));
    }
}
