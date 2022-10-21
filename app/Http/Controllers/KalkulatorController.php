<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KalkulatorController extends Controller
{
    //
    public function index()
    {
        return view('kalkulator/kalkulator');
    }

    public function hitung()
    {
        $no1 = request('bilangan1');
        $no2 = request('bilangan2');

        $hasil['hasil'] = $no1 + $no2;
        // return redirect('kalkulator/');
        return view('kalkulator/kalkulator', $hasil);
    }
}
