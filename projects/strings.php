<?php
echo "<h1>Strings</h1>";

echo "<h3>Print a text string</h3>";
echo " print('string') => ";
print('string');

echo "<h3>Print a text string that interpret variables</h3>";
$textString = 'Yep';
echo "\$textString = 'Yep';<br>
echo \$textString; =>".$textString;

echo "<h3>Concatenate a previously declared variable in a text string</h3>";
echo "\$text = 'CAT';<br>
\$otherText = 'DOG';<br>
print('This is a '.\$text.' or a '.\$otherText); => ";
$text = 'CAT';
$otherText = 'DOG';
print('This is a '.$text.' or a '.$otherText);

echo "<h3>Execute the function that allows you to replace text in a string (case
 sensitive)</h3>";
echo "\$textToReplace = 'What a lovely day!';<br>
echo str_replace('day', 'night', \$textToReplace); => ";
$textToReplaceA = 'What a lovely day!';
echo str_replace('day', 'night', $textToReplaceA); 

echo "<h3>Execute the function that allows you to replace text in a string 
(without taking into account upper / lower case)</h3>";
echo "\$textToReplace = 'What a lovely day!';<br>
echo str_ireplace('DAY', 'night', \$textToReplace); => ";
$textToReplaceB = 'What a lovely day!';
echo str_ireplace('DAY', 'night', $textToReplaceB); 

echo "<h3>Execute the function that allows you to write a text N times</h3>";
echo "\$textToRepeate = \"Repeat me!!! \";
echo str_repeat(\$textToRepeate, 5); => <br>";

$textToRepeate = "Repeat me!!!<br> ";
echo str_repeat($textToRepeate, 5);

echo "<h3>Execute the function that allows to obtain the length of a text string
</h3>";
$textToCount = 'This is a text with 33 characters';
echo "\$textToCount = 'This is a text with 33 characters';<br>";
echo "echo strlen(\$textToCount); => ";
echo strlen($textToCount);

echo "<h3>Executes the function that allows to obtain the position of the first 
occurrence of a text within a text string</h3>";
echo "echo strpos(\"This text is long and full of positions!\",\"full\"); => ";
echo strpos("This text is long and full of positions!","full");

echo "<h3>Execute the function that allows a text string to be capitalized</h3>";
echo "echo strtoupper('roger rabbit'); => ";
echo strtoupper('roger rabbit');

echo "<h3>Execute the function that allows you to transform a text string to 
lowercase</h3>";
echo "echo strtolower('ROGER RABBIT'); => ";
echo strtolower('ROGER RABBIT');

echo "<h3>Execute the function that allows to obtain a text substring from the 
position</h3>";
echo "echo substr(\"Roger Rabbit\", -1); => ";
echo substr("Roger Rabbit", -1);

?>
