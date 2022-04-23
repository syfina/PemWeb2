<?php

class Dispenser{

    public $volume;
    public $hargaSegelas;
    private $volumeGelas;
    public $namaMinuman;


    public function isi($vol){
        $this -> volume = $vol;
        
    }
    public function isiGelas($gelas){
        $this -> volumeGelas = $gelas;

    }
    public function harga($harga){
        $this -> hargaSegelas = $harga;

    }
    public function nama($minuman){
        $this -> namaMinuman = $minuman;

    }    
}

?>