<?php

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
}

?>