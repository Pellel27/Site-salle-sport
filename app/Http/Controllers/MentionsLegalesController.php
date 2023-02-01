<?php

namespace App\Http\Controllers;

use App\Models\MentionLegales;
use Illuminate\Http\Request;

class MentionsLegalesController extends Controller
{
    public function index()
    {
        return view('MentionLegales');
    }

}
