<?php
class Siswa {
    private $nama;
    private $alamat;
    private $berat;
    private $tinggi;
    public function __get($attribute)
    {
        if (property_exists($this, $attribute)) {
            if (method_exists($this, 'get'.$attribute)) {
                return call_user_func([$this, 'get'.$attribute]);
            } else {
                return $this->$attribute;
            }
        }
    }
    public function __set($attribute, $value)
    {
        if (property_exists($this, $attribute)) {
            $this->$attribute = $value;
        }
    }
    public function getBerat() {
        return $this->berat . " Kg";
    }
    public function getTinggi() {
        return $this->tinggi . " Cm";
    }
}

$siswa = new Siswa();
$siswa->nama = "Beni";
$siswa->alamat = "Bandung";
$siswa->berat = 67;
$siswa->tinggi = 180;
echo "Siswa " . $siswa->nama . " tinggal di " . $siswa->alamat . "\n";
echo "Dengan berat " . $siswa->berat . " dan tinggi " . $siswa->tinggi . "\n";
