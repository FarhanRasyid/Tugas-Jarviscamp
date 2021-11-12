<?php 
class animal
{
    public $nama, $kaki, $tipedarah;

    function __construct($nama, $kaki, $tipedarah)
    {
        $this->name = $nama;
        $this->legs = $kaki;
        $this->cold_blooded = $tipedarah;
    }

    function get_name()
    {
        return $this->name;
    }

    function get_legs()
    {
        return $this->legs;
    }
    function get_CB()
    {
        return $this->cold_blooded;
    }
}
?>