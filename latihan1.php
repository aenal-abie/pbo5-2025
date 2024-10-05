<?php

class Pegawai {
    public $nik;
    public $nama;
    public $jk;
    public $jabatan;
    public $alamat;

    public function __construct($nik, $nama){
        $this->nik =  $nik;
        $this->nama =  $nama;
    }

    public function bekerja(){
        echo ($this->nama . " Sedang bekerja");

    }

    public function lembur(){

    }

}

$wahyu = new Pegawai("0001", "Wahyu B");
$wahyu->bekerja();