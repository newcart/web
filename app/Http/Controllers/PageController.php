<?php

namespace App\Http\Controllers;

use App\Models\Home;
use Illuminate\Http\Request;

class PageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function hakkimizda()
    {

        return view('page.hakkimizda');
    }
    public function bizeulasin()
    {
        $data['config_general']   =  \WebService::contact_us();

        return view('page.bize-ulasin',$data);
    }
    public function dropshipping()
    {

        return view('page.dropshipping');
    }
    public function login()
    {

        return view('login.login');
    }
    public function signUp()
    {

        return view('login.sign-up');
    }
}
