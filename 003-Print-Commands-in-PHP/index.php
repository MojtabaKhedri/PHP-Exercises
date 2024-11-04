<?php
/*
in this file we want to review print commands in php 
normal command for print -> echo
*/
$name = "Mojtaba";
echo(10);
echo "<br>";
echo(116);
echo "<br>";
echo(154.24);
echo "<br>";
echo("Mojtaba");
echo "<br>";
echo("Rezas");
echo "<br>";
echo("$name");
echo "<hr>";
/*
if we are in test mode and need more options we can use var_dump() function
*/
var_dump(10);
echo "<br>";
var_dump(116);
echo "<br>";
var_dump(154.24);
echo "<br>";
var_dump("Mojtaba");
echo "<br>";
var_dump("Rezas");
echo "<br>";
var_dump("$name");
echo "<hr>";
/*
then we have print_r that can be used for print in php; it's like echo
The difference that print_r recursively prints an array (or object, but it doesn't look as nice), showing all keys and values. echo does not, and is intended for scalar values. 
*/
print_r(10);
echo "<br>";
print_r(116);
echo "<br>";
print_r(154.24);
echo "<br>";
print_r("Mojtaba");
echo "<br>";
print_r("Rezas");
echo "<br>";
print_r("$name");
echo "<hr>";
