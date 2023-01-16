<?php
class Movie {
    public $title;
    public $genre;
    public $plot;
    public $year;
    public $duration;

    public function __construct (string $title, string $genre, int $duration)
    {
        $this->title = $title;
        $this->genre = $genre;
        $this->duration = $duration;
    }

    //metodo
    public function getInfo()
    {
        return "Titolo: {$this->title}, il film dura: {$this->duration}.";
    }
}

