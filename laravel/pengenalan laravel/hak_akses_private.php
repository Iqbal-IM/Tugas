<?php


class orang
{
    //property

    private $nama;



    //method
    function kenalkan()
    {
        return "Haloo, aku" . $this->nama;
    }
}
//instansiasi dari class orang

$obj_orang = new orang();
echo $obj_orang->kenalkan();
