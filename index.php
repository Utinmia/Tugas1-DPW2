<?php
include "Animal.php";

class Kucing {
    public $jumlah_kaki, $bisa_terbang, $suara;
    function bersuara(){
        return "meong meong".$this ->suara;
    }    
}
$moci = new Kucing;
$moci->jumlah_kaki = 4;
$moci->bisa_terbang ="Tidak Bisa Terbang";
echo "Moci Adalah Kucing <br>";
echo "Punya Kaki Sebanyak : ".$moci->jumlah_kaki."<br>";
echo $moci->bisa_terbang."<br>";
echo "Suaranya : " .$moci -> bersuara();

echo "<hr>";

class Anjing{
    public $jumlah_kaki, $bisa_terbang, $suara;
    function bersuara(){
        return "Guk Guk".$this ->suara;
    }
}
$ipin = new Anjing;
$ipin->jumlah_kaki = 4;
$ipin->bisa_terbang ="Tidak Bisa Terbang";
echo "Ipin Adalah Anjing <br>";
echo "Punya Kaki Sebanyak : ".$ipin->jumlah_kaki."<br>";
echo $ipin->bisa_terbang."<br>";
echo "Suaranya : " .$ipin -> bersuara();

echo "<hr>";

class Elang{
    public $jumlah_kaki, $bisa_terbang, $suara;
    function bersuara(){
        return "Miiip".$this ->suara;
    }
}
$simpol = new Elang;
$simpol->jumlah_kaki = 2;
$simpol->bisa_terbang = "Bisa Terbang";
echo "Simpol Adalah Elang <br>";
echo "Punya Kaki Sebanyak : ".$simpol->jumlah_kaki."<br>";
echo $simpol->bisa_terbang."<br>";
echo "Suaranya : ".$simpol -> bersuara();

echo "<hr>";

class Angsa{
    public $jumlah_kaki, $bisa_terbang, $suara;
    function bersuara(){
        return "Kwaak".$this -> suara;
    }
}
$kiw = new Angsa;
$kiw->jumlah_kaki = 2;
$kiw->bisa_terbang = "Bisa Terbang";
echo "Kiw Adalah Angsa <br>";
echo "Punya Kaki Sebanyak : ".$kiw->jumlah_kaki."<br>";
echo $kiw->bisa_terbang."<br>";
echo "Suaranya : ".$kiw -> bersuara();

echo "<hr>";