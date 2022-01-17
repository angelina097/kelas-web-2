<?php

class Contoh2
{
    // //variabel global
    // public $nama;
    // private $harga;
    
    //constructor
    public function __construct (public $nama = "kopi" , public  $harga = "1000")
    {
        $this->nama = $nama;
        $this->harga = $harga;
    }

    //function setter  dengan parameter
    public function setNama ( $nama)
    {
        $this-> nama = $nama;
    }
    public function getNama()
    {
        return $this->nama;
    }
    public function display():void
    {
        echo "nama : ".$this->getNama()."<br>";
        echo "harga : ".$this->getHarga();
    }
    public function setHarga ($harga)
    {
        $this->harga =$harga;
    }
    public function getHarga()
    {
        return $this->harga;
    }
        
}
 $contoh1 = new Contoh2;

 $contoh1->setNama(nama: "buku");
 $contoh1->setHarga(harga: "7000");

 echo $contoh1->display();
    