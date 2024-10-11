<?php 
//jualan produk
//jualan komik
//jualan game

class Produk{
//atribut dan visibility
    public $judul = "judul",
           $penulis = " penulis",
           $penerbit = " penerbit",
           $harga = "0";
// method adalah function yang ada di dalam kelas

 public function getLabel(){
    return "$this->penulis, $this->penerbit";
    }
}

// $produk1 = new Produk();
// $produk1->judul = "naruto";
// var_dump($produk1);

// $produk2 = new Produk();
// $produk2->judul = "Black Clover";
// $produk2->tambahProp = "Black hahahahaha"; 
// var_dump($produk2);

$produk3 = new Produk();
$produk3->judul = "One Piece";
$produk3->penulis = "Oda Sensei";
$produk3->penerbit = "Toe Studio";
$produk3->harga ="3000";

echo "Komik : $produk3->penulis, $produk3->penerbit";
echo "<br>";
echo $produk3->getLabel();
echo "<hr>";

$produk4 = new Produk();
$produk4->judul = "Black Clover";
$produk4->penulis = "Yuki Tabata";
$produk4->penerbit = "Shueisa";

echo "Komik : $produk4->penulis, $produk4->penerbit";
echo "<br>";
echo "Game : " . $produk4->getLabel();
?>