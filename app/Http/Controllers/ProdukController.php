<?php

namespace App\Http\Controllers;

use App\Models\produk;
use Illuminate\Http\Request;

class ProdukController extends Controller
{
    public function index()
    {
        $mydata['vgas'] = produk::all();
        $mydata['title'] = "VGAPEDIA | Halaman Produk";
        return view('produk', $mydata);
    }
}
