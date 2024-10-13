<?php 
abstract class Produk {
    // Property protected untuk enkapsulasi data
    protected $judul, $penulis, $penerbit, $harga, $diskon = 0;

    // Constructor untuk inisialisasi objek
    public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0) {
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
    }

    // Method untuk mendapatkan label produk
    public function getLabel() {
        return "{$this->penulis}, {$this->penerbit}";
    }

    // Getter dan Setter untuk setiap property
    public function setJudul($judul) { 
        $this->judul = $judul; 
    }

    public function getJudul() { 
        return $this->judul; 
    }

    public function setPenulis($penulis) { 
        $this->penulis = $penulis; 
    }

    public function getPenulis() { 
        return $this->penulis; 
    }

    public function setPenerbit($penerbit) { 
        $this->penerbit = $penerbit; 
    }

    public function getPenerbit() { 
        return $this->penerbit; 
    }

    public function setHarga($harga) { 
        $this->harga = $harga; 
    }

    public function getHarga() { 
        return $this->harga - ($this->harga * $this->diskon / 100); 
    }

    public function setDiskon($diskon) { 
        $this->diskon = $diskon; 
    }

    public function getDiskon() { 
        return $this->diskon; 
    }

    // Method abstrak yang harus diimplementasikan oleh kelas turunan
    abstract public function getInfo();
}