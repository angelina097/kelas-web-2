<?php

class ContohStatic
{
    public static $nama = "nama variable";

    public static function all()
    {
      echo "Ini Contoh Function Static";
    }
}   
    
class SubStatic extends ContohStatic

{

}

//inisialisasi object


echo ContohStatic:: $nama;
echo ContohStatic:: $nama;
echo "<br>";
echo ContohStatic::all();