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
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

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
                        <h1 class="mt-4">Form Nilai Ujian</h1>
                        <div class="card mb-4">
                            <div class="card-body">
                                <form method="POST" action="nilaimahasiswa.php" autocomplete="off">
                                    <div class="form-group row">
                                        <label for="nim" class="col-2 col-form-label">NIM</label> 
                                        <div class="col-10">
                                        <input id="nim" name="nim" placeholder="Masukan NIM" type="number" class="form-control" required="required">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="matakuliah" class="col-2 col-form-label">Matkul</label> 
                                        <div class="col-10">
                                        <select id="matakuliah" name="matakuliah" class="custom-select" required="required">
                                            <option value="dataware">Data Warehouse</option>
                                            <option value="pw">Pemrograman Web</option>
                                            <option value="basdat">Basis Data</option>
                                            <option value="jarkom">Jaringan Komputer</option>
                                            <option value="statistika">Statistika</option>
                                        </select>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="nilai" class="col-2 col-form-label">Nilai</label> 
                                        <div class="col-10">
                                        <input id="nilai" name="nilai" placeholder="Masukan Nilai" type="number" class="form-control" required="required">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="offset-2 col-10">
                                        <button name="submit" type="submit" class="btn btn-primary">Simpan</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="card mb-4">
                            <div class="card-body">
                                <?php

                                    require_once ('class_nilaimahasiswa.php');

                                    $nim = $_POST['nim'];
                                    $matakuliah = $_POST['matakuliah'];
                                    $nilai = $_POST['nilai'];

                                    $nilaisiswa = new nilaiMahasiswa($nim,$matakuliah,$nilai);

                                    echo 'NIM : '.$nilaisiswa->nim.'<br/>';
                                    echo 'Mata Kuliah : '.$nilaisiswa->matakuliah.'<br/>';
                                    echo 'Nilai : '.$nilaisiswa->nilai.'<br/>';
                                    echo 'Predikat : '.$nilaisiswa->nilai_grade().'<br/>';
                                    
                                    


                                ?>
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
