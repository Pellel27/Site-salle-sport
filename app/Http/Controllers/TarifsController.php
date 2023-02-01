<?php

namespace App\Http\Controllers;

use App\Models\Tarifs;
use Illuminate\Http\Request;

class TarifsController extends Controller
{
    public function index()
    {
        return view('Tarifs');
    }

}
