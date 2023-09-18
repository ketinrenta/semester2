<?php

class Buah {
     public $nama;
     public $warna;
     public $berat;

}
$apel = new Buah();
$apel->nama ='Buah Apel';
$apel->warna ='Merah';
$apel->berat ='2.5';
echo 'Ini adalah '. $apel->nama. ' berwarna:' . $apel->warna . ' berat:' . $apel->berat . ' kg <br>';

$mangga = new Buah();
$mangga->nama ='Buah Mangga';
$mangga->warna ='oren';
$mangga->berat ='3.0';
echo 'Ini adalah '. $mangga->nama. ' berwarna:' . $mangga->warna . ' berat:' . $mangga->berat . ' kg <br>';

$durian = new Buah();
$durian->nama ='Buah Durian';
$durian->warna ='kuning';
$durian->berat ='5.0';
echo 'Ini adalah '. $durian->nama. ' berwarna:' . $durian->warna . ' berat:' . $durian->berat . ' kg <br>';

?>