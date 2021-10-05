<?php 

// CLASS = Modello per qualcosa 
// OGGETTO = Concretizzazione del modello (ISTANZA)

class Movie 
{
    public $title;
    public $director;
    public $language;
    public $production;
    public $year;
    public $isavailable;

    public function __construct($_title, $_director, $_language, $_production, $_year, $_isavailable ) 
    {
        $this->title = $_title;
        $this->director = $_director;
        $this->language = $_language;
        $this->production = $_production;
        $this->year = $_year;
        $this->isavailable = $_isavailable;
    }

    public function isAvailable() {
        if (!$this->isavailable > 0) {
            echo !$this->isavailable;
        } else {
            return 'Not available for the purchase';
        }
    }
}

$film1 = new Movie('Miele', 'Valeria golino', 'italiano', 'italia', '2019', 0);
$film2 = new Movie('Parasite', 'Bong Joon-ho', 'coreano', 'corea del sud', '2013', 22);


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OOP</title>
</head>
<body>
    <div class="film">
        <?php
            echo "<h2>$film1->title</h2>";
            echo "<p>$film1->director</p>";
            echo "<p>$film1->language</p>";
            echo "<p>$film1->production</p>";
            echo "<p>$film1->year</p>";
            echo $film1->isAvailable();
        ?>
    </div>
    <div class="film">
        <?php
            echo "<h2>$film2->title</h2>";
            echo "<p>$film2->director</p>";
            echo "<p>$film2->language</p>";
            echo "<p>$film2->production</p>";
            echo "<p>$film2->year</p>";
            echo $film1->isAvailable();
        ?>
    </div>
</body>
</html>


