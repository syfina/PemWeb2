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
                                <form method="POST" action="class_nilaimahasiswa.php" autocomplete="off">
                                    <div class="form-group row">
                                        <label for="nim" class="col-2 col-form-label">NIM</label> 
                                        <div class="col-10">
                                        <input id="nim" name="nim" placeholder="Masukan NIM" type="number" class="form-control" required="required">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="matkul" class="col-2 col-form-label">Matkul</label> 
                                        <div class="col-10">
                                        <select id="matkul" name="matkul" class="custom-select" required="required">
                                            <option value="dataware">Data Warehouse</option>
                                            <option value="pw">Pemrograman Web</option>
                                            <option value="basdat">Basis Data</option>
                                            <option value="jarkom">Jaringan Komputer</option>
                                            <option value="statistika">Statistika</option>
                                        </select>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="nama" class="col-2 col-form-label">Nama</label> 
                                        <div class="col-10">
                                        <input id="nama" name="nama" placeholder="Masukan nama" type="text" class="form-control" required="required">
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

                                    if(isset($_POST['submit'])){

                                        class NilaiMahasiswa {
                                            var $matkul;
                                            var $nilai;
                                            var $nim;

                                            function __construct($nim,$matkul,$nilai) {
                                                $this->nim = $nim;
                                                $this->matkul = $matkul;
                                                $this->nilai = $nilai; 
                                            }

                                            function grade() {
                                                if($this->nilai >= 0 && $this->nilai < 35) return "E";
                                                elseif($this->nilai >= 36 && $this->nilai < 55) return "D";
                                                elseif($this->nilai >= 56 && $this->nilai < 69) return "C";
                                                elseif($this->nilai >= 70 && $this->nilai < 84) return "B";
                                                elseif($this->nilai >= 85 && $this->nilai <= 100) return "A";
                                            }

                                            function hasil() {
                                                if($this->nilai <= 55) return "TIDAK LULUS";
                                                elseif($this->nilai >=56) return "LULUS";
                                            }
    
                                        }


                                        echo 'NIM : ' .$NilaiMahasiswa->nim. '<br>';
                                        echo 'Matkul : ' .$NilaiMahasiswa->matkul. '<br>';
                                        echo 'Nilai : ' .$NilaiMahasiswa->nilai. '<br>';
                                        echo 'Hasil Ujian : ' .$NilaiMahasiswa->grade(). '<br>';
                                        echo 'Grade : ' .$NilaiMahasiswa->hasil(). '<br>';
                                    }


                                    
                                    


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
