<?php

function calculator($num1,$num2,$sum){
if ($sum == '+'){
return $num1+$num2;
}
elseif ($sum=='-'){
    return $num1-$num2;
}
elseif ($sum == '*'){
    return $num1*$num2;
}
elseif ($sum =='/'){
    return $num1/$num2;
}
else {
    echo 'error';
}

}

$num1 = 20;
$num2 = 18;
$sum = '+';
echo  calculator(2,6,$sum);