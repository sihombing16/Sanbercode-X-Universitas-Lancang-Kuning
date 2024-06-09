<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Profil_karyawan;

class Profil_karyawanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $Profil_karyawan = Profil_karyawan::all();
        return view('Profil_karyawan.index', compact('Profil_karyawan'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view ('Profil_karyawan.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
    		'alamat_karyawan' => 'required',
    		'umur_karyawan' => 'required',
			'tanggal_lahir' => 'required'
      	]);

		  $Profil_karyawan = new Profil_karyawan;

		  $Profil_karyawan->alamat_karyawan = $request->alamat_karyawan;
		  $Profil_karyawan->umur_karyawan = $request->umur_karyawan;
		  $Profil_karyawan->tanggal_lahir = $request->tanggal_lahir;
          
		  $Profil_karyawan->save();

		  return redirect('/profil_karyawan');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $profil_karyawan = Profil_karyawan::find($id);
        return view('profil_karyawan.show', compact('profil_karyawan'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $profil_karyawan = Profil_karyawan::find($id);
        return view('profil_karyawan.edit', compact('profil_karyawan'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
    		'alamat_karyawan' => 'required',
    		'umur_karyawan' => 'required',
			'tanggal_lahir' => 'required'
          	]);

          $profil_karyawan = profil_karyawan::find($id);

          $profil_karyawan->alamat_karyawan = $request['alamat_karyawan'];
          $profil_karyawan->umur_karyawan = $request['umur_karyawan'];
          $profil_karyawan->tanggal_lahir = $request['tanggal_lahir'];
          $profil_karyawan->save();

        return redirect('/profil_karyawan');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $profil_karyawan = profil_karyawan::find($id);
        $profil_karyawan->delete();
        return redirect('/profil_karyawan');
    

}
    
}