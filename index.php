<?php

require_once 'app-config.php';
require_once 'includes/classes/app.php';
require_once 'vendor/autoload.php';
require_once 'includes/classes/db.php';

$app = new app();

/*
 * Get data from database
 * */
$string = 'SELECT * FROM content;';
$db = db::getConnection();
$query = db::query($string);
$rows = db::getResult($query);

/*
 * Init template engine
 * */
$loader = new Twig_Loader_Filesystem('public/templates');
$twig = new Twig_Environment($loader);
$template = $twig->loadTemplate('index.html');

/*
 * Render template and echo it
 * */
echo $template->render(array('products'=> $rows));
