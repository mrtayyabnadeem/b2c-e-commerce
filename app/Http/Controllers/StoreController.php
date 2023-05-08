<?php

namespace App\Http\Controllers;

use App\Models\Store;
use Illuminate\Contracts\Session\Session;
use Illuminate\Http\Request;

use function Ramsey\Uuid\v1;

class StoreController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('sellerRegisteration');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
        $login = Store::where(['email' => $request['email'], 'password' => $request['password']])->first();
        if (isset($login)) {
            Session()->put([
                'id' => $login['id'],
                'store_name' => $login['store_name'],
                'email' =>  $login['email'],
                'seller_type'   => $login['seller_type'],
                'logo' => $login['logo'],
                'address' => $login['address'],
                'zip' => $login['zip']
            ]);
            return view('admin.dashbord')->with('sms', 'Login successfully');
        } else {
            return redirect()->back()->with('sms', "Login Details Invalid");
        }
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        echo "<pre>";
        print_r($request->toArray());
        $logoPath = $request->file('store_logo')->store('public/img');
        $validation =  $request->validate([
            'email'             =>  'required|email|unique:stores',
            'password'          =>  'required|confirmed',
            'store_name'        =>  'required|alpha|unique:stores',
            'seller-category'   =>  'required',
            'address'           =>  'required',
            'zip'               =>  'required|numeric',
            'store_logo'        =>  'required'
        ]);
        $store = new Store;
        $store->email           =  $validation['email'];
        $store->store_name      =  $validation['store_name'];
        $store->password        =  $validation['password'];
        $store->seller_type     =  $validation['seller-category'];
        $store->logo            =  $logoPath;
        $store->address         =  $validation['address'];
        $store->zip             =  $validation['zip'];
        $store->save();
    }

    /**
     * Display the specified resource.
     */
    public function show(Store $store)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Store $store)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Store $store)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Store $store)
    {
        //
    }
}
