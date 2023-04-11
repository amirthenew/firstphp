<?php

//foreach

$names = array('amir','ali','mahdi');

foreach ($names as $value){
echo $value.'<br>' ;
}


//you can set index for arrays;
$names2 = array('user1'=>'amir','user2'=>'reza');
foreach ($names2 as $value){
    echo $value;
}