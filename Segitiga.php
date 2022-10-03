<?php
require_once 'Bentuk2d.php'; 
class Segitiga extends Bentuk2d{
    // Variable
    public $alas;
    public $tinggi;
    public $sisi;

    public function __construct($alas, $tinggi, $sisi){
        $this->alas = $alas;
        $this->tinggi = $tinggi;
        $this->sisi = $sisi;
    }
    public function namaBidang(){
        echo 'Segitiga';
    }

    public function luasBidang(){
        $luas = 0.5 * $this->alas * $this->tinggi;
        return $luas;
    }
    public function kelilingBidang(){
        $keliling = 3 * $this->sisi;
        return $keliling;
    }

    public function Keterangan(){
        echo 'Alas : '. $this->alas;
        echo '<br> Tinggi  : '. $this->tinggi;
        echo '<br> Sisi : '. $this->sisi;
    }
    public function Mencetak(){
        echo ' Segitiga';
        echo '<td> '.$this->luasBidang();
        echo '<td> '.$this->kelilingBidang();
    }
}

?>