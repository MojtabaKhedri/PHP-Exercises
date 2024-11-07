    <?php
/*
    in this file we want to speak about data types in php
    we have 8 data types in php
    1) integer (int)
    2) float
    3) string
    4) boolean
    5) array
    6) object
    7) resource
    8) null
    we will speak about them one by one 
    let's start with integer
    PHP Integer
    An integer data type is a non-decimal number between -2,147,483,648 and 2,147,483,647.
    Rules for integers:
    An integer must have at least one digit
    An integer must not have a decimal point
    An integer can be either positive or negative
    Integers can be specified in: decimal (base 10), hexadecimal (base 16), octal (base 8), or binary (base 2) notation
    */
/*
    decimal
    */
    $a = 14;
    echo ($a);
    echo "<br>";
    var_dump($a);
    echo "<br>";
    $b = -45;
    echo ($b);
    echo "<br>";
    var_dump($b);
    echo "<hr>";
/*
    HexaDecimal
    */
    $c = hexdec("01B0");
    echo ($c);
    echo "<br>";
    var_dump($c);
    echo "<br>";
    $d = hexdec("f43");
    echo $d;
    echo "<br>";
    var_dump($d);
    echo "<hr>";
/*
    Octal
    */
    $e = octdec("67");
    echo $e;
    echo "<br>";
    var_dump($e);
    echo "<br>";
    $f = octdec("f43");
    echo $f;
    echo "<br>";
    var_dump($f);
    echo "<hr>";
/*
    Binary
    */
    $g = decbin(34);
    echo $g;
    echo "<br>";
    var_dump($g);
    echo "<br>";
    $h = decbin(511);
    echo $h;
    var_dump($h);
    