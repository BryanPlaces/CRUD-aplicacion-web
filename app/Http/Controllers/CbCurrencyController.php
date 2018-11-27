<?php

namespace App\Http\Controllers;

use App\CbCurrency;
use Illuminate\Http\Request;

class CbCurrencyController extends Controller
{

    public function index() {

        /** Devolverá todas las monedas*/

        $monedas = CbCurrency::get();
        return view('monedas.index')->with('monedas', $monedas);
    }




}
