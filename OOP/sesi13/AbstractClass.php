<?php 

//abtract kelas adalah kelas yang tidak dapat diintaansiasi
//kelas ini akan mendefinisikan untuk kelas lain yang turunanya yang berperan sebagai kerangka untuk kelas turunannya
//memiliki minimal 1 method abstract
// Abstract class Kendaraan
abstract class Kendaraan {
    protected $merk;
    protected $model;

    // Constructor
    public function __construct($merk, $model) {
        $this->merk = $merk;
        $this->model = $model;
    }

    // Method abstract
    abstract public function bergerak();

    // Method biasa
    public function getInfo() {
        return "Kendaraan ini adalah {$this->merk} {$this->model}.<br>";
    }
}

// Kelas turunan Mobil
class Mobil extends Kendaraan {
    public function bergerak() {
        return "Mobil {$this->merk} {$this->model} bergerak dengan empat roda.<br>";
    }
}

// Kelas turunan Motor
class Motor extends Kendaraan {
    public function bergerak() {
        return "Motor {$this->merk} {$this->model} bergerak dengan dua roda.<br>";
    }
}

// Penggunaan
$mobil = new Mobil("Toyota", "Avanza");
echo $mobil->getInfo();
echo $mobil->bergerak();

$motor = new Motor("Honda", "CBR");
echo $motor->getInfo();
echo $motor->bergerak();
