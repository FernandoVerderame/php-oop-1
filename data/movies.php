<?php

require_once __DIR__ . '/../models/Movie.php';

$movie_1 = new Movie(1, 'The Wolf of Wall Street', 'Basato su una storia vera, The Wolf of Wall Street segue l\'impressionante ascesa e la caduta di Jordan Belfort, il broker di New York che conquista una fortuna incredibile truffando milioni di investitori.', 'en', '4/5', $director_1);
$movie_2 = new Movie(2, 'Saw X', 'John, malato e disperato, si reca in Messico per sottoporsi a una rischiosa procedura medica sperimentale nella speranza di una cura miracolosa per il suo cancro. Il suo sogno svanisce quando scopre che l\'intera operazione non è altro che una truffa per frodare i più vulnerabili.', 'en', '3/5', $director_2);
$movie_3 = new Movie(3, 'La vita è bella', 'Durante la dittatura fascista, Guido Orefice, giovane ebreo trasferitosi nella campagna toscana, conosce una maestra elementare, Dora, e con lei costruisce una famiglia. L\'aggravarsi delle Leggi Razziali e i rastrellamenti nazisti portano l\'uomo ad essere deportato in campo di concentramento con il figlioletto Giosuè. Per proteggere il piccolo dagli orrori dello sterminio, Guido costruisce eroicamente un elaborato mondo di vertiginose fantasie.', 'it', '5/5', $director_3);
$movie_4 = new Movie(4, 'Perfetti sconosciuti', 'Una cena tra amici prende una strana piega quando accettano di lasciare i loro cellulari sul tavolo, rivelando il contenuto delle loro conversazioni e i segreti nascosti.', 'it', '4/5', $director_4);

var_dump($movie_1, $movie_2, $movie_3, $movie_4);

?>