<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    function Dashboard(){
        return view('admin.dashbord');
    }

    function AddProduct(){
        return view('admin.addproduct');
    }
}
