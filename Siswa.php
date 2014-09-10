<?php
class Siswa {
    private $nama;
    private $alamat;
    public function setNama($val) {
        $this->nama = $val;
    }
    public function getNama() {
        return $this->nama;
    }
    public function setAlamat($val) {
        $this->alamat = $val;
    }
    public function getAlamat() {
        return $this->alamat;
    }
}

$siswa = new Siswa();
$siswa->setNama("Beni");
$siswa->setAlamat("Bandung");
echo "Siswa " . $siswa->getNama() . " tinggal di " . $siswa->getAlamat() . "\n";
