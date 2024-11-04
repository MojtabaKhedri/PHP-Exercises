<?php
/* 
This is a description about single quote and double quote and how we should use them
generally single quote and double quote are the same but we have some difference between them
*/
echo ('Single quote');
echo "<br>";
echo ("Double quote");
echo "<hr>";
$Name = "Mojtaba";
echo ('Single quote $Name');
echo "<br>";
echo ("Double quote $Name");
/* 
with double quote you can see the value of a variable but with single quote you can print that in export
*/
echo "<hr>";
$X = "People";
echo ("Say Hello To $X ");
echo "<br>";
echo ('Say Hello To $X ');
/* 
another example for this subject
*/
echo "<hr>";
$X = "People";
echo ("Say Hello to" . "$X");
echo "<br>";
echo ('Say Hello to' . '$X');
echo "<br>";
echo ("Say Hello to" . " " . "$X");
echo "<br>";
echo ('Say Hello to' . '' . '$X');
/* 
in above example you see that we can't use double quote when we want to add space between two files
*/
echo '<p style = "color : red">' . 'salam' . ' ' . $Name . ' ' . 'aziz' . '</p>';
/* 
this was the end
*/