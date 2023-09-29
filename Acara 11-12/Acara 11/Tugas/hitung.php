<?php
interface hitungLuas
{
    public function hitungLuasPersegi();
    public function hitungLuasSegitiga();
    public function hitungLuasLingkaran();
}
class Persegi implements hitungLuas
{
    public $sisi;

    public function __construct($sisi)
    {
        $this->sisi = $sisi;
    }
    public function hitungLuasPersegi()
    {
        return $this->sisi * $this->sisi;
    }

    public function hitungLuasSegitiga()
    {
        return 0; 
    }

    public function hitungLuasLingkaran()
    {
        return 0; 
    }
}
class Segitiga implements hitungLuas
{
    public $alas;
    public $tinggi;

    public function __construct($alas, $tinggi)
    {
        $this->alas = $alas;
        $this->tinggi = $tinggi;
    }

    public function hitungLuasPersegi() {
        return 0;
    }

    public function hitungLuasSegitiga()
    {
        return 0.5 * $this->alas * $this->tinggi;
    }

    public function hitungLuasLingkaran() {
        return 0; 
    }

}
class Lingkaran implements hitungLuas
{
    public $jari;

    public function __construct($jari)
    {
        $this->jari = $jari;
    }

    public function hitungLuasPersegi() {
        return 0; 
    }

    public function hitungLuasSegitiga() {
        return 0; 
    }

    public function hitungLuasLingkaran()
    {
        return pi() * $this->jari * $this->jari;
    }
}

$persegi = new Persegi(5);
$luasPersegi = $persegi->hitungLuasPersegi();
echo "Luas Persegi : " . $luasPersegi . "<br>";

$segitiga = new Segitiga(5, 7);
$luasSegitiga = $segitiga->hitungLuasSegitiga();
echo "Luas Segitiga : " . $luasSegitiga . "<br>";

$lingkaran = new Lingkaran(3);
$luasLingkaran = $lingkaran->hitungLuasLingkaran();
echo "Luas Lingkaran : " . $luasLingkaran . "<br>";
