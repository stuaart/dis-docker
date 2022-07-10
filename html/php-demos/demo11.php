<html>
<head>
		<title>COMP4039 - PHP demonstrations</title>
		<link rel="stylesheet" href="../css/mvp.css">
	</head>
<body>
<main>
  <h1>PHP Demo 11 - Exceptions</h1>

  <?php  

  function checkDiv($a)
  {
    if ($a==0.0) throw new Exception ("divide by zero");
  }
  try {
    for($n=5;$n>=0;$n--)
    {
      echo "5/".$n." = ";
      checkDiv($n);
      $answer=5/$n;
      echo $answer."<br/>";
    }
  } 
  catch (Exception $e)
  {
    echo "Error: ".$e->getMessage();
  } 

  ?>  
</main>
<footer><a href="index.php">Back to main page</a></footer>
</body>
</html>