<?php
declare(strict_types=1);
session_start();
include_once "connectPDO.php";

echo 'Gegevens aanmaken' . '</br>';
db_connect();
var_dump($_SESSION);
?>