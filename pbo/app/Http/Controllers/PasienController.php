<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pasien;

class PasienController extends Controller
{
    public function index()
    {
        $data = Pasien::all();
        return view('pasiens.index', compact('data'));
    }


    public function create()
    {
        return view('pasiens.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
            'nik' => 'required|string|max:16|unique:pasiens,nik',
            'alamat' => 'required|string',
        ]);

        Pasien::create($request->all());
        return redirect()->route('pasiens.index')->with('success', 'Pasien berhasil ditambahkan.');
    }
}
