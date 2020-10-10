<?php

require_once("class/connection.class.php");

$email = $_POST['email'];
$cpf = $_POST['cpf'];
$quest1 = $_POST['quest1'];
$quest2 = $_POST['quest2'];
$quest3 = $_POST['quest3'];
$quest4 = $_POST['quest4'];
$quest5 = $_POST['quest5'];

foreach ($quest3 as $value) {

    global $kid;
    global $teenager;
    global $young;
    global $adult;
    global $old;
    global $old_man;

    switch ($value) {
        case $value == "kid":
            $kid = "yes";
            break;

        case $value == "teenager":
            $teenager = "yes";
            break;

        case $value == "young":
            $young = "yes";
            break;

        case $value == "adult":
            $adult = "yes";
            break;

        case $value == "old":
            $old = "yes";
            break;

        case $value == "old_man":
            $old_man = "yes";
            break;

        default:
            # code...
            break;
    }

}

if ($kid == "") {
    $kid = "not";
}

if ($teenager == "") {
    $teenager = "not";
}

if ($young == "") {
    $young = "not";
}

if ($adult == "") {
    $adult = "not";
}

if ($old == "") {
    $old = "not";
}

if ($old_man == "") {
    $old_man = "not";
}

$connetion = new Connection();

$connetion = $connetion->registerForm($email, $cpf, $quest1, $quest2, $kid, $teenager, $young, $adult, $old, $old_man, $quest4, $quest5);
