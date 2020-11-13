<?php


require 'vendor/autoload.php';
require 'Vector.php';
require 'Point.php';

$T1 = new \App\Point(1,0);
$V1 = new \App\Vector(4,4);
$V2 = new \App\Vector(0,0);
$V3= new \App\Vector(- 4,4);
printf( "длина V1 = " .$V1->Length() . '<br/>');
printf( "длина V2 = " .$V2->Length() . '<br/>');
printf( "длина V3 = " .$V3->Length() . '<br/>');
printf( "V2 нулевой вектор?  " );
echo $V2->is_zero() ?  "Да" : "Нет" ;
printf( "<br/>вектор V3 и V1 перпендикулярны? ");
echo $V3->is_perpendicular($V1) ?  "Да" : "Нет" ;
printf('<br/>координаты Т1 ('. $T1->x.','.$T1->y.')');
$T1->Move($V1->x,$V1->y);
printf('<br/>координаты Т1 ('. $T1->x.','.$T1->y.')');