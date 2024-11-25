<?php

//conditionals
$num = -1;
if($num<0){
    echo "$num is less than 0  <br>";
}


//operator
$age = 13;
if(($age>12) && ($age < 20)){
    echo "You are a teenager <br>";
}

$num1 = 20;
if($num1<18){
    echo "$num1 is less than 0  <br>";
}else{
    echo "$num1 is biger than 0 <br>";
}


$number = 2; 

if($number < 0){
    echo "the value of the number is a negative number <br>";
}

elseif($number == 0){
    echo "the number is equal yo 0 <br>";
}
else{
    echo "the value of the number is a pozitive number <br>";
}

$day = "Monday";

switch($day){
    case 'Monday':
    echo "Today it is Monday <br>";
    break;
    case 'Tuesday':
        echo "Today it is Tuesday <br>";
        break;
        case 'Wednesday':
            echo "Today it is Wednesday <br>";
            break;
            case 'Thursday':
                echo "Today it is Thursday <br>";
                break;
                case 'Friday':
                    echo "Today it is Friday <br>";
                    break;
                    case 'Saturday':
                        echo "Today it is Saturday <br>";
                        break;
                        case 'Sunday':
                            echo "Today it is Sunday <br>";
                            break;
                            default:
                            echo "Invalid Day";
                            break;
}

$t = 1;

while($t<=5){
    echo "The number is: $t <br>";

    $t++;
}

$z =2;
do{
    echo "The number is: $z <br>";
    $z++;
}while($z<= 5);

for($k= 0; $k<= 10; $k++){
    echo "The number is: $k <br>";
}

$cars = array ("BMW","Mercedes","Audi","Tesla") ;

foreach($cars as $car){
    echo "$car <br>";
}
$cars1 = array ("BMW" =>"18","Mercedes" =>"20","Audi" =>"16","Tesla" => "14") ;
// me ju qas vleres mrena array
foreach($cars1 as $l => $value){
    echo "$l => $value <br>";
}

?>