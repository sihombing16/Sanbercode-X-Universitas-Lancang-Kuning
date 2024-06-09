<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Gitar;

class GitarController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $gitar = gitar::all();
        return view('gitar.index', compact('gitar'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view ('gitar.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
    		'merek_gitar' => 'required',
    		'model_gitar' => 'required',
			'harga_gitar' => 'required',
            'stok_gitar' => 'required'
      	]);

		  $gitar = new Gitar;

		  $gitar->merek_gitar = $request->merek_gitar;
		  $gitar->model_gitar = $request->model_gitar;
		  $gitar->harga_gitar = $request->harga_gitar;
          $gitar->stok_gitar = $request->stok_gitar;


		  $gitar->save();

		  return redirect('/gitar');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $gitar = Gitar::find($id);
        return view('gitar.show', compact('gitar'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $gitar = Gitar::find($id);
        return view('gitar.edit', compact('gitar'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
    		'merek_gitar' => 'required',
    		'model_gitar' => 'required',
			'harga_gitar' => 'required',
            'stok_gitar' => 'required'
      	]);

          $gitar = Gitar::find($id);

          $gitar->merek_gitar = $request['merek_gitar'];
          $gitar->model_gitar = $request['model_gitar'];
          $gitar->harga_gitar = $request['harga_gitar'];
          $gitar->stok_gitar = $request['stok_gitar'];
          $gitar->save();

        return redirect('/gitar');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $gitar = Gitar::find($id);
        $gitar->delete();
        return redirect('/gitar');
    }
}
