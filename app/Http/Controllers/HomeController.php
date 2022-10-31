<?php

namespace App\Http\Controllers;

use App\Models\produk;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $mydata['title'] = "VGAPEDIA | Home Page";
        $mydata['produks'] = $this->getInRandom('produks', 4);
        return view('home', $mydata);
    }
}
