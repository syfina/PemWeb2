<?php
require_once('class_lingkaran.php');

$lingkaran1 = new Lingkaran(5);
$lingkaran2 = new Lingkaran(10);

echo "Luas Lingkaran 1: " . $lingkaran1->getLuas() . "<br>";
echo "Luas Lingkaran 2: " . $lingkaran2->getLuas() . "<br>";

echo "Keliling Lingkaran 1: " . $lingkaran1->getKeliling() . "<br>";
echo "Keliling Lingkaran 2: " . $lingkaran2->getKeliling() . "<br>";

?>