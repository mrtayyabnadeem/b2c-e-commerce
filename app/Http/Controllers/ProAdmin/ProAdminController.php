<?php

namespace App\Http\Controllers\ProAdmin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProAdminController extends Controller
{
    function Dashboard(){
        return view('proadmin.dashbord');
    }
    function Category(){
        return view('proadmin.category');
    }
    function UserList(){
        return view('proadmin.user');
    }
    function Productverify(){
        return view('proadmin.productverify');
    }
}
