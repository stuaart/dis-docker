<html>
<head>
		<title>COMP4039 - PHP demonstrations</title>
		<link rel="stylesheet" href="../css/mvp.css">
	</head>
<body>
<main>
  <h1>PHP Demo 14 - A search form</h1>
    Using the object-oriented syntax of mysqli
  <h2><u>People database</u></h2>
  
  <form  method="post">
        Name: <input type="text" name="name"><br/>
      <input type="submit" value="Search">
  </form>

  <?php  
       error_reporting(E_ALL);
       ini_set('display_errors',1);
       
       require("db.inc.php");
                  
       if (isset($_POST['name'])) 
       {
            $mysqli = new mysqli($servername, $username, $password, $dbname);
            $name = "%{$_POST['name']}%";
            $stmt = $mysqli->prepare("SELECT * FROM People WHERE Name LIKE ?");
            $stmt->bind_param("s", $name);
            $stmt->execute();

            $result = $stmt->get_result();
            if ($result->num_rows > 0) {
                echo $result->num_rows ." rows<br/><br/>";
                while($row = mysqli_fetch_assoc($result)) {
                    echo $row["Name"]." - ".$row["PhoneNumber"]." - ". $row["Address"] . "<br/>"; 
              }

           }
           else {
             echo "Nothing found!";
           }
           $stmt->close();                                              
       }
  ?>  
</main>
<footer><a href="index.php">Back to main page</a></footer>
</body>
</html>