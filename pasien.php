<?php
class Pasien {
    public $idPasien;
    public $namaPasien;
    public $jk;
    public $tglLahir;
    public $umur;
    public $alamat;
    public $noTelp;
    public $status;
    public $pekerjaan;

    public function __construct($idPasien, $namaPasien) {
        $this->idPasien = $idPasien;
        $this->namaPasien = $namaPasien;
    }
    
}

$pasien1 =  new Pasien("001", "Budi");
echo "Nama Pasien adalah :".$pasien1->namaPasien;
$pasien2 =  new Pasien("002", "Ali");
echo "Nama Pasien adalah :".$pasien2->namaPasien;