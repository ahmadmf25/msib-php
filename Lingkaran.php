<?php
require_once 'Bentuk2d.php'; 
class Lingkaran extends Bentuk2d{
    // Variable
    public $jari2;
    const PHI = 3.14;

    public function __construct($jari){
        $this->jari2 = $jari;
    }
    public function namaBidang(){
        echo 'Lingkaran';
    }

    public function luasBidang(){
        $luas = self::PHI * $this->jari2 * $this->jari2;
        return $luas;
    }
    public function kelilingBidang(){
        $keliling = 2 * self::PHI * $this->jari2;
        return $keliling;
    }
    public function Keterangan(){
        echo 'Jari-Jari : '. $this->jari2;
    }
    public function Mencetak(){
        echo 'Lingkaran';  
        echo '<td> '.$this->luasBidang();
        echo '<td> '.$this->kelilingBidang();
    }
}

?>