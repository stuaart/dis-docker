<?php

/* In this simple login example we are posting everything back to this current page. In a real use of a login you would want to redirect on login success to a different page, however you would also be needing to check login status (via session variables) on every single page loaded, otherwise a user could access pages without logging in at all */

// We need to start or resume the session to store session variables like username etc. 
session_start(); 

// Make sure we report all errors
error_reporting(E_ALL);
ini_set('display_errors',1);

// We're using this to work out if we've had a login issue later
$loginerror = FALSE;

// Are we posting a logout signal to this page? If so, unset the session variables
if (isset($_POST["logout"]))
{
  unset($_SESSION["user"]);
  unset($_SESSION["id"]);
}

// If we are posting the username and password to attempt a login, handle that here
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

  // Using the id of the user as a flag to indicate successful login
  $id = -1;
  if ($result->num_rows > 0) 
  {
    $result->num_rows;
    $row = $result->fetch_assoc();
    $id = $row["id"];
  }
  mysqli_close($conn);

  // If this was a brand new, successful login, then set the session variables
  if($id != -1 && !isset($_SESSION["user"]) && !isset($_SESSION["id"]))
  {
    $_SESSION["user"] = $user;
    $_SESSION["id"] = $id;
  }
  // If there was a login attempt, i.e., user and pass were POST-ed but the session vars are not set, then there's been a login problem, so flag it
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
  // Selectively show the logout button / form only if this user is logged in
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