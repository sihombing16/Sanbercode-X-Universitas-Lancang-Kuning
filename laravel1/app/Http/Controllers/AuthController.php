<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function form () {
        return view(('pages.register'));
    }

    public function store(request $REQUEST) {
        $nama = $_REQUEST['nama'];
        $bio = $_REQUEST ['bio'];

        return view('pages.home', ['nama' => $nama,'bio' => $bio]);
        
    }

}
