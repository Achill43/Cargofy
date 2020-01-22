<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Way;

class SPAController extends Controller
{
    public function index()
    {
        return view('index');
    }
}
