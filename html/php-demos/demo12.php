<html>
<head>
		<title>COMP4039 - PHP demonstrations</title>
		<link rel="stylesheet" href="../css/mvp.css">
	</head>
<body>
<main>
  <h1>PHP Demo 12 - File i/o with forms</h1>

  <h2><u>Writing forms to file</u></h2>
  
  <form  method="post">
      Filename: <input type="text" name="name"><br/>
      Message <input type="text" name="message"><br/>
      <input type="submit">
  </form>


  <?php  
       error_reporting(E_ALL);
       ini_set('display_errors',1);
       if (isset($_POST['name']) && isset($_POST['message'])) 
       {
            $time = date("H:i:s");
            $header = "Logged at ". $time ."\n";
            $message = $_POST['message'] . "\n";
            $path = "./generated/". $_POST['name'];
            $outfile = fopen($path, "a") or die("Unable to open file!");
            fwrite($outfile, $header);
            fwrite($outfile, $message);
            fwrite($outfile, "--------------------------\n");
            fclose ($outfile);
       }
  ?>  
</main>
<footer><a href="index.php">Back to main page</a></footer>
</body>
</html>