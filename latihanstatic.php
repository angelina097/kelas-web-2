<?php

class Bapak
{
    public static string $judul = "Ini dari class Bapak Stenly";

    public static function getJudul():string
    {
        return static::$judul;
    }
    public static function showClass():static 
    {
        return new static;
    }
}

class Anak extends Bapak
{
    public static string $judul = "Ini dari class Anak Tasya";
}
echo Bapak::getJudul();
echo "<br>"; 
echo var_dump(Bapak::showClass());
echo "<br>";
echo "<hr>";
echo Anak::getJudul();
echo "<br>";
echo var_dump(Anak::showClass());