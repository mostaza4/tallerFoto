<?php
require "database.php";
require "parameters.php";

$dns  = $parameters['dns'];
$user = $parameters['user'];
$pass = $parameters['pass'];

$db = new Database($dns, $user, $pass);

?>