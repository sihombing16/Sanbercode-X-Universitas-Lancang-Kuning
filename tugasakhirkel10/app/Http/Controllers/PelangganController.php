<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pelanggan;

class PelangganController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pelanggan = pelanggan::all();
        return view('pelanggan.index', compact('pelanggan'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view ('pelanggan.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
    		'nama_pelanggan' => 'required',
    		'alamat_pelanggan' => 'required',
			'nomor_pelanggan' => 'required'
      	]);

		  $pelanggan = new Pelanggan;

		  $pelanggan->nama_pelanggan = $request->nama_pelanggan;
		  $pelanggan->alamat_pelanggan = $request->alamat_pelanggan;
		  $pelanggan->nomor_pelanggan = $request->nomor_pelanggan;
          
		  $gitarpelanggan->save();

		  return redirect('/pelanggan');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $pelanggan = Pelanggan::find($id);
        return view('pelanggan.show', compact('pelanggan'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $pelanggan = Pelanggan::find($id);
        return view('pelanggan.edit', compact('pelanggan'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
    		'nama_pelanggan' => 'required',
    		'alamat_pelanggan' => 'required',
			'nomor_pelanggan' => 'required'
          	]);

          $pelanggan = Pelanggan::find($id);

          $pelanggan->nama_pelanggan = $request['nama_pelanggan'];
          $pelanggan->alamat_pelanggan = $request['alamat_pelanggan'];
          $pelanggan->nomor_pelanggan = $request['nomor_pelanggan'];
          $pelanggan->save();

        return redirect('/pelanggan');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $pelanggan = Pelanggan::find($id);
        $pelanggan->delete();
        return redirect('/pelanggan');
    

}
    
}