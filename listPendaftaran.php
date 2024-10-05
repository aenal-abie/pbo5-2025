<?php

// Class untuk data pasien
class Pasien {
    public $idPasien;
    public $namaPasien;
    public $jenisKelamin;
    public $tglLahir;
    public $umur;
    public $alamat;
    public $noTelp;
    public $status;
    public $pekerjaan;

    public function __construct($idPasien, $namaPasien, $jenisKelamin, $tglLahir, $umur, $alamat, $noTelp, $status, $pekerjaan) {
        $this->idPasien = $idPasien;
        $this->namaPasien = $namaPasien;
        $this->jenisKelamin = $jenisKelamin;
        $this->tglLahir = $tglLahir;
        $this->umur = $umur;
        $this->alamat = $alamat;
        $this->noTelp = $noTelp;
        $this->status = $status;
        $this->pekerjaan = $pekerjaan;
    }
}

// Class untuk data poly
class Poly {
    public $kodePoly;
    public $namaPoly;

    public function __construct($kodePoly, $namaPoly) {
        $this->kodePoly = $kodePoly;
        $this->namaPoly = $namaPoly;
    }
}

// Class untuk pendaftaran pasien ke poly
class Pendaftaran {
    public $pasien;
    public $tanggalDaftar;
    public $poly;

    public function __construct(Pasien $pasien, $tanggalDaftar, Poly $poly) {
        $this->pasien = $pasien;
        $this->tanggalDaftar = $tanggalDaftar;
        $this->poly = $poly;
    }
}

// Class untuk menyimpan list pendaftaran
class ListPendaftaran {
    public $pendaftaran = [];

    public function tambahPendaftaran(Pendaftaran $pendaftaran) {
        $this->pendaftaran[] = $pendaftaran;
    }

    public function getAntrian() {
        return $this->pendaftaran;
    }

    public function tampilkanAntrian() {
        foreach ($this->pendaftaran as $key => $pendaftaran) {
            echo "Nomor Antrian: " . ($key + 1) . "\n";
            echo "Nama Pasien: " . $pendaftaran->pasien->namaPasien . "\n";
            echo "Tanggal Daftar: " . $pendaftaran->tanggalDaftar . "\n";
            echo "Poly: " . $pendaftaran->poly->namaPoly . "\n";
            echo "-----------------------------\n";
        }
    }
}

// Contoh penggunaan
$pasien1 = new Pasien(1, "Budi", "L", "1990-01-01", 34, "Jl. Sudirman No. 1", "08123456789", "Belum Menikah", "Programmer");
$pasien2 = new Pasien(2, "Siti", "P", "1992-02-02", 32, "Jl. Thamrin No. 2", "08198765432", "Menikah", "Dokter");

$poly1 = new Poly(101, "Poli Umum");
$poly2 = new Poly(102, "Poli Gigi");

$pendaftaran1 = new Pendaftaran($pasien1, "2024-10-05", $poly1);
$pendaftaran2 = new Pendaftaran($pasien2, "2024-10-05", $poly2);

$listPendaftaran = new ListPendaftaran();
$listPendaftaran->tambahPendaftaran($pendaftaran1);
$listPendaftaran->tambahPendaftaran($pendaftaran2);

$listPendaftaran->tampilkanAntrian();

?>
