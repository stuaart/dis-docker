<?php
session_start();

error_reporting(E_ALL);
ini_set('display_errors',1);

$loginerror = FALSE;

if (isset($_POST["logout"]))
{
  unset($_SESSION["user"]);
  unset($_SESSION["id"]);
}

if(isset($_POST["username"]) && 
   isset($_POST["password"]))
{
  require("db.inc.php");
  $conn = mysqli_connect($servername, $username, $password, $dbname);
  if(!$conn) {
    die ("Connection failed");
  }

  $user = $_POST["username"];
  $pass = $_POST["password"];

  $query = "SELECT * from `users` WHERE `username`='$user' 
            AND `password`='$pass'";
  $result = mysqli_query($conn, $query);

  $id = -1;
  if ($result->num_rows > 0) 
  {
    $result->num_rows;
    $row = $result->fetch_assoc();
    $id = $row["id"];
  }
  mysqli_close($conn);

  if($id != -1 && !isset($_SESSION["user"]) && !isset($_SESSION["id"]))
  {
    $_SESSION["user"] = $user;
    $_SESSION["id"] = $id;
  }
  elseif(!isset($_SESSION["user"]) && !isset($_SESSION["id"]))
  {
    $loginerror = TRUE;
  }
}
?> 

<!DOCTYPE html>
<html>
<head>
		<title>COMP4039 - PHP demonstrations</title>
		<link rel="stylesheet" href="../css/mvp.css">
	</head>
<body>
<main>
  <h1>PHP Demo 15 - Login example</h1>

<?php
  if(isset($_SESSION["user"]) && 
     isset($_SESSION["id"]))
  {
?>
    <form method="POST">
<?php
    echo "<p>" . $_SESSION["user"] . " is logged in</p>";
?>
      <input type="submit" name="logout" value="Logout"/>
    </form>

<?php
  }
  else if (!isset($_SESSION["user"]) && !isset($_SESSION["id"]))
  {
    if ($loginerror)
      echo "<p>Invalid Username or Password</p>";

?>
    <form method="POST">
      Username: 
      <input name="username" type="text" id="user" value="" size="30" maxlength="32" required/><br/>

      Password: 
      <input name="password" type="password" id="pass" value="" size="30" maxlength="32" required/><br/>
      <input type="Submit" name="login" value="Login"/>
    </form>

<?php
  }
?>

</main>
<footer><a href="index.php">Back to main page</a></footer>
</body>
</html>