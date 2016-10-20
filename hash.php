<?php
$haslo = "123456Qwerty";
$haslo_hash = password_hash($haslo,PASSWORD_DEFAULT);

echo $haslo_hash;

?>