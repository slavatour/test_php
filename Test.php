<?php

class Test {
    public function __construct($name = 'defaut') {
        $this -> name = $name;
        print_r('Hi '.$this->name);
        echo('<br />');
    }

    function Test() {
        echo "Hello world";
    }

    function greetings() {
        echo "Hello world";
        echo('<br />');
    }
}

class Test2 extends Test {
    function __construct($name) {
        parent::__construct($name);
        print_r('yes!!!');
        echo('<br />');
    }
}

$test = new Test2('John');
$test->greetings();


foreach ($_REQUEST as $key => $value) {
    print_r($key."=".$value);
    echo('<br />');
}
if(isset($_REQUEST['name'])) {
    echo "Hello, ".$_REQUEST["name"];
}