<html>
<head>
		<title>COMP4039 - PHP demonstrations</title>
		<link rel="stylesheet" href="../css/mvp.css">
	</head>
<body>
<main>
  <h1>PHP Demo 9 - File i/o (reading)</h1>

  <h2><u>poem.txt</u></h2>
  
  <?php  
    $infile = fopen("poem.txt", "r") or die("Unable to open file!");
    
    echo "<pre>";
    while(!feof($infile))
    {
      echo fgets($infile)."<br/>";
    }
    fclose ($infile);
    
    echo "</pre>";
  ?>  
</main>
<footer><a href="index.php">Back to main page</a></footer>
</body>
</html>