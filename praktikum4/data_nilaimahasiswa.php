<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <title>Nilai Mahasiswa</title>
  </head>
  <body>
    <h2 style="text-align: center;">FORM NILAI SISWA</h2>
    <hr>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-3">
            </div>
            <div class="col-md-6">
        <form class="form-horizontal" method="POST" action="data_nilaimahasiswa.php" >
                <div class="form-group row">
                    <label for="nama" class="col-4 col-form-label">Nama :</label> 
                    <div class="col-8">
                    <input id="nama" name="nama" placeholder="Nama Mahasiswa" type="text" class="form-control">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="nim" class="col-4 col-form-label">Nim :</label> 
                    <div class="col-8">
                    <input id="nim" name="nim" placeholder="Nomor Induk Mahasiswa" type="text" class="form-control">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="mata kuliah" class="col-4 col-form-label">Mata Kuliah :</label> 
                    <div class="col-8">
                    <select id="mata kuliah" name="mata kuliah" class="custom-select">
                        <option value="Pemograman Web">Pemograman Web</option>
                        <option value="Basis Data">Basis Data</option>
                        <option value="UI-UX">UI-UX</option>
                    </select>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="nilai" class="col-4 col-form-label">Nilai :</label> 
                    <div class="col-8">
                    <input id="nilai" name="nilai" placeholder="Nilai Mahasiswa " type="text" class="form-control">
                    </div>
                </div> 
                <div class="form-group row">
                    <div class="offset-4 col-8">
                    <input type="submit" name="proses" value="Simpan" class="bg-success text-white rounded border-0 p-2">
                    </div>
                </div>
                </form>
            </div>
            <div class="col-md-3">
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
        <hr>
                <?php
                    require_once "class_nilaimahasiswa.php";
                    $proses= $_POST["proses"];
                    $nama = $_POST["nama"];
                    $nim = $_POST["nim"];
                    $matakuliah = $_POST["matakuliah"];
                    $nilai = $_POST["nilai"];
                    
                    $nm1 = new NilaiMahasiswa($nama,$nim,$matakuliah,$nilai);

                    echo '<br> Nama : '.$nm1->nama;
                    echo '<br> NIM : '.$nm1->nim;
                    echo '<br> Mata Kuliah : '.$nm1->matakuliah;
                    echo '<br> Nilai : '.$nm1->nilai;
                    echo '<br> Grade : '.$nm1->grade();
                    echo '<br> Predikat : '.$nm1->predikat();
                    echo '<br> Status : '.$nm1->keterangan();
                ?> 
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  </body>
</html>