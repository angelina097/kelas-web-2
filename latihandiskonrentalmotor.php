<?php

class Barang
 {
    private $harga; //variabel global
    private $diskon;
    
    public function __construct (int $harga = 5000 , int $diskon = 5)
    {
        $this->diskon = $diskon;
        $this->harga = $harga;
        
    }
    function getTotal (int $jumlahjam)
    {
        $total = 0; //variabel local
    
    if($jumlahjam >= 5)
    {
        $total += $jumlahjam * $this->harga; 

        return $total;
    }
       elseif($jumlahjam>= 6 && $jumlahjam <= 10)
         {
             $total += $jumlahjam = $this->harga;
         }else
          return $total;
        }
    }

    $barang = new Barang();
    echo $barang->getTotal(jumlahjam: 13);
    
    

