<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pendaftaran;
use App\Models\Pasien;
use App\Models\Poli;

class PendaftaranController extends Controller
{
    public function index(){
        $pendaftarans = Pendaftaran::all();
        return view("pendaftarans.index", compact("pendaftarans"));
    }

    public function create()
    {
        $pasien = Pasien::all();
        $poli = Poli::all();
        return view('pendaftarans.create', compact('pasien', 'poli'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'pasien_id' => 'required|exists:pasiens,id',
            'poli_id' => 'required|exists:polis,id',
            'tanggal_kunjungan' => 'required|date',
        ]);

        Pendaftaran::create($request->all());
        return redirect()->route('pendaftarans.index')->with('success', 'Pendaftaran berhasil ditambahkan.');
    }


}
