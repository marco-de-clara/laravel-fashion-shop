<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Dresse;

class DresseController extends Controller
{
    public function index() {
        $all_dresses = Dresse::all();
        return view('shop', ['dresses' => $all_dresses]);
    }
}
