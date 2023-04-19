<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ArunController extends Controller
{
    public function index(){
        return view('listing');
    }
}
