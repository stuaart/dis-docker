<html>
<head>
		<title>COMP4039 - PHP demonstrations</title>
		<link rel="stylesheet" href="../css/mvp.css">
	</head>
<body>
<main>
  <h1>PHP Demo 5 - Functions</h1>

  <?php  
     error_reporting(E_ALL);
     ini_set('display_errors',1);


     $number = 3;


     // doubled is a user-defined function
     echo "<p>";
     echo $number;
     echo " doubled is ";
     echo double($number);
     echo "</p>";
     
     // sqrt is a PHP core function
     echo "<p>";
     echo "The square root of ";
     echo $number;
     echo " is ";
     echo sqrt($number);
     echo "</p>";
     
     
     // number_format is a PHP core function
     echo "<p>";
     echo "The square root of ";
     echo $number;
     echo " (3 places) is ";
     echo number_format(sqrt($number),3);
     echo "</p>";

     function double($n) {
      return $n*2;
      }

  ?>  
</main>
<footer><a href="index.php">Back to main page</a></footer>
</body>
</html>