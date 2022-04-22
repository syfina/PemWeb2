<?php
class nilaiMahasiswa{
    var $nim;
    var $matakuliah;
    var $nilai;

    function __construct($nim,$matakuliah,$nilai){
        $this->nim = $nim;
        $this->matakuliah = $matakuliah;
        $this->nilai = $nilai;
    }
    
    function nilai_grade(){
        if($this->nilai < 35) return "E";
        elseif($this->nilai >= 36 && $this->nilai < 55) return "D";
        elseif($this->nilai >= 56 && $this->nilai < 69) return "C";
        elseif($this->nilai >= 70 && $this->nilai <= 84) return "B";
        elseif($this->nilai >= 85 && $this->nilai <= 100) return "A";
    }
}
?>