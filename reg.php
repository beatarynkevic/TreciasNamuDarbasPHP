
alio
<?php

$text = 'dklf RFT-523 snsg dfg df gdf b gf TZZ-121 fgb666';
$text2 = 'Star Wars: Episode '.str_repeat(' ', rand(0,5)). rand(1,9) . ' - A New Hope';

preg_match_all('/([A-Z]{3})-(\d{3})/', $text, $match);

preg_match('/\d/', $text2, $match2);

echo '<pre>';
echo $text2;

print_r($match);
print_r($match2);
echo '<br>';

$str = "Visit Microsoft!";
$pattern = "/microsoft/i"; //i is a modifier that makes the search case-insensitive.
echo preg_replace($pattern, "W3Schools", $str);
?>
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