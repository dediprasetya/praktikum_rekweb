<?php

namespace App\Http\Controllers;

use App\Models\Dosen;
use Illuminate\Http\Request;

class DosenController extends Controller
{
    public function index()
    {
        return Dosen::all();
    }

    public function show($nidn)
    {
        return Dosen::find($nidn);
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nidn' => 'required|unique:dosen',
            'nama' => 'required',
            'umur' => 'required|integer',
            'alamat' => 'required',
            'kota' => 'required',
            'fakultas' => 'required',
            'matakuliah' => 'required',
        ]);

        return Dosen::create($validatedData);
    }

    public function update(Request $request, $nidn)
    {
        $dosen = Dosen::findOrFail($nidn);
        $dosen->update($request->all());

        return $dosen;
    }

    public function destroy($nidn)
    {
        $dosen = Dosen::findOrFail($nidn);
        $dosen->delete();

        return response()->noContent();
    }
}

