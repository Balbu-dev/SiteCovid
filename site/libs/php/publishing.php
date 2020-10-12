<?php

require_once("class/connection.class.php");

$title = $_POST['title'];
$category = $_POST['category'];
$new = $_POST['new'];

$imgname = "";

if (isset($_FILES['img'])) {
    $extension = strtolower(substr($_FILES['img']['name'], -4));
    $imgname = md5(time()) . $extension;
    $directory = "../images/news/";

    move_uploaded_file($_FILES['img']['tmp_name'], $directory . $imgname);
}
$connetion = new Connection();

$register = $connetion->registerNew($title, $imgname, $new, $category);
