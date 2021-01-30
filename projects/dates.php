<?php
echo "<h1>Dates</h1>";
# DATE TIME 
echo "<h1>DateTime with 'Y-m-d' argument:</h1>";
$d = new DateTime('now');
echo $d->format('Y-m-d');

# CURRENT DATE 
echo "<h1>Current date in any format:</h1>";
echo $d->format('l jS \of F Y h:i:s A');
# DAY
echo "<h1>Current day:</h1>"; 
echo $d->format('l d');
# MONTH
echo "<h1>Current month in numerical format:</h1>";
echo $d->format('m');
# MINUTE
echo "<h1>Current minute with leading zeros:</h1>";
echo $d->format('i');
?>
