<?php
include("pasien.php");
include("poly.php");

class Pendaftaran {
    public $pasien;
    public $tanggalDaftar;
    public $poly;

    public function __construct($pasien, $tgl, $poly){
        $this->pasien = $pasien;
        $this->tanggalDaftar = $tgl;
        $this->poly = $poly;
    }

    public function info(){
        echo $this->pasien->namaPasien." Kode pasien ". $this->pasien->idPasien;
        echo " Mendaftar di ". $this->poly->namaPoly . " pada tanggal ". $this->tanggalDaftar;
    }
}

$pendaftan1 = new Pendaftaran($pasien1, "20 September 2024", $poly1 );
$pendaftan1->info();
// output yang diharapkan
// Budi Kode pasien 001 Mendaftar di poly anak pada tanggal 20 September 2024


$pendaftan2 = new Pendaftaran($pasien2, "21 September 2024", $poly2 );
$pendaftan2->info();


$pendaftan1 = new Pendaftaran($pasien1, "23 September 2024", $poly2 );
$pendaftan1->info();
