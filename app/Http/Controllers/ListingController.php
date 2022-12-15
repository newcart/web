<?php

namespace App\Http\Controllers;

use App\Models\Listing;
use Illuminate\Http\Request;

class ListingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $products = $this->getFilteredProduct($request);
    }
    public function category(Request $request)
    {
        //
    }
    public function brand(Request $request)
    {
        //
    }
    private function getFilteredProduct(Request $request)
    {
        $filter = new \WebServiceFilter($request);
        return($filter->getWebserviceJson());

    }

}
