<?php

namespace App\Http\Controllers;

use App\Models\produk;
use App\Models\kategori;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class KategoriController extends Controller
{
    public function index()
    {
        $mydata['kategoris'] = kategori::all();
        $mydata['title'] = "VGAPEDIA | Halaman Kategori";
        return view('kategori', $mydata);
    }

    public function show(kategori $kategori)
    {
        $title = "kategori : ".$kategori->name;
        $mydata['products'] = $kategori->produk;
        $mydata['title'] = "VGAPEDIA | $title";
        $mydata['kategori_name'] = $title;
        return view('produk', $mydata);
    }
}
