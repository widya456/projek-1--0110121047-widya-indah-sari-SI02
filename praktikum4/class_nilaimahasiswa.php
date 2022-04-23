<?php
class NilaiMahasiswa {
    var $matakuliah;
    var $nilai;
    var $nim;
    var $nama;

    function __construct($nama, $nim, $matakuliah, $nilai){
        $this->nama = $nama;
        $this->nim = $nim;
        $this->matakuliah = $matakuliah;
        $this->nilai = $nilai;
    }

    function grade(){
        if ($this->nilai >= 85 && $this->nilai <= 100) {
            $this->grade = "A";
            return "A";
          } elseif ($this->nilai >= 74 && $this->nilai <= 84) {
             $this->grade= "B";
            return "B";
          } elseif ($this->nilai >= 56 && $this->nilai <= 69) {
             $this->grade = "C";
             return "C";
          }elseif ($this->nilai >= 36 && $this->nilai <= 55) {
             $this->grade = "D";
             return "D";
          } elseif ($this->nilai >= 0 && $this->nilai <= 35) {
             $this->grade= "E";
             return "E";
          } else {
             $this->grade = "I";
             return "I";
          }
        }

        function keterangan(){
            if ($this->nilai > 55) {
                return "LULUS";
              } else {
                return "TIDAK LULUS";
              }
        }


        function predikat(){
            switch ($this->grade) {
                case "A";
                return "sangat memuaskan";
                  break;
                case "B";
                return "memuaskan";
                  break;
                case "C";
                return "cukup";
                  break;
                case "D";
                return "kurang";
                  break;
                case "E";
                return "sangat kurang";
                  break;
                default:
                return "tidak ada";
                  break;
              }
        }

    }

?>