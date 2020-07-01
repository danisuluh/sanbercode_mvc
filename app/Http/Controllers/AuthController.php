<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function register()
    {
        return view('register');
    }

    public function masuk(Request $request)
    {
        // var_dump($request);
        // dd($request);
        return view('masuk');
    }

    public function masuk_post(Request $request)
    {
        // dd($request->all());
        $data['first_name'] = request()->first_name;
        $data['last_name'] = request()->last_name;

        return view('masuk', $data);
    }
}
