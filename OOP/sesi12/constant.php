<?php 
//define harus diluar kelas tidak bisa di dalam kelas
// define ('NAMA', 'Rafli Ramdhani');
// echo NAMA;


//kita bisa masukan di dalam kelas
// const UMUR = 21;

// echo "<br>";
// echo UMUR;


// class Coba{
//     const NAMA = 'Rafli';
// }

// // pemanggilan menggunakan property
// echo Coba::NAMA;

class ContohMagicConstant {
    public function tampilkanInfo() {
        echo "#### Informasi Kelas<br>";
        echo "Nama kelas: " . __CLASS__ . "<br>";
        echo "Nama metode: " . __METHOD__ . "<br>";
        echo "Nama fungsi: " . __FUNCTION__ . "<br>";
        echo "Baris kode: " . __LINE__ . "<br>";
        echo "File: " . __FILE__ . "<br>";
        echo "Direktori: " . __DIR__ . "<br>";
    }
}

// Membuat objek dari kelas ContohMagicConstant
$objek = new ContohMagicConstant();

// Memanggil metode tampilkanInfo
$objek->tampilkanInfo();

// Fungsi di luar kelas
function fungsiLuar() {
    echo "<br>#### Informasi Fungsi Luar<br>";
    echo "Nama fungsi: " . __FUNCTION__ . "<br>";
    echo "Baris kode: " . __LINE__ . "<br>";
}

// Memanggil fungsi luar
fungsiLuar();

// Menambahkan informasi waktu eksekusi
echo "<br>#### Informasi Tambahan<br>";
echo "Waktu eksekusi: " . date('Y-m-d H:i:s') . "<br>";

