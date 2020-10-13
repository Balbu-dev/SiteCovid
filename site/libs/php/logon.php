<?php

require_once("class/connection.class.php");

$user = $_POST['user'];
$password = $_POST['cpf'];

$connetion = new Connection();

$connetion = $connetion->logon($user, $password);
