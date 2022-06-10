<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Redirect;

session_start();

class HomeControlle extends Controller
{
    public function index()
    {
        $all_product = DB::table('tbl_product')->orderby('product_id', 'desc')->get();
        $manager_product = view('components.module2')->with('all_products', $all_product);
        return view('home')->with('components.module2', $manager_product);
    }
}
