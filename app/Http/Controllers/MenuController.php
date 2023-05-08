<?php

namespace App\Http\Controllers;

use App\Models\Menu;
use Illuminate\Http\Request;

class MenuController extends Controller
{
    function CreateMenu(){
        $menu = Menu::all()->toArray();
        // dd($menu);
        $data = compact('menu');
        return view('proadmin.menu')->with($data);
    }

    function StoreMenu(Request $request){
        $request->validate(
            [
                "Menu_name" => "required"
            ]
        );

        $menu = new Menu;
        $menu->menu_title   =   $request['Menu_name'];
        $menu->save();
        return redirect()->back()->with("status", "Operation Perform Successfully");
    }
}
