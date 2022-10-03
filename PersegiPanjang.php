<?php
require_once 'Bentuk2d.php'; 
class PersegiPanjang extends Bentuk2d{
    // Variable
    public $panjang;
    public $lebar;

    public function __construct($panjang, $lebar){
        $this->panjang = $panjang;
        $this->lebar = $lebar;
    }

    public function namaBidang(){
        echo 'Persegi Panjang';
    }

    public function luasBidang(){
        $luas = $this->panjang * $this->lebar;
        return $luas;
    }
    public function kelilingBidang(){
        $keliling = 2 * ($this->panjang + $this->lebar);
        return $keliling;
    }

    public function Keterangan(){
        echo 'Panjang : '. $this->panjang;
        echo '<br> Lebar : '. $this->lebar;
    }
    public function Mencetak(){
        echo 'Persegi Panjang';
        echo '<td> '.$this->luasBidang();
        echo '<td> '.$this->kelilingBidang();
    }
}

?>