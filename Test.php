<?php

class Test {
    function Test() {
        echo "Hello world";
    }

    function greetings() {
        echo "Hello world";
    }
}

//$test = new Test();
//$test->greetings();


foreach ($_REQUEST as $key => $value) {
    print_r($key."=".$value);
    echo('<br />');
}
if(isset($_REQUEST['name'])) {
    echo "Hello, ".$_REQUEST["name"];
}