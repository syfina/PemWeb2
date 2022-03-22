<?php
    //memanggil file class mahasiswa
    require_once 'class_mahasiswa.php';

    //menginisialisasi class mahasiswa
    $mahasiswa = new Mahasiswa(123,'Hadi',3);

    //Menampilkan predikat
    echo "NIM : ".$mahasiswa->nim.'<br>';
    echo "Nama : ".$mahasiswa->nama.'<br>';
    echo "IPK : ".$mahasiswa->ipk.'<br>';
    echo "Predikat : ".$mahasiswa->predikat_ipk();
?>