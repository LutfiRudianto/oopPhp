<?php


class Produk
{
    public $judul,
        $penulis,
        $penerbit,
        $harga;

    public function __construct($judul = "judul",$penulis="penulis",$penerbit="penerbit",$harga="harga")
    {
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
    }

    public function getLabel(){
        return "$this->judul,$this->penulis,$this->harga";
    }
}

$produk = new Produk("naruto","mashashi kisimoto","shonnen Jump",3000);
$produk1 = new Produk();

echo "KOMIK : ".$produk->getLabel();
echo "<br>";
echo "GAME : ". $produk1->getLabel();
var_dump($produk1);

