<?php
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


// Movie class
class Movie 
{
    public $id;
    public $title;
    public $overview;
    public $language;
    public $vote;
    public $director;

    // Construct function
    public function __construct($id, $title, $overview, $language, $vote, Director $director) 
    {
        $this->id = $id;
        $this->title = $title;
        $this->overview = $overview;
        $this->language = $language;
        $this->vote = $vote;
        $this->director = $director;
    }

    // Abstract function
    public function getAbstract() 
    {
        return substr($this->overview, 0, 50);
    }
};

// Movies list
$movie_1 = new Movie(1, 'The Wolf of Wall Street', 'Basato su una storia vera, The Wolf of Wall Street segue l\'impressionante ascesa e la caduta di Jordan Belfort, il broker di New York che conquista una fortuna incredibile truffando milioni di investitori.', 'en', '4/5', $director_1);
$movie_2 = new Movie(2, 'Saw X', 'John, malato e disperato, si reca in Messico per sottoporsi a una rischiosa procedura medica sperimentale nella speranza di una cura miracolosa per il suo cancro. Il suo sogno svanisce quando scopre che l\'intera operazione non è altro che una truffa per frodare i più vulnerabili.', 'en', '3/5', $director_2);
$movie_3 = new Movie(3, 'La vita è bella', 'Durante la dittatura fascista, Guido Orefice, giovane ebreo trasferitosi nella campagna toscana, conosce una maestra elementare, Dora, e con lei costruisce una famiglia. L\'aggravarsi delle Leggi Razziali e i rastrellamenti nazisti portano l\'uomo ad essere deportato in campo di concentramento con il figlioletto Giosuè. Per proteggere il piccolo dagli orrori dello sterminio, Guido costruisce eroicamente un elaborato mondo di vertiginose fantasie.', 'it', '5/5', $director_3);
$movie_4 = new Movie(4, 'Perfetti sconosciuti', 'Una cena tra amici prende una strana piega quando accettano di lasciare i loro cellulari sul tavolo, rivelando il contenuto delle loro conversazioni e i segreti nascosti.', 'it', '4/5', $director_4);

var_dump($movie_1, $movie_2, $movie_3, $movie_4);


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