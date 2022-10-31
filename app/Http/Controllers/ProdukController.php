<?php

namespace App\Http\Controllers;

use App\Models\produk;
use Illuminate\Http\Request;

class ProdukController extends Controller
{
    public function index()
    {
        $mydata['title'] = "VGAPEDIA | Halaman Produk";
        $mydata['produks'] = $this->getAll('produks');
        return view('produk', $mydata);
    }

    public function show()
    {
        return 'show';
    }
}
