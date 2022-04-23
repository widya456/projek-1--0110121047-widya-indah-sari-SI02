<html>

    <head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="login.css">
    </head>

    <body>
    <div class="container">
            <h2>LOGIN</h2>
            <form>
                <div class="form-group row">
                <label for="username" class="col-4 col-form-label">Username</label> 
                <div class="col-8">
                    <div class="input-group">
                    <div class="input-group-prepend">
                        <div class="input-group-text">
                        <i class="fa fa-address-book-o"></i>
                        </div>
                    </div> 
                    <input id="username" name="username" type="text" class="form-control">
                    </div>
                </div>
                </div>
                <div class="form-group row">
                <label for="password" class="col-4 col-form-label">Password</label> 
                <div class="col-8">
                    <div class="input-group">
                    <div class="input-group-prepend">
                        <div class="input-group-text">
                        <i class="fa fa-address-book"></i>
                        </div>
                    </div> 
                    <input id="password" name="password" type="text" class="form-control">
                    </div>
                </div>
                </div> 
                <div class="form-group row">
                <div class="offset-4 col-8">
                    <button name="submit" type="submit" class="btn btn-primary">Submit</button>
                    <button name="submit" type="submit" class="btn btn-primary">Daftar</button>
                </div>
                </div>
            </form>
        </div>
    </body>

</html>


<?php
    $proses = $_GET['proses'];
    $nama_siswa = $_GET['nama'];
    $mata_kuliah = $_GET['matkul'];
    $nilai_uts = $_GET['nilai_uts'];
    $nilai_uas = $_GET['nilai_uas'];
    $nilai_tugas = $_GET['nilai_tugas'];

    echo 'Proses : '.$proses;
    echo '<br/>Nama : '.$nama_siswa;
    echo '<br/>Mata Kuliah : '.$mata_kuliah;
    echo '<br/>Nilai UTS : '.$nilai_uts;
    echo '<br/>Nilai UAS : '.$nilai_uas;
    echo '<br/>Nilai Tugas/Praktikum : '.$nilai_tugas;

?>