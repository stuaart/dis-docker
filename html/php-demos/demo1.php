<html>
<head>
		<title>COMP4039 - PHP demonstrations</title>
		<link rel="stylesheet" href="../css/mvp.css">
</head>
<body>
<main>
  <h1>PHP Demo 1 - Variables &amp; Arithmetic</h1>

  <?php  
     $a = 5;
     $b = 7;

     $msg = "a=".$a.", b=".$b;
     echo "<h2>".$msg."</h2>";
     echo "<ul>";
     echo "<li> a + b = ". ($a+$b) ."</li>";  
     echo "<li> a * b = ". ($a*$b) ."</li>";   
     echo "<li> a - b = ". ($a-$b) ."</li>";  
     echo "<li> a / b = ". ($a/$b) ."</li>";  
     echo "</ul>";
  ?>  
</main>
<footer><a href="index.php">Back to main page</a></footer>
</footer>
</body>
</html>