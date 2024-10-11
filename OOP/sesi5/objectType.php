<?php 
//jualan produk
//jualan komik
//jualan game

class Produk{
//atribut dan visibility
//varibale kelas
    public $judul,
           $penulis,
           $penerbit,
           $harga;


        // magic method untuk constructor parameternya adalah variable local
        public function __construct($judul="judul", $penulis="penulis", $penerbit="penerbit", $harga=0){
            $this->judul = $judul;
            $this->penulis = $penulis;
            $this->penerbit = $penerbit;
            $this->harga = $harga;
        }

// method adalah function yang ada di dalam kelas
 public function getLabel(){
    return "$this->penulis, $this->penerbit";
    }
}

class CetakInfoProduk {
    public function cetak( Produk $produk){
        $str = "{$produk->judul} | {$produk->getLabel()} (Rp. {$produk->harga})";

        return $str;
    }
}

// $produk1 = new Produk();
// $produk1->judul = "naruto";
// var_dump($produk1);

// $produk2 = new Produk();
// $produk2->judul = "Black Clover";
// $produk2->tambahProp = "Black hahahahaha"; 
// var_dump($produk2);

$produk1 = new Produk("Naruto", "Masashi Kisimoto", "Shonen Jump", 3000);
$produk2 = new Produk("Black Clover", "Yuki Tabata", "Shueisa", 3000);

echo "Komik : " . $produk1->getLabel();
echo "<br>";
echo "Game : " . $produk2->getLabel();
echo "<br>";
$infoProduk = new CetakInfoProduk();
echo $infoProduk->cetak($produk1);

