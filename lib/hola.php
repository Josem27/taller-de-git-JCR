<?php
//Autor: Jose Maria Cruz Regalado <josem.cruzregalado@gmail.com>
// El nombre por defecto es Mundo
print "Introduce tu nombre:";
$nombre = trim(fgets(STDIN));
@print "Hola, {$nombre}\n";
