<!DOCTYPE html>
<html lang="en-ca">
  <head>
    <!-- Metadata -->
    <meta charset="utf-8">
    <meta name="description" content="Area of a Triangle in PHP">
    <meta name="keywords" content="immaculata, ics2o">
    <meta name="author" content="Anastasiia Lebedenko">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Code for the favicon -->
    <link rel="apple-touch-icon" sizes="180x180" href="./favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="./favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="./favicon/favicon-16x16.png">
    <link rel="manifest" href="./favicon/site.webmanifest">
    <!-- Link to CSS file -->
    <link rel="stylesheet" href="./css/style.css">
    <!-- Title -->
    <title>Area of a Triangle in PHP</title>
  </head>
  <body>
		<!-- php echo to print the html to the page -->
    <?php 
			echo "<h1Salary Program, with a PHP</h1>";
			echo "<h3>This website will help you calculate salary.</h3>";
		?>
		<!-- form to get the base and height from the user -->
    <form action="./results.php" method="post" target="results">
      <label for=lblHours">Hours Worked:</label>
      <input type="text" id="hours" placeholder="Number of Hours Worked:" name="hours"><br><br>
      <label for="lblRate">Hourly Rate:</label>
      <input type="text" id="rate" placeholder="Hourly Rate:" name="rate"><br><br>
      <input type="submit" value="Calculate Amount Earned">
		</form>

			<!-- iframe for the results to show on the web page. -->
			<iframe id="results" name="results">			
				
     
	    </iframe>
	</body>
</html>