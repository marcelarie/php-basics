<?php
echo "<h3>1. Create a simple condition that evaluates whether the current day is 
Monday. Only in the case that the condition is met, it shows a message of “We
 are on Monday”.  </h3>";
$date = new DateTime('today');

if ($date->format('l') == 'Monday') {
    echo 'We are on Monday';
};
echo "<h3>2. Create a simple condition that evaluates whether the current month is 
October. If the condition is met, it shows a message of the type 'We are in 
October'. Otherwise, if this condition is not met, show the current month in 
words as it come from DateTime.</h3>";

if ($date->format('M') == 'Oct') {
    echo 'We are in October';
} else {
    echo $date->format('M');
}

echo "<h3>3. Create a double condition that evaluates:</h3>";
echo "<h4>If the current minute is less than 10. Displays a message of type 
'the current minute is less than 10', if the current minute is greater than 15,
 displays a message of the type 'the current minute is more than 15'. 
If you do not meet any of the two conditions above: Displays a message of the 
type 'does not meet any conditions'</h4>";

if ($date->format('i') < 10) {
    echo "The current minute is less than 10";
} else if ($date->format('i') > 15) {
    echo "The current minute is more than 15";
} else {
    echo "does not meet any conditions";
}

echo "<h4>4. Create a switch type control structure to display a different 
message depending on the current day of the week. You can write any type of 
message, because the important thing is that you understand how it works and 
in what cases you can use it.</h4>";
    
switch ($date->format('D')) {
    case 'Mon':
        echo 'Monday';
    break;
    case 'Tue':
        echo 'Tuesday';
    break;
    case 'Wed':
        echo 'Wendnesday';
    break;
    case 'Thu':
        echo 'Thursday';
    break;
    case 'Fri':
        echo 'Friday';
    break;
    case 'Sat':
        echo 'Saturday';
    break;
    case 'Sun':
        echo 'Sunday';
    break;
}

?>



