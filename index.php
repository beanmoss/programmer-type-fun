<?php
require 'vendor/autoload.php';

// Create new Plates instance
$templates = new League\Plates\Engine('templates');

$programmer_types_string = file_get_contents('programmer_types.json');

$programmer_types = json_decode($programmer_types_string, true);

$rand_keys = array_rand($programmer_types);
$chosen = $programmer_types[$rand_keys];
$chosen['type'] = $rand_keys;

if (!isset($_GET['type'])) {
    $chosen = $chosen;
} elseif (isset($programmer_types[$_GET['type']])) {
    $chosen = $programmer_types[$_GET['type']];
    $chosen['type'] = $_GET['type'];
}
// Render a template
echo $templates->render('main', $chosen);
