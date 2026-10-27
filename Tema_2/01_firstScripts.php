  <!DOCTYPE html>
  <html>
	
	<head>
		<title>First scripts</title>
	</head>
	
	<body>
		
		<h2>1. Circumference length and Circle area (Radius: 12 cm)</h2>
    		<?php
        			$radius = 12;
        			// Fórmulas estándar usando pi() o M_PI
        			$length = 2 * pi() * $radius;
        			$area = pi() * $radius ** 2;

        			echo "<p>Circumference length: " , $length , " cm</p>";
        			echo "<p>Circle area: " , $area , " cm²</p>"
    		?>

    		
    		<h2>2. Arithmetic Operations</h2>
    		<?php
        			$num1 = 7;
       				$num2 = 4;
       			
					echo "<p>" , $num1 , " + " , $num2 , " = " , $num1 + $num2 , "</p>";
					
					echo "<p>" , $num1 , " - " , $num2 , " = " , $num1 - $num2 , "</p>";
					
					echo "<p>" , $num1 , " * " , $num2 , " = " , $num1 * $num2 , "</p>";
					
					echo "<p>" , $num1 , " / " , $num2 , " = " , $num1 / $num2 , "</p>";
					
					echo "<p>" , $num1 , " % " , $num2 , " = " , $num1 % $num2 , "</p>";
					
					echo "<p>" , $num1 , " ** " , $num2 , " = " , $num1 ** $num2 , "</p>";

    		?>
    		
    		
    		<h2>3. Greeting using two variables</h2>
    		<?php
        			$word1 = "Good";
        			$word2 = "morning";
        		
        			echo "<p>" , $word1 , " " , $word2 , "</p>";
    		?>
		
	</body>
</html> 
