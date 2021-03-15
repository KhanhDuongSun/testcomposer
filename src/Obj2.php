<?php
include ("Obj.php");
include ("Obj3.php");

$ob = new class1;
$ob2 = new class\class1;

$mama = function($name) use ($ob){ // first-class function + anonymous fuction + closure
    return "my name is $name <br>".$ob->name;
};

echo $mama('ahihi');

function helloWorld()
{
   echo 'Hello World!';
}

function goodbye()
{
    echo 'bye bye mama';
}

function handle(callable $ab) // truyền function vào làm tham số  // giá trị truyền vào là tên function 
{
   $ab(); // We know the parameter is callable then we execute the function.
}

handle('helloWorld'); // Outputs: Hello World!
handle('boodbye');
?>