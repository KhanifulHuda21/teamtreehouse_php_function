<?php

function hello()
{
    echo "Hello World";
}
hello();

echo PHP_EOL;

$current_user="Mike";

function is_mike()
{
    global $current_user;
    if($current_user=="Mike"){
        echo "You is Mike";
    }else{
        echo "you not mike";
    }
}
is_mike();
echo PHP_EOL;

function helloName($name)
{
    if(is_array($name) && !empty($name))
    {
        foreach($name as $key)
        {
            echo "Hello, $key \n";
        }
    }else
    {
        echo "Hello Friend !";
    }
    
}

helloName(["ferdi","huda","rendy"]);

echo PHP_EOL;

function get_info($name,$title=Null)
{
    if($title)
    {
       echo "$name was arrived, and came as $title ";
    }else
    {
        echo "$name was arrived, Welcome";
    }
}

get_info("Mike","Frog");

function helloWorld()
{
    return "\nHello World";
}

$hello=helloWorld("You so Good"); //\nHelloWorld

echo $hello;

echo PHP_EOL;

function addUp($a,$b)
{
  return [$a,$b,$a+$b];
}

print_r(addUp(2,4));

function sumArray($data)
{
    $result=0;
    foreach($data as $key)
    {
        $result+=$key;
    }
    return $result;
}
var_dump (sumArray([1,2,4,4,5]));

function answer()
{
    return"You answer the question";
}
$answer=answer();

echo PHP_EOL;

//Callback function

$answer_cal="answer";
echo $answer_cal()."!!";//cal function

//Anonymouse Function

$askName="What is your name??";
$name="hanif";

$ask=function()use($askName,$name)
{
    return "Ask the question,$askName:my name is,$name"; //use :mengakses variable glogal
};
echo $ask();



function br()
{echo PHP_EOL;

}
//Built-in string function

$magang="Magang Top Jos";

echo strlen($magang); //14

br();

echo substr($magang,7,7); //  TOP jos

br();

echo strpos($magang,"Jos");//11

br();

echo $magang[11];//j



$team=["Mike"=>"Developer","hanif"=>"Designer","ahmad"=>"Manager"];
print_r(array_keys($team));

var_dump(array_key_exists("jhon", $team));//hanya untuk mengecek


if(array_key_exists("john",$team))
{
    echo "mike found in \$team";
}else
{
    echo "Key not found in\$team";

}

br();

array_walk($team,function($value,$key){
    echo  "$key is a $value\n";
});



