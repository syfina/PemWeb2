<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bank Account</title>
</head>
<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <h3>
                    Account Info
                </h3>
                <table class="table">
                    <thead>
                        <tr>
                            <th>
                                No
                            </th>
                            <th>
                                Nomor Account
                            </th>
                            <th>
                                Pemilik
                            </th>
                            <th>
                                Saldo
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>
                                1
                            </td>
                            <td>
                                C001
                            </td>
                            <td>
                                Ahmad
                            </td>
                            <td>
                                6.000.000
                            </td>
                        </tr>
                        <tr class="table-active">
                            <td>
                                2
                            </td>
                            <td>
                                C002
                            </td>
                            <td>
                                Budi
                            </td>
                            <td>
                                5.350.000
                            </td>
                        </tr>
                        <tr class="table-success">
                            <td>
                                3
                            </td>
                            <td>
                                C003
                            </td>
                            <td>
                                Kurniawan
                            </td>
                            <td>
                                2.500.000
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>
</html>

<?php

require_once 'class_account.php';

class BankAccount extends Account{
    public $customer;
    
    function __construct($nomor,$saldo,$customer){
        parent::__construct($nomor,$saldo);
        $this->customer=$customer;
    }

    // override method 
    function cetak(){
        parent::cetak();
        echo '<br/>Customer : '.$this->customer;
    }
 
    function transfer($obj_akun,$uang){
        $obj_akun->deposit($uang);// rekening tujuan bertambah
        $this -> witdraw($uang);// rekening ini berkurang
    }

}

// ____________________________

$acc1 = new BankAccount('C001', 6000000, 'Ahmad');
$acc2 = new BankAccount('C002', 5350000, 'Budi');
$acc3 = new BankAccount('C003', 2500000, 'Kurniawan');


echo '<hr>';

echo 'sebelum menabung:<br>';
$acc1->cetak();
$acc1->deposit(1000000);
echo '<br>setelah menabung 1000000<br>';
$acc1->cetak();

echo '<hr>';

echo '<br>sebelum transfer<br>';
$acc1->cetak();
echo '<br/>';
$acc2->cetak();

echo '<hr>';

$acc1->transfer($acc2,1500000);
$acc1->transfer($acc3,500000);

echo '<br>sesudah transfer<br>';
$acc1->cetak();

echo '<br/>';
$acc2->cetak();
$acc3->cetak();


// ____________________________

?>



