<?php

class ContohStatic
{
  public static $nama = ["Rendi", "Retno", "Rezi"];
  public static $index = 1; //variabel global
  public static function all()
  {
   $index = 1; //variabel lokal
   foreach(self::$nama as $na)
    {
       echo $index++ .".".$na . "<br>";
    }
  }
  public function display()

  {
    echo self::all();
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