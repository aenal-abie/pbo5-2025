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
}
