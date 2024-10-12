<?php 

// class ContohStatic{
//     public static $angka =1;

//     public static function Hello() {
//         return "Hallo" . self::$angka . " kali.";
//     }

// }



// echo ContohStatic::$angka;
// echo "<br>";

// echo ContohStatic::Hello();
// echo "<hr>";

// echo ContohStatic::Hello();

class Contoh {
    public static $angka = 1 ;

    public function Hello() {
        return "Hallo" . self::$angka++ . " kali.";
    }
}

$obj = new Contoh();
echo $obj->Hello();
echo $obj->Hello();
echo $obj->Hello();