<?php 
require_once __DIR__ . "/classes/Movie.php";

$movie = new Movie("The Equalizer - Il vendicatore", "Azione", "2h 12m");

var_dump($movie);