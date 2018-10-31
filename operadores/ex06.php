<?php
$a = NULL;

$b = NULL;

$c = 0;

echo $a ?? $b ?? $c ??;// exclusivo do php7, se nao existir um ele vai pro outro
?>