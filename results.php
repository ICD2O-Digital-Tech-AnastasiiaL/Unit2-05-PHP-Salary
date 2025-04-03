<?php
	// tax 
    define(TAX, 20.05);
    
    // get the base and height from the textfields
	$hours = $_POST['hours'];
	$rate = $_POST['rate'];

	// calculate the total 
    $totalEarned = $hours * $rate
	$govTake = $totalEarned * $TAX / 100
    $netPay = $totalEarned - $govTake

    echo "<h3>Results:</h3>"
    echo "The Government will take $" . $govTake
    echo "The Net pay will be $" . $netPay


?>

