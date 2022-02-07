<?php

class SearchArray
{
    public $names = ["Steven", "Suryanto", "Sefry", "Ricardo", "Khellmy", "Stenly", "Kelvin"];
    public bool $search = false;

    public function getAllName():SearchArray
    {
        $index =1;
        echo "Nama Seluruh Siswa: <br>";

        foreach($this->names as $name)
        {
            echo $index++ . ". " . $name. "<br>";
        }
        return $this;
    }

    public function searchName(String $searchName):void
    {
        echo "Nama yang dicari : [" . $searchName . "] . <br>";
        for ($i = 0; $i < count($this->names); $i++)
        {
            if($searchName == $this->names[$i])
            {
                $this->search = true;
                echo "Nama [" .$this->names [$i]."] ada di index:" . ($i+1);          
            }
        }
            if ($this->search == false)
            {
                echo "Nama [". $searchName . "] tidak ada di dalam array <br>";
            }
    }   


}

$array = new SearchArray();echo $array->getAllName()->searchname(searchName : "Sefry");