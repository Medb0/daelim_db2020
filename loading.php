<?php
//오토로드
spl_autoload_register(function($name){
    echo $name . "을 로드합니다.";
    include "modules\\".$name.".php";
    exit;
    //require $name.".php";
});