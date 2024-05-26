<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller; // Tambahkan ini

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('welcome');
    }
}