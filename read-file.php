<?php
$readFileContents = file_get_contents('php-frameworks.json');

// echo $readFileContents;

$phpData = json_decode($readFileContents);

var_dump($phpData);
