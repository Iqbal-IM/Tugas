<?php

//parent class
class warga
{
    //property
    protected $kota = "Aku warga kota Jakarta";
    public function kecamatan()
    {
        return "<br>Aku dari Kecamatan Duren Sawit";
    }
}

// child class

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
echo $obj_orang->kecamatan();
