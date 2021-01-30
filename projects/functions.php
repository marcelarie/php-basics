<?php
echo "<h1>Functions</h1>";

echo "<h3>1. It generates a function that given two numbers returns the sum of 
both </h3>";
function sum($a,$b) {
    return $a + $b;
}
echo "function sum(\$a,\$b) {<br>
    return \$a + \$b;<br>
};<br>";
echo 'sum (1,2) => '. sum(1,2);

echo "<h3>2. It generates a function that given two numbers returns the
 multiplication of both </h3>";
function multi($a,$b) {
    return $a * $b;
}
echo "function multi(\$a,\$b) {<br>
    return \$a * \$b;<br>
};<br>";
echo 'multi(1,2)=> '. multi(1,2);

echo "<h3>3. It generates a function that given two numbers returns the division 
of both </h3>";
function div($a,$b) {
    return $a / $b;
}
echo "function div(\$a,\$b) {<br>
    return \$a / \$b;<br>
};<br>";
echo 'div(1,2)=> '. div(1,2);

echo "<h3>4. It generates a function that, given two numbers and an operation 
(add, multiply or divide), returns the result of that operation.</h3>";
echo "multipleOperations(1,2,'divide') =>" . multipleOperations(1,2,'divide');
function multipleOperations($a,$b,$op) {
    switch ($op) {
        case 'add':
            return sum($a, $b);
            break;
        case 'multiply':
            return multi($a, $b);
            break;
        case 'divide':
            return div($a, $b);
            break;
        default:
            return 'Use add, multiply or divide.';
};

}


?>
