<?php

require_once 'vendor/autoload.php';

$loader = new Twig_Loader_Filesystem('public/templates');

$twig = new Twig_Environment($loader);

$template = $twig->loadTemplate('tpl.tpl');

echo $template->render(array());