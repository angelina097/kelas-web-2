<?php
abstract class Product
{
    // syarat:
    // 1.memiliki atribute / abstract
    // 2.memiliki function yang bersifat abstract
    // 3.tidak memiliki contain body pada function
    // 4.harus sama dengan class implementasinya

    public abstract function judul();
}
        class Buku extends Product
        {
            public function __construct(String $nama = "moralandscape")
            {
                $this->nama = $nama;
            }
            public function getNama():String
            {
                return $this->nama;
            }
            
            public function judul()
            {}
                public function getJudul()
            
            {
                return $this->nama;
            
              $this->nama;
            }
        }

        $buku1 = new Buku();

        echo $buku1->getJudul();

        
    

    
