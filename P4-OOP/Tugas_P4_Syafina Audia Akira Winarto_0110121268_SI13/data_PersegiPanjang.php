<?php 

    require_once('class_PersegiPanjang.php');

    $persegi1 = new PersegiPanjang(78,44);
    $persegi2 = new PersegiPanjang(40,29);

    echo "<br>";
    echo "<h3>Luas Persegi Panjang</h3>";
    echo "<hr>";
    echo "<br>";

    echo "Luas Persegi Panjang 1: " . $persegi1->getLuas() . "<br>";
    echo "Luas Persegi Panjang 2: " . $persegi2->getLuas() . "<br>";

    echo "<br>";
    echo "<hr>";

    echo "<br>";
    echo "<h3>Keliling Persegi Panjang</h3>";
    echo "<hr>";
    echo "<br>";

    echo "Keliling Persegi Panjang 1: " . $persegi1->getKeliling() . "<br>";
    echo "Keliling Persegi Panjang 2: " . $persegi2->getKeliling() . "<br>";

?>