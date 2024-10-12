<?php

class User {
    protected $nama;
    protected $jk;

    public function __construct($nama, $jk) {
        $this->nama = $nama;
        $this->jk = $jk;
    }

    public function info() {
        echo "Nama :".$this->nama."\n";
        echo "Jenis Kelamin :".$this->jk."\n";
    }

    public function login($password) {
        if($password == 123) {
            echo "Anda berhasil login";
        } else {
            echo "Anda gagal login";
        }
    }
}

class Pasien extends User {
    public $no_pasien;

    public function __construct($nama, $jk, $no_pasien) {
        parent::__construct($nama, $jk);
        $this->no_pasien = $no_pasien;
    }

    public function login($no_pasien,$password){
        if($password == 1234 && $this->no_pasien == $no_pasien  ) {
            echo "Anda berhasil login";
        } else {
            echo "Anda gagal login";
        }
    }
}

class Dokter extends User {
    public $kode_dokter;

    public function __construct($nama, $jk, $kode_dokter) {
        parent::__construct($nama, $jk);
        $this->kode_dokter = $kode_dokter;
    }

    public function login($kode_dokter,$password){
        if($password == 1234 && $this->kode_dokter == $kode_dokter  ) {
            echo "Anda berhasil login";
        } else {
            echo "Anda gagal login";
        }
    }
}

$pasien1 = new Pasien("Budi", "L", "0001");
$pasien1->info();
$pasien1->login("0001", 1234);

$dokter1 = new Dokter("dr. Ali", 'L', 'D0001');
$dokter1->info();
$dokter1->login(123); 
