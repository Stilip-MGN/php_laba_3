<?php


require 'vendor/autoload.php';
require 'src/MagicClass.php';

$magic = new \App\MagicClass("pub","priv");#__construct
$magic->DontTouchMe();#__call
\App\MagicClass::DontTouchMeStatic();#__callStatic
$magic->$netTakogo = 0;#__set
$magic->$netTakogo;#__get
empty($magic->$netTakogo);#__isset
unset($magic->$netTakogo);#__unset
$magic->__toString('null');