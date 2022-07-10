<html>
  <body>
    <h1>Phone List</h1>
    
    <form method="POST">
        Name: <input type="text" name="Name"><br>
        Phone: <input type="text" name="PhoneNumber"><br>
        <input type="submit" value = "Add Record">
    </form>
    <hr>
    
      <?php       
    
        require("db.inc.php");
        
        // Open the database connection
        $conn = mysqli_connect($servername, $username, $password, $dbname);
                               
        // Check connection
        if(mysqli_connect_errno()) 
        {
           echo "Failed to connect to MySQL: ".mysqli_connect_error();
           die();
        } 
        // else echo "MySQL connection OK<br>";  // useful for testing
        
        
        // if a form has been submitted, insert a new record                                              
        if (isset($_POST['Name']) && $_POST['Name']!="" && 
            isset($_POST['PhoneNumber']) && $_POST['PhoneNumber']!="") // check contents of $_POST supervariables
        {     
          // construct the INSERT query
          $sql = "INSERT INTO People(Name, PhoneNumber) VALUES ('".$_POST['Name']."','".$_POST['PhoneNumber']."');";
          echo "sql=".$sql."<br/>";
          // send query to the database
          $result = mysqli_query($conn, $sql);   
        }
          
        // construct the SELECT query
        $sql = "SELECT * FROM People ORDER BY Name;";
      
        // send query to database
        $result = mysqli_query($conn, $sql);
        
        // display the number of rows returned
        echo mysqli_num_rows($result)." rows<br/>";
        
        // check that something has been returned                                       
        if (mysqli_num_rows($result) > 0) 
        {
           echo "<ul>";  // start list
           
           // loop through each row of the result (each tuple will  
           // be contained in the associative array $row)
           while($row = mysqli_fetch_assoc($result)) 
           {
             // output name and phone number as list item
             echo "<li>";
             echo $row["Name"]; 
             echo " (phone: ".$row["PhoneNumber"].") ";
			       echo "</li>";
           } 
           echo "</ul>"; // end of list
        }
        else // if query result is empty 
        {
          echo "Database is empty";
        }           
        
        mysqli_close($conn);
      
      ?> 
  
  </body>
</html>
