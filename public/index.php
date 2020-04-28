<?php

echo "안녕하세요";

// include_once "../hello.php";
include "../vendor/autoload.php";

$obj = new \Modules\Medb\Hello;

$obj->greeting();