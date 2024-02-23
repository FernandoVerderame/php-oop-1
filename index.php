<?php

// Movie class
class Movie 
{
    public $id;
    public $title;
    public $overview;
    public $language;
    public $vote;

    // Construct function
    public function __construct($id, $title, $overview, $language, $vote) 
    {
        $this->id = $id;
        $this->title = $title;
        $this->overview = $overview;
        $this->language = $language;
        $this->vote = $vote;
    }

    // Abstract function
    public function getAbstract() 
    {
        return substr($this->overview, 0, 50);
    }
};



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