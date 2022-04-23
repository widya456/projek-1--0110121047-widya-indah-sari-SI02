<?php
class Mahasiswa {
    var $nama;
    var $nim;
    var $thn_angkatan;
    var $prodi;
    var $ipk;

    function __construct($nama, $nim, $thn_angkatan, $prodi, $ipk){
        $this->nama = $nama;
        $this->nim = $nim;
        $this->thn_angkatan = $thn_angkatan;
        $this->prodi = $prodi;
        $this->ipk = $ipk;
    }
    function predikat_ipk(){
        if ($this->ipk <2.0)
            return "Cukup";
        elseif ($this->ipk >= 2.0 && $this->ipk <3.0)
            return "Baik";
        elseif ($this->ipk >= 3.0 && $this->ipk <3.75)
            return "Memuaskan";
        elseif ($this->ipk >= 3.75 && $this->ipk <=4.0)
            return "Cum Laude";
    }
}