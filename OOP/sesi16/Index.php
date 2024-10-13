<?php
require_once 'App/Init.php';

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

echo "<hr>";
new Coba;