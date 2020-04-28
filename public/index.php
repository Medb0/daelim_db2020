<?php

<<<<<<< HEAD
echo "안녕하세요";

// include_once "../hello.php";
include "../vendor/autoload.php";

$obj = new \Modules\Medb\Hello;
=======
// include_once "../hello.php";
include "../vendor/autoload.php";

//클래스의 객체를 생성
$obj = new \Modules\Jiny\Hello;
>>>>>>> 6b7fd584beeb641194144f64688aaa892f9d2278
$obj->greeting();