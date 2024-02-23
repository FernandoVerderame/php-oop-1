<?php

//Movie class
require_once __DIR__ . '/models/Movie.php';

//Movies list
require __DIR__ . '/data/movies.php';

// Director class
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

// Director list
$director_1 = new Director('Martin', 'Scorsese', 81, 'USA');
$director_2 = new Director('Kevin', 'Greutert', 58, 'USA');
$director_3 = new Director('Roberto', 'Benigni', 71, 'ITA');
$director_4 = new Director('Paolo', 'Genovese', 57, 'ITA');

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Movie</title>
</head>
<body>
    
</body>
</html>