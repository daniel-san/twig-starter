<?php
require_once 'vendor/autoload.php';
date_default_timezone_set('America/Sao_Paulo');

$loader = new \Twig\Loader\FilesystemLoader('templates');
$twig = new \Twig\Environment($loader, [
    //'cache' => 'compilation_cache',
]);

$page = 'index.html';

if(isset($_GET['page']))
    $page = $_GET['page'];

echo $twig->render($page, [
    'name' => 'Daniel', 
    'date' => date('Y-m-d'), 
    'date_text' => date('h:i - l jS F')
    ]);

?>