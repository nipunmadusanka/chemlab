<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        return view('pages.productPage.index');
    }
    public function viewproducts()
    {
        return view('pages.productPage.viewProducts');
    }
}
