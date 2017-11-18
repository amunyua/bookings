<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;

class GuestController extends Controller
{
    public function home(){
        return view('welcome-1',[
            'products'=>Product::all()
        ]);
    }
}
