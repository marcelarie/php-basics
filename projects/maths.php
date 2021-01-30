<?php
echo "<h3>Define a variable whose value is the result of the function that 
returns an absolute value. </h3>";
$absolute = abs(10);
echo " \$absolute = abs(10);<br>";
echo var_dump($absolute);

echo "<h3>Define a variable whose value is the result of the function that 
returns a rounded value to the next highest integer.</h3>";
$round = ceil(2.8);
echo " \$round = ceil(2.8);<br>";
echo var_dump($round);

echo "<h3>Define a variable whose value is the result of the function that 
returns the highest value of a series of values that are received by parameter.
</h3>";
$max = max(2,44,5,1,-1,499);
echo "\$max = max(2,44,5,1,-1,499);<br>";
echo var_dump($max);

echo "<h3>Define a variable whose value is the result of the function that 
returns the lowest value of a series of values that are received by parameter.
</h3>";
$min= min(2,44,5,1,-1,499);
echo "\$min= min(2,44,5,1,-1,499);<br>";
echo var_dump($min);

echo "<h3>Define a variable whose value is the result of the function that 
returns a random number</h3>";

$random = random_int(1,100000);
echo "\$random = random_int(1,100000);<br>";
echo var_dump($random);
?>
