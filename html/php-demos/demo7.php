<html>
<head>
		<title>COMP4039 - PHP demonstrations</title>
		<link rel="stylesheet" href="../css/mvp.css">
	</head>
<body>
<main>
  <h1>PHP Demo 7 - $_SERVER Superglobal</h1>

  <?php  
     error_reporting(E_ALL);
     ini_set('display_errors',1);
     
     echo "PHP filename : ".$_SERVER['PHP_SELF']."<br>";
     echo "Server Name : ".$_SERVER['SERVER_NAME']."<br>";
     echo "Server IP : ".$_SERVER['SERVER_ADDR']."<br>";
     echo "Server Software : ".$_SERVER['SERVER_SOFTWARE']."<br>";
     echo "Request Timestamp : ".$_SERVER['REQUEST_TIME']."<br>";
     echo "Browser : ".$_SERVER['HTTP_USER_AGENT']."<br>";
     echo "Browser IP : ".$_SERVER['REMOTE_ADDR']."<br>";
     
  ?>  
</main>
<footer><a href="index.php">Back to main page</a></footer>
</body>
</html>