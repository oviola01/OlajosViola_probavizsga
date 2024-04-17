<?php

namespace App\Http\Controllers;

use App\Models\Teszt;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TesztController extends Controller
{
    function index(){
        $tesztek = Teszt::all();
        return $tesztek;
    }


    function show($kategoria, $id){
        $teszt=Teszt::where('kategoria', $kategoria)->where('id', $id)->findOrFail();
        return $teszt;
    }

}
