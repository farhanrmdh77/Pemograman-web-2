<?php

class orang{
    //property
    public $nama;
    public $tgllahir;
    public $alamat;

    //constructor
    public function __construct()
    {
        $this->nama = " Prayetno";
    }

    //method
    public function ucapsalam(){
        echo "<h2> hallo, perkenalkan nama saya" . $this->nama . "</h2>";
    }

    //destructor
    public function __destruct()
    {
        echo "ini adalah destructor dari " . $this->nama . "<br>";
    }
}