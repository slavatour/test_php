<?php

require_once 'vendor/autoload.php';
require_once 'includes/db.class.php';

$data = array(
    array(
        'id' => '1',
        'photo'=> 'public/images/sl1.jpg',
        'name'=> 'name',
        'description'=> 'desc',
        'category'=> 'bick',
        'price'=> '1300'
    ),
    array(
        'id' => '1',
        'photo'=> 'public/images/sl2.jpg',
        'name'=> 'name',
        'description'=> 'desc',
        'category'=> 'bick',
        'price'=> '1300'
    ),
    array(
        'id' => '1',
        'photo'=> 'public/images/sl3.jpg',
        'name'=> 'name',
        'description'=> 'desc',
        'category'=> 'bick',
        'price'=> '1300'
    ),
    array(
        'id' => '1',
        'photo'=> 'public/images/sl4.jpg',
        'name'=> 'name',
        'description'=> 'desc',
        'category'=> 'bick',
        'price'=> '1300'
    ),
    array(
        'id' => '1',
        'photo'=> 'public/images/sl5.jpg',
        'name'=> 'name',
        'description'=> 'desc',
        'category'=> 'bick',
        'price'=> '1300'
    ),
    array(
        'id' => '1',
        'photo'=> 'public/images/sl6.jpg',
        'name'=> 'name',
        'description'=> 'desc',
        'category'=> 'bick',
        'price'=> '1300'
    )
);

$loader = new Twig_Loader_Filesystem('public/templates');
$twig = new Twig_Environment($loader);

$template = $twig->loadTemplate('index.html');

echo $template->render(array('products'=> $data));