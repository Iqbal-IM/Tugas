<?php


class orang
{
    //property

    public $nama;
    public $asal;


    //method
    function kenalkan()
    {
        return "Haloo, aku JongKoding dari Jakarta";
    }
}
//instansiasi dari class orang

$obj_orang = new orang();
echo $obj_orang->kenalkan();
