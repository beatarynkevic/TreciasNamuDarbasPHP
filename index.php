<h2 style="color:#EFA00B";>---------1 Uzduotis---------</h2>

<?php
$visoSimboliu = str_repeat('*', 400);
echo "<span style='word-wrap: break-word;'>$visoSimboliu</span>"; //kad tilptu ekrane
echo '<br><br>';

$eiluteje = mb_strlen($visoSimboliu) / 50;
for ($i = 0; $i < $eiluteje; $i++) {
    echo substr($visoSimboliu, ($i * 50), 50);
    echo '<br>';
}
echo '<br><br>';
?>

<h2 style="color:#0267C1";>---------2 Uzduotis---------</h2>
<?php

$kiekSkaiciu = 300;
$count = 0;

for ($i = 0; $i <= $kiekSkaiciu; $i++) {
    $skaicius = rand(0, 300);
    if ($skaicius > 150) {
        $count++;
    }
    if ($skaicius > 275) {
        echo "<span style='color:red';> $skaicius </span>";
    } else {
        echo $skaicius . ' ';
    }
}
?>



<h2 style="color:#0075C4";>---------3 Uzduotis---------</h2>
<?php

$atsitiktinisSkaicius = rand(3000, 4000);
$stringas= " ";
echo 'atsitiktinis skaicius yra: ' . $atsitiktinisSkaicius . '<br>';
for ($i = 1; $i <= $atsitiktinisSkaicius; $i ++) {
    if ($i % 77 === 0) {
        $stringas .= ($i . ", ");
    }
}
echo substr($stringas, 0, (mb_strlen($stringas) - 2));
echo '<br><br>';
?>


<h2 style="color:#EFA00B";>---------4 Uzduotis---------</h2>
<?php
for ($i = 0; $i <= 30; $i++) {
    for($j = 0; $j <= 30; $j++) {
        echo "<span style='display: inline-block; height: 10px; color: #D65108; width: 10px;'>*</span>";
    }
    echo '<br>';
}
?>

<h2 style="color:#0267C1";>---------5 Uzduotis---------</h2>
<?php
$length = 30;
for ($i = 0; $i <= $length; $i++) {
    for($j = 0; $j <= $length; $j++) {
        if ($i ===  $j || ($i + $j) === $length) {
            echo "<span style='display: inline-block; height: 10px; width: 10px; color:#EFA00B; '>*</span>";
        } else {
            echo "<span style='display: inline-block; height: 10px; width: 10px;'>*</span>";
        }
    }
    echo '<br>';
}
?>



<h2 style="color:#0075C4";>---------6 Uzduotis---------</h2>
<?php
//0 -yra herbas
//1 -yra skaicius
echo 'Monetos metimą stabdome iškritus herbui:';
echo '<br>';

$metimas = true;
do {
    $moneta = rand(0, 1);
    ($moneta === 0) ? print 'H' : print 'S';
    if($moneta === 0) {
        break;
    }
} while (true);
echo '<br>';
echo 'Monetos metimą stabdome iškritus skaičiui:';
echo '<br>';
do {
    $moneta = rand(0, 1);
    ($moneta === 0) ? print 'H' : print 'S';
    if($moneta === 1) {
        break;
    }
} while (true);
echo '<br>';
echo 'Monetos metimą stabdome 3 kartus iškritus herbui:';
echo '<br>';

$count = 0;
do {
    $moneta = rand(0, 1);
    ($moneta === 0) ? print 'H' : print 'S';
    if ($moneta === 0) {
        $count++;
    }
    if ($count === 3) {
        break;
    }
}while(true);
echo '<br>';
echo 'Monetos metimą stabdome 3 kartus iš eilės iškritus herbui:';
echo '<br>';

$count = 0;
do {
    $moneta = rand(0, 1);
    ($moneta === 0) ? print 'H' : print 'S';
    if ($moneta === 0) {
        $count++;
    } else {
        $count = 0;
    }
    if ($count === 3) {
        break;
    }
}while(true);
?>

<h2 style="color:#EFA00B";>---------7 Uzduotis---------</h2>
<?php

$taskaiKazio = 0;
$taskaiPetro = 0;
$partijosNumeris = 1;



$partija = true;
do {
    $kazys = rand(5, 25);
    $petras = rand(10, 20);
    echo "<span style='color:#EFA00B';> ". $partijosNumeris++ . " partijos rezultatai: </span>";
    echo "Kazys: $kazys, Petras: $petras. ";
    ($kazys > $petras) ? print "Partiją laimėjo: ​Kazys" : print "Partiją laimėjo: ​Petras";
    $taskaiKazio += $kazys;
    $taskaiPetro += $petras;
    if ($taskaiKazio > 221) {
        $partija = false;
        echo "<span style='color:red';>  Žaidimą laimėjo Kazys: $taskaiKazio </span>";
    } elseif ($taskaiPetro > 221) {
        $partija = false;
        echo "<span style='color:red';> Žaidimą laimėjo Petras: $taskaiPetro </span>";
    }
} while ($partija);

?>


<h2 style="color:#0267C1";>---------8 Uzduotis---------</h2>
<?php
$eiluciuKiekis = 21;
$apatinisTrikampis = ($eiluciuKiekis-1) / 2; //10
$virsutinisTrikampis = $eiluciuKiekis - $apatinisTrikampis; //11
$a= 0;
$b = 11;


for($j = 0; $j < $virsutinisTrikampis; $j++) {
  echo str_repeat("<span>&nbsp;</span>", $b); //10, 9, 8
  $b--;
  for($i = 1; $i <= $j; $i++) {
    $randR = rand(0, 255);
    $randG = rand(0, 255);
    $randB = rand(0, 255);

    echo "<span style='font-size: 20px; color:rgb($randR, $randG, $randB);'>*</span>";
  }
  echo "<br>";
}

for( $j = 0; $j <= $apatinisTrikampis; $j++) {
  echo str_repeat("<span>&nbsp;</span>", $a); //0, 1, 2
  $a++;
  for($i = $apatinisTrikampis-$j; $i >= 0; $i--) {
    $randR = rand(0, 255);
    $randG = rand(0, 255);
    $randB = rand(0, 255);

    echo "<span style='font-size: 20px; color:rgb($randR, $randG, $randB);'>*</span>";
  }
  echo "<br>";
}
?>



<h2 style="color:#0075C4";>---------9 Uzduotis---------</h2>
<?php

$pirmoPradzia= microtime(true);
for($i = 0; $i < 1000000; $i++) {
    $c = "10 bezdzioniu \n suvalge 20 bananu.";
}
$pirmoPabaiga = microtime(true);
$pirmasUztruko = $pirmoPabaiga - $pirmoPradzia;

$antroPradzia = microtime(true);
for($i = 0; $i < 1000000; $i++) {
    $c = '10 bezdzioniu \n suvalge 20 bananu.';
}
$antroPabaiga = microtime(true);
$antrasUztruko = $antroPabaiga - $antroPradzia;

echo 'Pirmo kabutes uztruko: ' . $pirmasUztruko . '<br> Antros kabutes uztruko: ' . $antrasUztruko . '<br>';
echo $antrasUztruko > $pirmasUztruko ? 'dvigubos kabutes spausdinasi ilgiau' : 'viengubo kabutes spausdinasi ilgiau';
?>

<h2 style="color:#EFA00B";>---------10 Uzduotis---------</h2>
<?php

echo "1) “Įkalkite” 5 vinis mažais smūgiais: <br>";
$kiekSulindo1 = 0;
$kiekSulindo2 = 0;
$kiekSulindo3 = 0;
$kiekSulindo4 = 0;
$kiekSulindo5 = 0;

$kiekSmugiu1 = 0;
$kiekSmugiu2 = 0;
$kiekSmugiu3 = 0;
$kiekSmugiu4 = 0;
$kiekSmugiu5 = 0;
$kalimas = true;

while ($kalimas)
{
    if($kiekSulindo1 <= 85) {
        $vinis1 = rand(5, 20);
        $kiekSulindo1 += $vinis1;
        $kiekSmugiu1++;
    }

    if($kiekSulindo2 <= 85) {
        $vinis2 = rand(5, 20);
        $kiekSulindo2 += $vinis2;
        $kiekSmugiu2++;
    }

    if($kiekSulindo3 <= 85) {
        $vinis3 = rand(5, 20);
        $kiekSulindo3 += $vinis3;
        $kiekSmugiu3++;
    }

    if($kiekSulindo4 <= 85) {
        $vinis4 = rand(5, 20);
        $kiekSulindo4 += $vinis4;
        $kiekSmugiu4++;
    }

    if($kiekSulindo5 <= 85) {
        $vinis5 = rand(5, 20);
        $kiekSulindo5 += $vinis5;
        $kiekSmugiu5++;
    }
    if($kiekSulindo1 > 84 && $kiekSulindo2 > 84 && $kiekSulindo3 > 84 && $kiekSulindo4 > 84 && $kiekSulindo5 > 84) {
        $kalimas = false;
    }

} 

echo "1 sulindo: $kiekSulindo1 mm, o smugiu: $kiekSmugiu1 <br> 2 sulindo: $kiekSulindo2 mm, o smugiu: $kiekSmugiu2 <br> 3 sulindo: $kiekSulindo3 mm,
 o smugiu: $kiekSmugiu3 <br> 4 sulindo: $kiekSulindo4 mm, o smugiu: $kiekSmugiu4 <br> 5 sulindo: $kiekSulindo5 mm, o smugiu: $kiekSmugiu5";
echo "<br><br> 2)“Įkalkite” 5 vinis dideliais smūgiais: <br>";

$dideliKiekSulindo1 = 0;
$dideliKiekSulindo2 = 0;
$dideliKiekSulindo3 = 0;
$dideliKiekSulindo4 = 0;
$dideliKiekSulindo5 = 0;

$dideliKiekSmugiu1 = 0;
$dideliKiekSmugiu2 = 0;
$dideliKiekSmugiu3 = 0;
$dideliKiekSmugiu4 = 0;
$dideliKiekSmugiu5 = 0;
$kalimas2 = true;

while ($kalimas2)
{
    if($dideliKiekSulindo1 <= 85) {
        $vinis1 = rand(20, 30);
        $chance = rand(0, 1);
        if ($chance === 0) {
            $dideliKiekSulindo1 += $vinis1;
            $dideliKiekSmugiu1++;
        } else {
            $dideliKiekSmugiu1++;
        }
    }

    if($dideliKiekSulindo2 <= 85) {
        $vinis2 = rand(20, 30);
        $chance = rand(0, 1);
        if ($chance === 0) {
            $dideliKiekSulindo2 += $vinis2;
            $dideliKiekSmugiu2++;
        } else {
            $dideliKiekSmugiu2++;
        }
    }

    if($dideliKiekSulindo3 <= 85) {
        $vinis3 = rand(20, 30);
        $chance = rand(0, 1);
        if ($chance === 0) {
            $dideliKiekSulindo3 += $vinis3;
            $dideliKiekSmugiu3++;
        } else {
        $dideliKiekSmugiu3++;
        }
    }

    if($dideliKiekSulindo4 <= 85) {
        $vinis4 = rand(20, 30);
        $chance = rand(0, 1);
        if ($chance === 0) {
            $dideliKiekSulindo4 += $vinis4;
            $dideliKiekSmugiu4++;
        } else {
        $dideliKiekSmugiu4++;
        }
    }

    if($dideliKiekSulindo5 <= 85) {
        $vinis5 = rand(20, 30);
        $chance = rand(0, 1);
        if ($chance === 0) {
        $dideliKiekSulindo5 += $vinis5;
        $dideliKiekSmugiu5++;
        } else{
            $dideliKiekSmugiu5++;
        }
    }
    if($dideliKiekSulindo1 > 84 && $dideliKiekSulindo2 > 84 && $dideliKiekSulindo3 > 84 && $dideliKiekSulindo4 > 84 && $dideliKiekSulindo5 > 84) {
        $kalimas2 = false;
    }

} 

echo "1 sulindo: $dideliKiekSulindo1 mm, o smugiu: $dideliKiekSmugiu1 <br> 2 sulindo: $dideliKiekSulindo2 mm, o smugiu: $dideliKiekSmugiu2 <br> 3 sulindo: $dideliKiekSulindo3 mm,
 o smugiu: $dideliKiekSmugiu3 <br> 4 sulindo: $dideliKiekSulindo4 mm, o smugiu: $dideliKiekSmugiu4 <br> 5 sulindo: $dideliKiekSulindo5 mm, o smugiu: $dideliKiekSmugiu5";
?>

<h2 style="color:#0075C4";>---------11 Uzduotis---------</h2>
<?php
# Sugeneruokite stringą, kurį sudarytų 50 atsitiktinių skaičių nuo 1 iki 200, atskirtų tarpais.
# Skaičiai turi būti unikalūs (t.y. nesikartoti). Sugeneruokite antrą stringą, pasinaudodami pirmu, palikdami
# jame tik pirminius skaičius (t.y tokius, kurie dalinasi be liekanos tik iš 1 ir patys savęs). Skaičius stringe
# sudėliokite didėjimo tvarka, nuo mažiausio iki didžiausio.

$skaiciuMasyvas = [];

while (count($skaiciuMasyvas) < 50){  //count all elements in array
    $skaicius = rand(1, 200);
    if (!in_array($skaicius, $skaiciuMasyvas)){ //Checks if a value exists in an array
        array_push($skaiciuMasyvas, $skaicius); //if no, supushinama
    }
}

$stringas = implode(' ', $skaiciuMasyvas); //Join array elements with a string
echo "<br><br>$stringas<br><br>";
$pirminiuSkaiciuMasyvas = [];
for ($i = 0; $i < 50; $i++){
    $daliniuCount = 0;
    for($j = 1; $j <= $skaiciuMasyvas[$i]; $j++){
        if ($skaiciuMasyvas[$i] % $j === 0){
            $daliniuCount++;
        }
    }
    if($daliniuCount < 3){
        $pirminis = $skaiciuMasyvas[$i];
        array_push($pirminiuSkaiciuMasyvas, $pirminis);
    }
}
sort($pirminiuSkaiciuMasyvas);
$pirminiuSkStringas = implode(' ', $pirminiuSkaiciuMasyvas);
echo "<br><br>$pirminiuSkStringas<br><br>";
?>