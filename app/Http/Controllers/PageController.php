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

        return view('page.bize-ulasin');
    }
    public function dropshipping()
    {

        return view('page.dropshipping');
    }
}
