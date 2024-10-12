<?php 
class Produk {
    private $judul,
           $penulis,
           $penerbit,
           $harga,
           $diskon = 0;

    public function __construct($judul="judul", $penulis="penulis", $penerbit="penerbit", $harga=0) {
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
    }

    public function getJudul() {
        return $this->judul;
    }

    public function setJudul($judul) {
        if (!is_string($judul)){
            throw new Exception("Judul harus berupa string");
        }
        $this->judul = $judul;
    }

    public function getPenulis() {
        return $this->penulis;
    }

    public function setPenulis($penulis) {
        if (!is_string($penulis)){
            throw new Exception("Penulis harus berupa string");
        }
        $this->penulis = $penulis;
    }

    public function getPenerbit() {
        return $this->penerbit;
    }

    public function setPenerbit($penerbit) {
        if (!is_string($penerbit)){
            throw new Exception("Penerbit harus berupa string");
        }
        $this->penerbit = $penerbit;
    }

    public function getHarga() {
        return $this->harga - ($this->harga * $this->diskon / 100);
    }

    public function setHarga($harga) {
        if (!is_numeric($harga)){
            throw new Exception("Harga harus berupa angka");
        }
        $this->harga = $harga;
    }

    public function getDiskon() {
        return $this->diskon;
    }

    public function setDiskon($diskon) {
        if (!is_numeric($diskon) || $diskon < 0 || $diskon > 100){
            throw new Exception("Diskon harus berupa angka antara 0 dan 100");
        }
        $this->diskon = $diskon;
    }

    public function getLabel() {
        return "$this->penulis, $this->penerbit";
    }

    public function getInfoProduk() {
        $str = "{$this->judul} | {$this->getLabel()} (Rp. {$this->harga})";
        return $str;
    }
}

class Komik extends Produk {
    private $jmlHalaman;

    public function __construct($judul="judul", $penulis="penulis", $penerbit="penerbit", $harga=0, $jmlHalaman = 0) {
        parent::__construct($judul, $penulis, $penerbit, $harga);
        $this->jmlHalaman = $jmlHalaman;
    }

    public function getJmlHalaman() {
        return $this->jmlHalaman;
    }

    public function setJmlHalaman($jmlHalaman) {
        if (!is_numeric($jmlHalaman) || $jmlHalaman < 0){
            throw new Exception("Jumlah halaman harus berupa angka positif");
        }
        $this->jmlHalaman = $jmlHalaman;
    }

    public function getInfoProduk() {
        $str = "Komik : " . parent::getInfoProduk() . " - {$this->jmlHalaman} Halaman";
        return $str;
    }
}

class Game extends Produk {
    private $waktuMain;

    public function __construct($judul="judul", $penulis="penulis", $penerbit="penerbit", $harga=0, $waktuMain = 0) {
        parent::__construct($judul, $penulis, $penerbit, $harga);
        $this->waktuMain = $waktuMain;
    }

    public function getWaktuMain() {
        return $this->waktuMain;
    }

    public function setWaktuMain($waktuMain) {
        if (!is_numeric($waktuMain) || $waktuMain < 0){
            throw new Exception("Waktu main harus berupa angka positif");
        }
        $this->waktuMain = $waktuMain;
    }

    public function getInfoProduk() {
        $str = "Game : " . parent::getInfoProduk() . " - {$this->waktuMain} Jam";
        return $str;
    }
}

class CetakInfoProduk {
    public function cetak(Produk $produk) {
        $str = "{$produk->getJudul()} | {$produk->getLabel()} (Rp. {$produk->getHarga()})";
        return $str;
    }
}

// Membuat objek
$produk1 = new Komik("Naruto", "Masashi Kisimoto", "Shonen Jump", 30000, 100);
$produk2 = new Game("Black Clover", "Yuki Tabata", "Shueisa", 250000, 50);

// Menampilkan informasi
echo $produk1->getInfoProduk();
echo "<br>";
echo $produk2->getInfoProduk();
echo "<hr>";

$produk2->setDiskon(50);
echo $produk2->getHarga();
echo "<br>";

$produk1->setPenulis("Rafli");
echo $produk1->getPenulis();
