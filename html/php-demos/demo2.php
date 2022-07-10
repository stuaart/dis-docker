<html>
<head>
		<title>COMP4039 - PHP demonstrations</title>
		<link rel="stylesheet" href="../css/mvp.css">
	</head>
<body>
<main>
  <h1>PHP Demo 2 - Looping</h1>
  <?php  
      error_reporting(E_ALL);
      ini_set('display_errors',1);

      $loops = 45;

      echo "<ul>";
      for($n=$loops; $n>=0; $n--) {
         echo "<li> Line: ". $n ."</li>";
      }
      echo "</ul>";
  ?>  
  </main>
  <footer><a href="index.php">Back to main page</a></footer>
</body>
</html>