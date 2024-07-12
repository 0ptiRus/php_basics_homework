<?php

/*
echo ("Hello world!");
echo PHP_EOL;

$variable = 1;

echo($variable);
echo PHP_EOL;

echo gettype($variable);
echo PHP_EOL;

$string = "string";
echo($string);
echo PHP_EOL;

echo gettype($string);
echo PHP_EOL;

$bool = true;
var_dump($bool);
echo PHP_EOL;
echo gettype($bool);
echo PHP_EOL;

$float = 1.7;
var_dump($float);
echo PHP_EOL;

$null = null;
var_dump($null);
echo PHP_EOL;
*/

// $a = 10;
// $b = 20;
// $temp = null;

// echo($a);
// echo(PHP_EOL);
// echo($b);
// echo(PHP_EOL);  

// $temp = $a;
// $a = $b;
// $b = $temp;

// echo($a);
// echo(PHP_EOL);
// echo($b);
// echo(PHP_EOL);

// $a = 2;
// $b = 2;

// if($a == $b)
// {
//     echo(true);
// }

$array = [
    "john", "mary", "susie"
];

$dict = [
    "Russia" => "Moscow",
    "USA" => "Washington",
    "Mexico" => "Mexico City"
];

foreach($dict as $key => $value) 
{
    echo "Country $key Capital $value <br>  ";
}

foreach($array as $value)
{   
    echo "$value <br>";
}

foreach($array as &$value)
{
    $value .= "wok";
    echo "$value <br>";
}
unset($value);

$dict = [
    "Russia" => ["Moscow"
                ,"Saint Petersburg"],
    "USA" => ["Washington",
                "San Francisco"],
    "Mexico" => ["Mexico City",
                "Bojadero"]
];  

//array_push($dict["Russia"], "Tver");
//array_unshift($dict["Russia"], "Tver");
//$dict["Russia"][] = "Tver";

foreach($dict as $key => $value) 
{
    echo "Country $key <br><ul>";
    foreach($value as $cities)
    {
        echo "<li>$cities</li>";
    }
    echo "</ul>";
}

$a = 10;
$b = 20;

print_r([$a, $b]);

list($a, $b) = [$b, $a];

print_r([$a, $b]);

$c = [];

for($i = 0; $i < 10; $i++)
{
    $c[] = rand();
}

print_r($c);
echo "<br>";

usort($c, function($a, $b) { return $a <=> $b; });

print_r($c);
echo "<br>";

function Func1($a, $b) {}
function Func2 (int $a, int $b) {}
function Func3 (int $a=0, int $b=0) : int {}

$function = function (int $a, int $b) : int {};



