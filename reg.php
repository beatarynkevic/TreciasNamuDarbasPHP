
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