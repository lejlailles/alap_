<?php

namespace App\Http\Controllers;

use App\Models\Teszt;
use Illuminate\Http\Request;

class TesztController extends Controller
{
  
    public function index()
    {
        $teszt=Teszt::all();
        return response()->json($teszt);
    }



    public function expand()
    {
        $teszt=Teszt::with('kategoria')->get();
        return $teszt;
    }

  
}