<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Poli;

class PoliController extends Controller
{
    public function index(){
        $data =  Poli::all();
        return view("polis.index", compact("data"));
    }


    public function create() {
        return view("polis.create");
    }

    public function store(Request $request)
    {
        // dd($request);
        $request->validate([
            'kode_poli' => 'required|string|max:10',
            'nama_poli' => 'required|string|max:30',
            'status' => 'required|string|max:10',
        ]);

        Poli::create($request->all());
        return redirect()->route('polis.index')
            ->with('success', 'Pasien berhasil ditambahkan.');
    }


}
