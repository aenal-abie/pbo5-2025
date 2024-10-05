<?php
class Barang {
    private $kode_barang;
    private $nama_barang;
    private $jenis;
    private $harga_beli;
    private $harga_jual;
    private $stock;

    public function __construct($kode, $nama_barang, $jenis, $harga_beli, $harga_jual, $stock){
        $this->kode_barang =  $kode;
        $this->nama_barang =  $nama_barang;
        $this->jenis =  $jenis;
        $this->harga_beli =  $harga_beli;
        $this->harga_jual =  $harga_jual;
        $this->stock =  $stock;
    }
    public function tambah_stock($jumlah) {
        $his->stock = $this->stock+$jumlah;
    }
    public function kurangi_stock($jumlah) {
        if($his->stock > $jumlah){
            $his->stock = $this->stock-$jumlah;
        } else {
            echo "Stcok tidak cukup";
        }   
    }
    public function atur_harga_beli($harga_beli_baru) {
        $this0->harga_beli =  $harga_beli_baru;
    }
    public function atur_harga_jual($harga_jual_baru) {
        $this0->harga_jual =  $harga_jual_baru;
    }
}

$smasungg10 = new Barang("0001","Smasung", "handpone", 20000, 30000, 10);
$smasungg10->tambah_stock(20);
$smasungg10->kurangi_stock(2);


