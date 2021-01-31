<?php
echo "<h3>1. Define a new variable and assign a value to each of the following 
types:</h3>";
$bool = True;
echo var_dump($bool).'<br><br>';

$int = 1;
echo var_dump($int).'<br><br>';

$float = 0.1;
echo var_dump($float).'<br><br>';

$str = 'str';
echo var_dump($str).'<br><br>';

$arr = array('1','2','3');
echo var_dump($arr).'<br><br>';

class obj 
{
    function do_obj()
    {
        echo 'I\'m an object<br><br>';
    }
};

$obj = new obj;
$obj->do_obj();

$null = NULL;
echo var_dump($null);

?>
