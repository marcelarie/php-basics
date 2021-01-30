<?php
echo "<h3>1. Define a simple array composed of text strings</h3>";
$simpleText = array('simple', 'and', 'text');
echo "\$simpleText = array('simple', 'and', 'text');<br>";
echo var_dump($simpleText);

echo "<h3>2. Define a simple array consisting of whole numbers and decimal
 numbers </h3>";
$wholeAndDecimal = array(2,3,4.4,0.5);
echo "\$wholeAndDecimal = array(2,3,4.4,0.5);<br>";
echo var_dump($wholeAndDecimal);

echo "<h3>3. Define a multidimensional array </h3>";
$multiDimensional = array(
    array('dimension', 01),
    array('dimension', 02),
    array('dimension', 03)
);
echo "\$multiDimensional = array(
    array('dimension', 01),
    array('dimension', 02),
    array('dimension', 03)
); <br><br>";
echo var_dump($multiDimensional);

echo "<h3>4. Execute the function that allows to obtain the length of an array 
</h3>";
$countArr = count(array(1,2,3));
echo "\$countArr = count(array(1,2,3));<br>";
echo var_dump($countArr);

echo "<h3>5. Execute the function that allows to obtain the combination of two
 arrays </h3>";
$arrayCombo = array_combine(array(1,2),array('one','two'));
echo "\$arrayCombo = array_combine(array(1,2),array('one','two'));<br>";
echo var_dump($arrayCombo);

echo "<h3>6. Execute the function that once is given an array return the last 
element of it </h3>";
$last = array(1,2,3,4,5);
echo "\$last = array(1,2,3,4,5);<br>echo end(\$last);<br>";
echo end($last);

echo "<h3>7. Execute the function that once is given an array add a new element
 to the array in question </h3>";
$new = array(1,2,3,4,5);
array_push($new,6);
echo "\$new = array(1,2,3,4,5);<br>";
echo "array_push(\$new,6);<br>";
echo  var_dump($new);
?>
