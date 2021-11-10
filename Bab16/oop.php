<?php


class orang
{
    //property

    var $nama;
    var $asal;

    // constructor

    function __construct()
    {
        echo "Contruct otomatis dijalankan..<br>";

        //mengubah value property

    }

    // destructor

    function __destruct()
    {
        echo "<br>Destruct dijalankan terakhir";
    }

    //method
    function kenalkan()
    {
        return "Haloo, aku JongKoding dari Jakarta";
    }
}
//instansiasi dari class orang

$obj_orang = new orang();
echo $obj_orang->kenalkan();
