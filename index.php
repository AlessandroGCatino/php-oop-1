<?php
class Movie
{
    public $name;
    public $director;
    public $genre;
    public $duration;
    public $poster;

    function __construct($_name, $_director, $_genre, $_duration, $_poster)
    {
        $this->name = $_name;
        $this->director = $_director;
        $this->genre = $_genre;
        $this->duration = $_duration;
        $this->poster = $_poster;
    }

    public function setName($filmName)
    {
        return $this->name = $filmName;
    }

    public function getName()
    {
        return $this->name;
    }
    
    public function setDirector($filmDirector)
    {
        return $this->director = $filmDirector;
    }

    public function getDirector()
    {
        return $this->director;
    }

    public function setGenre($filmGenre)
    {
        return $this->genre = $filmGenre;
    }

    public function getGenre()
    {
        return $this->genre;
    }

    public function setDuration($filmDuration)
    {
        return $this->duration = $filmDuration;
    }

    public function getDuration()
    {
        return $this->duration;
    }

    public function setPoster($filmPoster)
    {
        return $this->poster = $filmPoster;
    }

    public function getPoster()
    {
        return $this->poster;
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OOP Php</title>
</head>

<body>

    <?php
    $drive = new Movie("Drive", "Nicolas Winding Refn", "Drama", 100, "https://m.media-amazon.com/images/M/MV5BZjY5ZjQyMjMtMmEwOC00Nzc2LTllYTItMmU2MzJjNTg1NjY0XkEyXkFqcGdeQXVyNjQ1MTMzMDQ@._V1_.jpg");

    $avengers = new Movie("Avengers - Infinity War","Russo's Brothers", "Action", 149, "https://m.media-amazon.com/images/M/MV5BMjMxNjY2MDU1OV5BMl5BanBnXkFtZTgwNzY1MTUwNTM@._V1_FMjpg_UX1000_.jpg" );

    var_dump($drive, $avengers)
    ?>

</body>

</html>