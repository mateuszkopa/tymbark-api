<?php
/* Author: Mateusz Kopaszewski
       ██     ██
     ██        ██
     ██      ██
       ██    ██
       ██      ██
  ██////////////////██████
  ██////////////////██||██
  ██/Coffee by k0pa/██||██
  ██////////////////██████
   ██//////////////██
 ████████████████████████
 ██////////////////////██
   ████████████████████
*/

$t = file_get_contents('hasla.txt');
$t = strtoupper("$t");

$hasla = explode(", ", "$t");
$i = rand(0, count($hasla));

echo "{\"haslo\": \"$hasla[$i]\", \"numer\": \"$i\"}";

echo "<br>";

$url = "https://tymbark-api.k0pa.repl.co?format=src";
echo "$url";

?>