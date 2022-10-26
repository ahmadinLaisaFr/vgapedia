<?php

namespace App\Http\Controllers;

use App\Models\produk;
use Illuminate\Http\Request;

class ProdukController extends Controller
{
    public function index()
    {
        $mydata['products'] = produk::all();
        $mydata['title'] = env('APP_NAME')." | Halaman Produk";
        return view('produk', $mydata);
    }
}
