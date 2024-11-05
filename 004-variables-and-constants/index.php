<!-- when we want to use php in html code we should put it in body tag with open and close php sign
 when we use pure php it's not necessary to put php close tag -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>variables and constants</title>
</head>
<body>
    <?php
/*
    for using variables in php we should consider 4 rules
    1) $ -> to define a variable in php we must use dollar sign like :
    $Name = "Mojtaba";
    $Number = 12;
    */ 
    $Name = "Mojtaba";
    $Number = 12;
    $Number_S = "12";
    var_dump($Name);
    echo "<br>";
    var_dump($Number);
    echo "<br>";
    var_dump($Number_S);
    echo "<hr>";
    /*
    2) A variable can have a short name (like $x and $y) or a more descriptive name ($age, $CarName, $total_volume).
    A variable name must start with a letter or the underscore character
    3) A variable name cannot start with a number
    A variable name can only contain alpha-numeric characters and underscores (A-z, 0-9, and _ )
    4) A variable can't have free space
    Variable names are case-sensitive ($age and $AGE are two different variables)
    So i can't define these variables
    $1Ked
    $24Hed
    $%ewfd
    $OCS#@!
    $Name REw
    and ...
    we must use php syntax for variables
    */
    $_name = "Mojtaba";
    $_Nunm24 = "43";
    $NumberW21 = 23 ;
/*
    if we consider PSR in define variables we will have a better and cleaner code.
    */
    $My_Name = "Mojtaba";
    $Your_Name = "NW";
    $Two_Number = 2343;
/*
    what is a variable?
    a variable is a specific place in memory where a data stored and till the browser reading URL variable has the value we assign to it.
    case sensitive :
    */
    $txt = "Mow";
    $txT = "Mowx";
    $tXT = "Mowx3";
    $TXT = "Mowx5";
    $tXt = "Mowgf";
    var_dump($txt);
    echo "<br>";
    var_dump($txT);
    echo "<br>";
    var_dump($tXT);
    echo "<br>";
    var_dump($TXT);
    echo "<br>";
    var_dump($tXt);
    echo "<hr>";
/*
    variables can store different types of data like integer-float-boolean-...
    variables only store one value in them and if we assign two values to them the last value will appears when we want to print value.
    second value overwrite on first value.
    */
    $MU_Num = 12;
    $MU_Num = 34;
    var_dump($MU_Num);
/*
    if we don't want the second value overwrite on first value we should use constant in php.
    A constant is an identifier (name) for a simple value. The value cannot be changed during the script.
    A valid constant name starts with a letter or underscore (no $ sign before the constant name).
    Note: Unlike variables, constants are automatically global across the entire script
    constants are global scope.
    when we use const we can define once and use it everywhere in files or functions that we want without problem.
    there are two ways to define a constant 
    1) using const + NAME
    like :
    */
    const URL = "https://7learn.com";
    echo "<br>";
    echo URL;
/*
2) define a constant in with a function
    it's better to name a constant with uppercase words.
    ww can't define a constant two times.
    */
    define("BASEURL" , "https://www.7learn.com");
    echo "<br>";
    echo BASEURL;
/*
    if we enable a false in the function then we can type constant in upper and lower case. 
    this feature is outdated.
    */
    define("bAS" , "https://www.7learn.ac" ,);
    echo "<br>";
    echo bAS;
/* 
    what is global scope?
    we can call a constant everywhere that we want so we say it is global scope
    */
    function test(){
        echo "<br>";
        echo BASEURL;
        // echo $txt;
    }
    test();
    echo "<hr>";
    ?>
</body>
</html>