<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pendaftaran;

class PendaftaranController extends Controller
{
    public function index(){
        $pendaftarans = Pendaftaran::all();
        return view("pendaftarans.index", compact("pendaftarans"));
    }

    public function edit(){}
}
