<?php

class Director 
{
    public $first_name;
    public $last_name;
    public $age;
    public $country;

    // Construct function
    public function __construct($first_name, $last_name, $age, $country) 
    {
        $this->first_name = $first_name;
        $this->last_name = $last_name;
        $this->age = $age;
        $this->country = $country;
    }

    // Fullname function
    public function getFullName()
    {
        return $this->first_name . ' ' . $this->last_name;
    }
}

?>