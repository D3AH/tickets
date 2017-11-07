<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index(Request $request, $opcion) {
        switch ($opcion) {
            case "1":
                return view('form');
                break;
            case "2":
                return "Seguimiento";
                break;
            case "3":
                return "Wizard Ayuda";
                break;
            case "4":
                return "Que es esto!";
                break;
        }
    }
}
