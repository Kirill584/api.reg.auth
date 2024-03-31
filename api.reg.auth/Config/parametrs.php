<?php
error_reporting(E_ALL);
 
date_default_timezone_set("Europe/Moscow");
 
$key = "secret_key";
$iss = "http://kaktus.ru";
$aud = "http://kaktus.com";
$iat = time();
$nbf = time() + 1;
?>