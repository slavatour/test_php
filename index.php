<?php

require_once 'vendor/autoload.php';
require_once 'includes/db.class.php';

/*
 * Get data from database
 * */
$db = db::getConnection();
$query = db::getQuery('SELECT * FROM content;');
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
