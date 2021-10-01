<?php

class Endereco
{
    private $city;
    private $district;
    private $street;
    private $number;

    public function __construct($city, $district, $street, $number)
    {
        $this->city = $city;
        $this->district = $district;
        $this->street = $street;
        $this->number = $number;
    }

    public function getCity(){
        return $this->city;
    }

    public function getDistrict(){
        return $this->district;
    }

    public function getStreet(){
        return $this->street;
    }

    public function getNumber(){
        return $this->number;
    }

    public function __toString()
    {
       return "{$this->street}, {$this->number}, {$this->district}, {$this->city}";
    }

    public function __get($nameAttb)
    {
        $method = 'recupera' . ucfirst($nameAttb);
        return $this->$method();
    }

    public function __set($nameAttb, $value)
    {
        $this->$nameAttb = $value;
    }
}
?>