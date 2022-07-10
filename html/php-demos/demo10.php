<html>
<head>
		<title>COMP4039 - PHP demonstrations</title>
		<link rel="stylesheet" href="../css/mvp.css">
	</head>
<body>
<main>
  <h1>PHP Demo 10 - File i/o (writing)</h1>

  <h2><u>Creating output.txt</u></h2>
  
  <?php  
       error_reporting(E_ALL);
       ini_set('display_errors',1);
    $outfile = fopen("./output.txt", "w") or die("Unable to open file!");
    
    fwrite($outfile, "A message from PHP\n");
    fwrite($outfile, "Another line of text\n");
    fclose ($outfile);
    echo "output.txt created...";

    $infile = fopen("output.txt", "r") or die("Unable to open file!");
    
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