<?php
require 'vendor/autoload.php';
// Create new Plates instance
$templates = new League\Plates\Engine('templates');

$programmer_types_string = file_get_contents('programmer_types.json');

$programmer_types = json_decode($programmer_types_string, true);

$rand_keys = array_rand($programmer_types);
// Render a template
echo $templates->render('main', $programmer_types[$rand_keys]);
