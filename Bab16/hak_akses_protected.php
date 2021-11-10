<?php


class warga
{
    //property

    protected $kota = "Aku warga kota Jakarta";
}

class orang extends warga
{
    //method
    function kenalkan()
    {
        return "Haloo, aku" . $this->kota;
    }
}
//instansiasi dari class orang

$obj_orang = new orang();
echo $obj_orang->kenalkan();
