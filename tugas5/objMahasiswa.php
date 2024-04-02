<?php

class Mahasiswa {
    public $nim;
    public $nama;
    public $kuliah;
    public $mata_kuliah;
    public $nilai;

    public function __construct($nim, $nama, $kuliah, $mata_kuliah, $nilai) {
        $this->nim = $nim;
        $this->nama = $nama;
        $this->kuliah = $kuliah;
        $this->mata_kuliah = $mata_kuliah;
        $this->nilai = $nilai;
    }

    public function getGrade() {
        if ($this->nilai >= 85 && $this->nilai <= 100) {
            return 'A';
        } elseif ($this->nilai >= 75 && $this->nilai <= 84) {
            return 'B';
        } elseif ($this->nilai >= 60 && $this->nilai <= 74) {
            return 'C';
        } elseif ($this->nilai >= 40 && $this->nilai <= 59) {
            return 'D';
        } elseif ($this->nilai >= 0 && $this->nilai <= 49) {
            return 'E';
        } else {
            return 'Tidak Valid';
        };
    }

    public function getPredikat() {
        switch (true) {
            case ($this->nilai >= 85 && $this->nilai <= 100):
                return 'Sangat Memuaskan';
                break;
            case ($this->nilai >= 75 && $this->nilai <= 84):
                return 'Memuaskan';
                break;
            case ($this->nilai >= 60 && $this->nilai <= 74):
                return 'Cukup';
                break;
            case ($this->nilai >= 40 && $this->nilai <= 59):
                return 'Kurang';
                break;
            case ($this->nilai >= 0 && $this->nilai <= 49):
                return 'Buruk';
                break;
            default:
                return 'Grade Tidak Valid';
                break;
        };
    }

    public function getStatus() {
        if ($this->nilai > 65) return "Lulus";
        else return "Tidak Lulus";
    }
}