<?php

session_start();

$sumints = function ($x,$y) {

    return $x + $y;

};



$_SESSION['sum'] = $sumints($_POST['x'], $_POST['y']);

header('Location: index.php');

?>