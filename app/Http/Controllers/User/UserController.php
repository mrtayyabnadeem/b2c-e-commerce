<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserController extends Controller
{
    function Home(){
        return view('home');
    }
    function Shop(){
        return view('shop');
    }
    function Detail(){
        return view('detail');
    }
    function Cart(){
        return view('cart');
    }
    function checkout(){
        return view('checkout');
    }

}
