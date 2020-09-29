<?php

namespace App\Http\Controllers;
use DB;
use Illuminate\Http\Request;
use App\Models\Product;

class ShowProductController extends Controller
{
    public function index()
    {
        $product = DB::table('products')->get();
        return view('main', compact('product'));
    }
}
