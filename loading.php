<?php
<<<<<<< HEAD
//오토로드
spl_autoload_register(function($name){
    echo $name . "을 로드합니다.";
    include "modules\\".$name.".php";
    exit;
    //require $name.".php";
=======
// 오토로드
spl_autoload_register(function($name){
    echo $name . "을 로드 합니다.";
    include "modules\\".$name.".php";
    // exit; //종료
    // require $name.".php";
>>>>>>> 6b7fd584beeb641194144f64688aaa892f9d2278
});