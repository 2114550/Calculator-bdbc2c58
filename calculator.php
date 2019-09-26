<?php
echo "Wat wil je doen?(+,-)".PHP_EOL;
    $var = readline();
echo "Eerste getal?".PHP_EOL;
    $a = readline();
echo "Tweede getal?".PHP_EOL;
    $b = readline();
if ($var == "+")
{
    $c = $a + $b;
    echo "Antwoord : $c";
}
if ($var == "-")
{
    $c = $a - $b;
    echo "Antwoord : $c";
}
else
{
    echo "niet geldig".PHP_EOL;
}
