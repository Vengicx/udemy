<?php

$a = 30;

$b = 55;

var_dump($a > $b);

echo "<br>";

var_dump($a < $b);

echo "<br>";

var_dump($a = $b);//se for um "=" ele transforma o $a igual ao $b

echo "<br>";

var_dump($a == $b);// para comparar os valores é "=="

echo "<br>";

$a = 55.0;
var_dump($a === $b); //pra ver se é exatamente iguais mesmo, é diferente pq 55 é diferente de 55.0

echo "<br>";

var_dump($a != $b); // o ! é negação, se for diferente ele retorna false
