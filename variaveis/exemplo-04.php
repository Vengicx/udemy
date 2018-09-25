<?php

$nome = (int)$_GET["a"]; //(int) converte o string pra inteiro

//var_dump($nome)

//pegar o ip

$ip = $_SERVER["REMOTE_ADDR"];
$ip2 = $_SERVER["SCRIPT_NAME"];

echo $ip;
echo "<br>";
echo $ip2






?>