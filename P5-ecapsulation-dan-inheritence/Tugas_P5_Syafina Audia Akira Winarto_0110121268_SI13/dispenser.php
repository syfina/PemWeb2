<?php

require_once 'class_dispenser.php';

$cappuccino = new Dispenser();
$cappuccino -> volume = 1275;
$cappuccino -> gelas = 300;
$cappuccino -> harga = 23700;
$cappuccino -> minuman = 'Cappuccino Caffè';

echo 'Nama Minuman : ' .$cappuccino -> minuman. '<br>';
echo 'Ukuran Gelas : ' .$cappuccino -> gelas. '<br>';
echo 'Volume Minuman : ' .$cappuccino -> volume. '<br>';
echo 'Harga Minuman : ' .$cappuccino -> harga. '<br>';



?>