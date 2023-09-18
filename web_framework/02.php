<?php
class Tumbuhan {
    public $nama;
   
}
 class  Melati  extends  Tumbuhan{
    public $warna;
    public $jenis;
 }
 class Kamboja extends Tumbuhan{
    public $aroma;
    public $bentuk;
 }
$Mputih = new Melati();
$Mputih->nama ='melati putih';
$Mputih->warna = 'putih';
$Mputih->jenis = 'Jasminum Sambac';
$Mputih->aroma = 'kuat dan manis';
$Mputih->bentuk = 'bulat seperti telur dan agak lonjong';
echo '<br />ini adalah ' . $Mputih->nama . ' berwarna:' . $Mputih->warna . ' jenis:' . $Mputih->jenis . 'aroma:' .$Mputih->aroma .'bentuk:' .$Mputih->bentuk ;


$Mpot = new Melati();
$Mpot->nama ='melati pot';
$Mpot->warna = 'putih kehijauan';
$Mpot->jenis = 'Jasminum parkeri';
$Mpot->aroma = 'kuat dan manis';
$Mpot->bentuk = 'kecil';
echo '<br />ini adalah ' . $Mpot->nama . ' berwarna:' . $Mpot->warna . ' jenis:' . $Mpot->jenis . 'aroma:' .$Mpot->aroma .'bentuk:' .$Mpot->bentuk ;

?>

