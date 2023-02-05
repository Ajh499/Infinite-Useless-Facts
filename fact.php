<?php
$url = 'http://uselessfacts.jsph.pl/random.json?language=en';
$response = file_get_contents($url);
$fact = json_decode($response)->text;
echo $fact;
?>