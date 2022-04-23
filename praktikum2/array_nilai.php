<!DOCTYPE html>
<html>
    <head>
        <title>Form nilai</title>    
    </head>
    <body>
        <form action="array_nilai.php" method="GET">
            Nama : <input type="text" name="nama" value="" size="30"><br>
            Mata Kuliah : <select name="matkul">
                <option value="DDP">Dasar-Dasar Pemrograman</option>
                <option value="BDI">Basis Data 1</option>
                <option value="WEB1">Pemrograman Web</option>
            </select><br>
            Nilai UTS : <input type="text" name="nilai_uts" value="" size="6"><br>
            Nilai UAS : <input type="text" name="nilai_uas" value="" size="6"><br>
            Nilai Tugas/Praktikum : <input type="text" name="nilai_tugas" size="6"><br>
            <input type="submit" value="simpan" name="proses">
        </form>
    </body>
</html>

<?php
    $proses = $_GET['proses'];
    $nama_siswa = $_GET['nama'];
    $mata_kuliah = $_GET['matkul'];
    $nilai_uts = $_GET['nilai_uts'];
    $nilai_uas = $_GET['nilai_uas'];
    $nilai_tugas = $_GET['nilai_tugas'];

    
?>
