<?php
$klasgenoten = array(
    1 => 'Thorvald',
    2 => 'Tyrese',
    3 => 'Wahid',
    4 => 'Randy',
    5 => 'Sven'
);
$aantal = count($klasgenoten);

for ($getal1 = 5; $aantal = $getal1; $getal1--) {
    echo $klasgenoten[$getal1] . PHP_EOL;
}
