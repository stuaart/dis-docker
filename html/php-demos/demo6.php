<html>
<head>
		<title>COMP4039 - PHP demonstrations</title>
		<link rel="stylesheet" href="../css/mvp.css">
</head>

<body>
<main>
  <h1>PHP Demo 6 - Database</h1>

  <?php  
     error_reporting(E_ALL);
     ini_set('display_errors',1);
     
      require("db.inc.php");


      $conn = mysqli_connect($servername, $username, $password, $dbname);
                              
      if(!$conn) {
         die ("Connection failed");
      }
                                       
      $sql = "SELECT * FROM People;";
      $result = mysqli_query($conn, $sql);
                                             
      if (mysqli_num_rows($result) > 0) {
           echo mysqli_num_rows($result)." rows<br/><br/>";
           echo "<table>";
           echo "<tr><th>Name</th><th>Phone</th><th>Address</th></tr>";
           while($row = mysqli_fetch_assoc($result)) {
              echo "<tr><td>".$row["Name"]."</td><td>".$row["PhoneNumber"]."</td><td>". $row["Address"]."</td></tr>"; 
         }
         echo "</table>";
      }
      else {
        echo "Nothing found!";
      }
                                                        
      mysqli_close($conn);
       
  ?>  
</main>
<footer><a href="index.php">Back to main page</a></footer>
</body>
</html>