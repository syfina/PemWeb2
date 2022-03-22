<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Daftar Mahasiswa</title>
        <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
        <link href="css/styles.css" rel="stylesheet" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" crossorigin="anonymous"></script>
    </head>
    <body class="sb-nav">

        <?php 
        include_once 'atas.php';
        ?>

        <div id="layoutSidenav">
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Daftar Mahasiswa</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">Daftar Mahasiswa</li>
                        </ol>
                        <div class="row"> 
                        <div class="card mb-4">
                            <div class="card-body">
                                <table id="datatablesSimple">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>NIM</th>
                                            <th>Nama</th>
                                            <th>Prodi</th>
                                            <th>Tahun Angkatan</th>
                                            <th>IPK</th>
                                            <th>Predikat</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>No</th>
                                            <th>NIM</th>
                                            <th>Nama</th>
                                            <th>Prodi</th>
                                            <th>Tahun Angkatan</th>
                                            <th>IPK</th>
                                            <th>Predikat</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                        <tr>

                                            <?php 

                                                require_once('class_mahasiswa.php');
                                            
                                                $mahasiswa = new Mahasiswa(011012, 'Richard', 'Sistem Informasi', 2021, 3.0);
                                
                                                echo '<td> 1 </td>';
                                                echo '<td>'.$mahasiswa->nim.'</td>';
                                                echo '<td>'.$mahasiswa->nama.'</td>';
                                                echo '<td>'.$mahasiswa->prodi.'</td>';
                                                echo '<td>'.$mahasiswa->thn_angkatan.'</td>';
                                                echo '<td>'.$mahasiswa->ipk.'</td>';
                                                echo '<td>'.$mahasiswa->predikat_ipk().'</td>';
                                            
                                                
                                            ?>

                                        </tr>
                                        <tr>
                                            <?php

                                                $mahasiswa2 = new Mahasiswa(011033, 'Shafeena', 'Bisnis Digital', 2020, 4);

                                                echo '<td> 2 </td>';
                                                echo '<td>'.$mahasiswa2->nim.'</td>';
                                                echo '<td>'.$mahasiswa2->nama.'</td>';
                                                echo '<td>'.$mahasiswa2->prodi.'</td>';
                                                echo '<td>'.$mahasiswa2->thn_angkatan.'</td>';
                                                echo '<td>'.$mahasiswa2->ipk.'</td>';
                                                echo '<td>'.$mahasiswa2->predikat_ipk().'</td>';

                                            ?>
                                        </tr>
                                        <tr>
                                            <?php

                                                $mahasiswa3 = new Mahasiswa(011041, 'Lev Jean', 'Teknologi Informasi', 2019, 2.75);

                                                echo '<td> 2 </td>';
                                                echo '<td>'.$mahasiswa3->nim.'</td>';
                                                echo '<td>'.$mahasiswa3->nama.'</td>';
                                                echo '<td>'.$mahasiswa3->prodi.'</td>';
                                                echo '<td>'.$mahasiswa3->thn_angkatan.'</td>';
                                                echo '<td>'.$mahasiswa3->ipk.'</td>';
                                                echo '<td>'.$mahasiswa3->predikat_ipk().'</td>';


                                            ?>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </main>
                <?php 
                    include_once 'bawah.php';
                ?>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
        <script src="assets/demo/chart-area-demo.js"></script>
        <script src="assets/demo/chart-bar-demo.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
        <script src="js/datatables-simple-demo.js"></script>
    </body>
</html>
