<?php
echo "<h1>Iterators</h1>";
# for
echo "<h1>For loop:</h1>";
for ($vari = 0; $vari <=5; $vari++) {
    echo $vari;
};

#foreach
echo "<h1>For each:</h1>";
$abcd = array('a', 'b','c','d');

foreach($abcd as $value ) {
    echo $value;
};

#while 
echo "<h1>While loop:</h1>";
$i = 1;
while($i < 10 ) {
    echo $i++;
}

#dowhile
echo "<h1>Do while loop:</h1>";
$i = 2;
do {
    echo $i++;
} while ($i < 5);
?>
