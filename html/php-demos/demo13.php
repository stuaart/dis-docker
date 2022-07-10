<html>
<head>
		<title>COMP4039 - PHP demonstrations</title>
		<link rel="stylesheet" href="../css/mvp.css">
	</head>
<body>
<main>
  <h1>PHP Demo 13 - A search form</h1>
    Using the standard syntax of mysqli
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
        $conn = mysqli_connect($servername, $username, $password, $dbname);
        if(!$conn) {
            die ("Connection failed");
         }
           $name = $_POST['name'];
            $sql = "SELECT * FROM People WHERE Name LIKE \"%". $name . "%\";" ;
            $result = mysqli_query($conn, $sql);

            if (mysqli_num_rows($result) > 0) {
                echo mysqli_num_rows($result)." rows<br/><br/>";

                while($row = mysqli_fetch_assoc($result)) {
                   echo $row["Name"]." - ".$row["PhoneNumber"]." - ". $row["Address"] . "<br/>"; 
              }
           }
           else {
             echo "Nothing found!";
           }
                                                             
           mysqli_close($conn);
       }
  ?>  
</main>
<footer><a href="index.php">Back to main page</a></footer>
</body>
</html>