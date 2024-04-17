<?php

namespace App\Http\Controllers;

use App\Models\Kategoria;

class KategoriaController extends Controller
{
    function index(){
        $kategoriak = Kategoria::all();
        return $kategoriak;
    }

}
