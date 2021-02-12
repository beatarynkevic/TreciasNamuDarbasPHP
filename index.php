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
    ($moneta === 0) ? echo 'H' : echo 'S';
    if($moneta === 0) {
        break;
    }
} while (true);
echo '<br>';
echo 'Monetos metimą stabdome iškritus skaičiui:';
echo '<br>';
do {
    $moneta = rand(0, 1);
    ($moneta === 0) ? echo 'H' : echo 'S';
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
    ($moneta === 0) ? echo 'H' : echo 'S';
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
    ($moneta === 0) ? echo 'H' : echo 'S';
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
?>


<h2 style="color:#0267C1";>---------8 Uzduotis---------</h2>
<?php
?>



<h2 style="color:#0075C4";>---------9 Uzduotis---------</h2>
<?php
?>

<h2 style="color:#EFA00B";>---------10 Uzduotis---------</h2>
<?php
?>