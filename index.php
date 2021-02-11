<?php

$animals = ['Antelope' => 'Snorts',
'Bat' => 'Screeches',
'Bear' => 'Roar',
'Dolphin' => 'Clicks',
'Goose' => 'Honks',
'Vulture' => 'Screams'];

foreach ($animals as $name => $sound) {
    // echo $name. ' '.$sound.'<br>';
    echo $animals[$name].'<br />';
}

echo '<span style="color:pink;font-size: 40px;">-------------</span>' . '<br>';

$numbers = [1, 2, 3, 4, 5];
print_r($numbers);
foreach ($numbers as &$number) {
    $number = $number *2;
}
echo '<br>';
print_r($numbers);
?>


<?php
echo '<br>';
$colors = array("red", "green", "blue", "yellow");

foreach ($colors as $value) {
  echo "$value <br>";
}
?>

<h2 style="color:red";>---------1 Uzduotis---------</h2>

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