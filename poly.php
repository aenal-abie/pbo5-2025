<?php
class Poly {
    public $kodePoly;
    public $namaPoly;

    public function __construct($kode, $nama){
        $this->kodePoly = $kode;
        $this->namaPoly = $nama;
    }
}

$poly1 =  new Poly("P001", "Poly Anak");
$poly2 =  new Poly("P002", "Poly Umum");

echo $poly1->namaPoly;
echo $poly2->namaPoly;