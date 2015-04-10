<?php
require_once 'vendor/autoload.php';

/*
 * Init template engine
 * */
$loader = new Twig_Loader_Filesystem('public/templates');
$twig = new Twig_Environment($loader);
$template = $twig->loadTemplate('settings.html');

echo $template->render(array());
