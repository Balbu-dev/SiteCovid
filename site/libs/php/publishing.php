<?php

require_once("class/connection.class.php");

$title = $_POST['title'];
$category = $_POST['category'];
$imgnew = $_POST['imgnew'];
$new = $_POST['new'];

$connetion = new Connection();

$connetion = $connetion->registerNew($title, $imgnew, $new, $category);
