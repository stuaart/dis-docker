<html>
  <body>
    <h1>Phone List</h1>
    
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
        else echo "MySQL connection OK<br/>";  // useful for testing
        
        mysqli_close($conn);
      
      ?> 
  
  </body>
</html>