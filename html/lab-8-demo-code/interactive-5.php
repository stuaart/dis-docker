<html>

  <head>
    <title>A pretty phone list</title>
  
    <style>   
       table, td {
       padding: 0.3rem;
       border: 1px solid black;
       border-collapse: collapse;
       text-align: left;
       background-color: #FFB74C; 
       color: #451ECC;
       font-family: Tahoma, Arial, Helvetica, sans-serif;}
       
       th {
            padding: 0.3rem;
            background-color: #CC6E1E; 
            color: #FFB74C; }
       
       h1 {
            font-family: Charcoal, sans-serif;
            color: #451ECC; } 
       
       p, form {
            font-family: Arial, Helvetica, sans-serif;
            color: #451ECC}
       
    </style>
    
    
  </head>

  <body>
    <h1>Pretty Phone List</h1>
    
    <form method="POST">
        Name: &nbsp;<input type="text" name="name"><br>
        Phone: <input type="text" name="phone"><br>
        <input type="submit" value = "Add Record">
    </form>
    <hr>
    
    <script>
        // A JavaScript function to confirm delete
        function confirmDelete(ID) 
        {
           var conf = confirm("Are you sure?"); 
           if (conf == true) // if OK pressed
           {
              delParam="?del="+ID; // add del parameter to URL
              this.document.location.href=delParam; // reload document
           }
        } 
    </script>
    
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

        // if there is a delete parameter then use it to delete a record from the database
        if (isset($_GET['del']) && $_GET['del']!="") 
        {
          // construct the DELETE query
          $sql = "DELETE FROM People WHERE ID=".$_GET['del'].";";
       
          // send query to database
          $result = mysqli_query($conn, $sql);
        }
               
        // construct the SELECT query
        $sql = "SELECT * FROM People ORDER BY Name;";
      
        // send query to database
        $result = mysqli_query($conn, $sql);
        
        // display the number of rows returned
        echo "<p>".mysqli_num_rows($result)." rows</p>";
        
        // check that something has been returned                                       
        if (mysqli_num_rows($result) > 0) 
        {
           echo "<table>";  // start table
           echo "<tr><th>Name</th><th>Phone</th></tr>"; // table header
           
           // loop through each row of the result (each tuple will  
           // be contained in the associative array $row)
           while($row = mysqli_fetch_assoc($result)) 
           {
             // output name and phone number as table row
             echo "<tr>";
             echo "<td>".$row["Name"]."</td>"; 
             echo "<td>".$row["PhoneNumber"]."&nbsp;&nbsp;";
             
             // Delete button executes JavaScript confirmDelete          
             echo "<button onclick=confirmDelete(".$row["ID"].")>Delete</button></td>";
            
             echo "</tr>";
           } 
           echo "</table>"; 
        }
        else // if query result is empty 
        {
            echo "Database is empty";
        }           
        
        mysqli_close($conn);
      
      ?> 
  
  </body>
</html>

