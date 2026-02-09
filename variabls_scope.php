<?php
echo "<h3>php datatypes</h3>";
//string
$name="mary";
echo "string:$name<br>";


//integer
$age=19;
echo "age(integer):$age <br>";
//float
$salary=55000.500;
echo "salary:$salary <br>";
//boolean
$isbool=true;
echo "boolean:";
echo $isbool?"true <br>":"false <br>";
//array
$fruits=array("pear","strawberry","starfruit");
echo "fruits:";
print_r($fruits);
echo "<br><br>";
echo "0th position:$fruits[0]";

//variable scope
echo "<h3>variables scope</h3>";
function local(){
    $amount=500;
    $money=200;
    echo "amount:$amount";
}
local();
echo "<br>";
//global variable
$globalvar="global variable";
function globalex(){
    global $globalvar;
    echo "$globalvar <br>";
}
globalex();
//static variable
function staticex(){
    static $count=1;
    $count++;
    echo "$count times called";
    echo "$count";
}
staticex();
staticex();


?>