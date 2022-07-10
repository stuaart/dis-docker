<html>
<head>
		<title>COMP4039 - PHP demonstrations</title>
		<link rel="stylesheet" href="../css/mvp.css">
	</head>
<body>
<main>
  <h1>PHP Demo 8 - Forms</h1>

  <form  method="post">
      What is your name? <input type="text" name="name" /><br/>
      Give me a number <input type="text" name="number" /><br/>
      <input type="submit" />
  </form>

  <?php  
      function double($n) {
        return $n*2;
      }

     if (isset($_POST['name'])) 
     {
       $name = $_POST['name'];
       echo "Hello ".$name."!<br/>"; 
       if (isset($_POST['number'])) {
        echo "The double of your number is ". double($_POST['number']);
       }
     }
  ?>  
</main>
<footer><a href="index.php">Back to main page</a></footer>
</body>
</html>