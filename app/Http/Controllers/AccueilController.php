<?php

namespace App\Http\Controllers;

use App\Models\Accueil;
use Illuminate\Http\Request;

class AccueilController extends Controller
{
    public function index()
    {
        return view('Accueil');
    }
}
