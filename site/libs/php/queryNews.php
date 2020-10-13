<?php

require_once('class/connection.class.php');

$connection = new Connection();

$query = $connection->searchNews();

while($line = $query->fetch_assoc()){
    
    $titles = $line['title'];
    $imgs = $line['img'];
    $news = $line['new'];
    $categorys = $line['category'];
    
    echo "<div class='container pt-3 pb-3'>";
    echo "<div class='container bg-primary pt-4 pr-4 pb-4 mb-3 rounded shadow'>";
    echo "<a href=' class='text-decoration-none text-reset'>";
    echo "<div class='row'>";
    echo "<div class='col-3'>";
    echo "<img class='rounded mx-auto d-bolck img-fluid' src='../images/news/" . $imgs . "' alt='>";
    echo "</div>";
    echo "<div class='col bg-light rounded'>";
    echo "<div class='container mx-auto d-block'>";
    echo "<div class='row h-25 bg-dark rounded mt-2 mb-2 pt-3 pb-1 justify-content-center'>";
    echo "<p class='text-white font-weight-bold text-uppercase'>" . $titles . "</p>";
    echo "</div>";
    echo "</div>";
    echo "<div class='container'>";
    echo "<div class='row h-75 text-justify'>";
    echo "<p>" . $news . "</p>";
    echo "</div>";
    echo "</div>";
    echo "</div>";
    echo "</div>";
    echo "</a>";
    echo "</div>";
    echo "</div>";

}

// print_r($title);
// echo '<br />';
// print_r($img);
// echo '<br />';
// print_r($new);
