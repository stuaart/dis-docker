<html>
  <head>
    <title>COMP4039 - PHP demonstrations</title>
    <link rel="stylesheet" href="../css/mvp.css">
  </head>
<body>
  <main>
    <h1>PHP Demo 3 - Conditions</h1>

    <?php  

      $time = date("H:i:s");
      $hour = date("H");

      echo "<h2> The time is: ". $time . "</h2>";

      echo "<p>";

      if ($hour<"14") {
        $msg = "Good morning"; 
      }
      elseif ($hour < "18")  {
        $msg = "Good afternoon"; 
      }
      else {
        $msg = "Good evening";
      }

      echo $msg;
      echo "</p>";

    ?>  
  </main>
  <footer><a href="index.php">Back to main page</a></footer>
</body>
</html>