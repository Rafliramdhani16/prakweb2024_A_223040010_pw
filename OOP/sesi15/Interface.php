<?php

// Interface untuk mendefinisikan kontrak getInfoProduk
interface InfoProduk {
    public function getInfoProduk();
}

// Kelas abstrak Produk sebagai kelas dasar
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
    public function setJudul($judul) { $this->judul = $judul; }
    public function getJudul() { return $this->judul; }
    public function setPenulis($penulis) { $this->penulis = $penulis; }
    public function getPenulis() { return $this->penulis; }
    public function setPenerbit($penerbit) { $this->penerbit = $penerbit; }
    public function getPenerbit() { return $this->penerbit; }
    public function setHarga($harga) { $this->harga = $harga; }
    public function getHarga() { return $this->harga - ($this->harga * $this->diskon / 100); }
    public function setDiskon($diskon) { $this->diskon = $diskon; }
    public function getDiskon() { return $this->diskon; }

    // Method abstrak yang harus diimplementasikan oleh kelas turunan
    abstract public function getInfo();
}

// Kelas Komik turunan dari Produk dan mengimplementasikan InfoProduk
class Komik extends Produk implements InfoProduk {
    public $jmlHalaman;

    public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0, $jmlHalaman = 0) {
        parent::__construct($judul, $penulis, $penerbit, $harga);
        $this->jmlHalaman = $jmlHalaman;
    }

    public function getInfo() {
        return "{$this->judul} | {$this->getLabel()} (Rp. {$this->harga})";
    }

    public function getInfoProduk() {
        return "Komik : " . $this->getInfo() . " - {$this->jmlHalaman} Halaman.";
    }
}

// Kelas Game turunan dari Produk dan mengimplementasikan InfoProduk
class Game extends Produk implements InfoProduk {
    public $waktuMain;

    public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0, $waktuMain = 0) {
        parent::__construct($judul, $penulis, $penerbit, $harga);
        $this->waktuMain = $waktuMain;
    }

    public function getInfo() {
        return "{$this->judul} | {$this->getLabel()} (Rp. {$this->harga})";
    }

    public function getInfoProduk() {
        return "Game : " . $this->getInfo() . " ~ {$this->waktuMain} Jam.";
    }
}

// Kelas untuk mencetak informasi produk
class CetakInfoProduk {
    public $daftarProduk = array();

    public function tambahProduk(Produk $produk) {
        $this->daftarProduk[] = $produk;
    }

    public function cetak() {
        $str = "DAFTAR PRODUK : <br>";
        foreach ($this->daftarProduk as $p) {
            $str .= "- {$p->getInfoProduk()} <br>";
        }
        return $str;
    }
}

// Membuat objek-objek produk
$produk1 = new Komik("One Piece", "Eiichiro Oda", "Shueisha", 75000, 1000);
$produk2 = new Komik("Naruto", "Masashi Kishimoto", "Shueisha", 65000, 700);
$produk3 = new Komik("Attack on Titan", "Hajime Isayama", "Kodansha", 85000, 139);
$produk4 = new Game("Final Fantasy VII Remake", "Tetsuya Nomura", "Square Enix", 800000, 40);
$produk5 = new Game("The Legend of Zelda: Breath of the Wild", "Hidemaro Fujibayashi", "Nintendo", 750000, 50);

// Membuat objek CetakInfoProduk
$cetakProduk = new CetakInfoProduk();

// Menambahkan produk ke dalam daftar
$cetakProduk->tambahProduk($produk1);
$cetakProduk->tambahProduk($produk2);
$cetakProduk->tambahProduk($produk3);
$cetakProduk->tambahProduk($produk4);
$cetakProduk->tambahProduk($produk5);

// Mencetak daftar produk
echo $cetakProduk->cetak();
