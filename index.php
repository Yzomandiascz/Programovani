<?php
require 'tracy/tracy.phar';
use Tracy\Debugger;
Debugger::enable();
Debugger::$strictMode = true;
Debugger::$maxDepth = 10;
Debugger::$maxLength = 180;
$a = 6;
$b = 9;

print "číslo první = <b>$a</b> <br>";                   //první číslo
print "číslo druhé = <b>$b</b> <br>";                   // druhý číslo

echo "<img src=\"obrázek.jpg\" title='Slavia.jpg' alt='Slavia' width='150'/>";           //obrázek slavie
echo "<br>\<br>";


print "<br>Odčítání = ";                                // -
echo $a-$b;
dump($a-$b);

print "<br>Sčítání = ";                              // +
echo $a+$b;
dump($a+$b);

print "<br>Dělení = ";                             // :
echo $a/$b;
dump($a/$b);

print "<br>Násobení = ";                        // *
echo $a*$b;
dump($a*$b);

print "<br> ";
echo $a++;
dump($a++);

print "<br> ";
echo $a--;
dump($a--);

print "<br> ";
echo $a += $b;
dump($a+=$b);

print "<br>";
echo $a -= $b;
dump($a-=$b);

print "<br>";
echo $a *= $b;
dump($a*=$b);

print "<br>";
echo $a /= $b;
dump($a/=$b);

print "<br>Má $a jinou hodnotu než $b?<br>";
dump($a!=$b);

print "<br>  Čísla se rovnají?";                             // jestli se rovnaji cisla
echo $a==$b;
dump($a==$b);

print "<br>Je $a větší než $b?<br>";                   // porovnání hodnot
dump($a>$b);

print "<br>Je $b větší než $a?<br>";               // porovnání hodnot
dump($a<$b);

echo 3 . 8;
echo 6.9;

echo "klo"."bouk";
echo "vý" . "robek";

$jakubPlechsmid1 = 1;
$jakubPlechsmid2 = 1;

if ($jakubPlechsmid1 == $jakubPlechsmid2) {
echo "Jakub Plechšmíd<br>";
}
if ($jakubPlechsmid1 > $jakubPlechsmid2) {
    echo "Kuba<br>";
} else {
    echo"Plechšmíd<br>";
}
if ($jakubPlechsmid1 >= $jakubPlechsmid2) {
    echo "Kuba<br>";
    if ($jakubPlechsmid1 == $jakubPlechsmid2) {
        echo "Plechšmíd<br>";
    }
}
switch ($jakubPlechsmid1) {
                      case 0:
                        break;
                      case 1:
                      echo"dobře pane <br>";
                        break;
                      case 2:
                        break;
                      case 3:
                        break;
                      case 4:
                         break;
                      case 5:
                          break;
                      default:
                      break;
}
$nakup = array(1 =>"housky",
               2 =>"šunka",
               3 =>"máslo",
               4 =>"pomazánkové máslo",
               5 =>"pansízn",
               6 =>"vejce",
               7 =>"tatarská omáčka",
               8 =>"kečup",
               9 =>"mléko",
               10 =>"čičinka");
dump($nakup);
$auta = array(
    "prvni" => array(
    "druhy" => array(
    "treti" => array('značka' => 'Škoda octavia 3 RS',
                'barva' => 'červená',
                'barva oken' => 'černá',
                'převodovka' => 'manuál',
                'cena' => 320000 ),
              array('značka' => 'Škoda octavia 2 RS',
              'barva' => 'modrá',
              'barva oken' => 'černá',
              'převodovka' => 'manuál',
              'cena' => 190000 ),
              array('značka' => 'Škoda octavia 1 ',
              'barva' => 'černá',
               'barva oken' => 'černá',
               'převodovka' => 'manuál',
               'cena' => 40000 ),
                array('značka' => 'Multipla ',
                    'barva' => 'fialová',
                    'barva oken' => 'světlá',
                    'převodovka' => 'manuál',
                    'cena' => "nevyčíslitelná hodnota" ),
                array('značka' => 'škoda fabia ',
                    'barva' => 'růžová',
                    'barva oken' => 'světlá',
                    'převodovka' => 'automatická',
                    'cena' => 50000 ),
                array('značka' => 'škoda citygo ',
                'barva' => 'zelená',
                'barva oken' => 'černá',
                'převodovka' => 'automatická',
                'cena' => 150000),
                array('značka' => 'škoda roomster ',
                    'barva' => 'modrá',
                    'barva oken' => 'černá',
                    'převodovka' => 'manuál',
                    'cena' => 125000),
                 array('značka' => 'škoda pansízn ',
                'barva' => 'červená',
                'barva oken' => 'černá',
                'převodovka' => 'automatická',
                'cena' => 5000000),
                array('značka' => 'VW passat ',
                'barva' => 'černá',
                'barva oken' => 'černá',
                'převodovka' => 'manuál',
                'cena' => 150000),
                array('značka' => 'VW passat 2 ',
                    'barva' => 'černá',
                    'barva oken' => 'černá',
                    'převodovka' => 'manuál',
                    'cena' => 300000),


        )
    )
);
                   dump($auta);
var_dump($nba['prvni']);
echo "<br>";
function isvalid(array$param1, string$param2) {
foreach ($param1 as $value) {
if (strpos($param2, $value)) {
return true;
}
}
return false;
}
$Motoveci = array("auta","kola");
$veta = "Některá auta jsou přetočená";
var_dump(isvalid($Motoveci, $veta));
?>

