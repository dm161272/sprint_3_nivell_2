<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php

require_once ("poultry.php");

function duck_interaction($duck) {
    $duck->quack();
    $duck->fly();
}

$duck = new Duck;
$turkey = new Turkey;
$turkey_adapter = new TurkeyAdapter($turkey);

echo "<br />The Turkey says...<br />";
$turkey->gobble();
$turkey->fly();

echo "<br />The Duck says...<br />";
duck_interaction($duck);
echo "<br />The TurkeyAdapter says...<br />";
duck_interaction($turkey_adapter);





/*

 Output

The expected output is as follows:
The Turkey says...
Gobble gobble
I'm flying a short distance
The Duck says...
Quack
I'm flying
The TurkeyAdapter says...
Gobble gobble
I'm flying a short distance
I'm flying a short distance
I'm flying a short distance
I'm flying a short distance
I'm flying a short distance

*/


?>

</body>
</html>
