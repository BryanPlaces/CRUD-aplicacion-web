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


    /**
     * Muestra la moneda seleccionada por id.
     * @param $idCurrency
     * @return Response
     */
    public function show($idCurrency) {

        /** Devuelve la moneda seleccionada por id. */
        $moneda = CbCurrency::find($idCurrency);
        return view('monedas.show') ->with('moneda', $moneda);
    }


}
