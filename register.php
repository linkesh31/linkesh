<!DOCTYPE HTML>  
<html>
<head>
<style>
.error {color: red;}
</style>
</head>
<body>  

<?php

$nameErr = $icErr = $emailErr = $passwordErr = $vpasswordErr = "";
$name = $ic= $email = $password = $vpassword ="";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["name"])) {
    $nameErr = "Name is required";
  } else {
    $name = test_input($_POST["name"]);
    
    }
  }

  if (empty($_POST["ic"])) {
    $icErr = "NRIC number is required";
  } else {
    $name = test_input($_POST["ic"]);
    
    }
  
  
  if (empty($_POST["email"])) {
    $emailErr = "Email is required";
  } else {
    $email = test_input($_POST["email"]);
    // check if e-mail address is well-formed
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $emailErr = "Invalid email format";
    }
  }
    
  if (empty($_POST["password"])) {
    $passwordErr = "Password is required";
  } else {
    $password = test_input($_POST["password"]);
    
    }
  
  


  if (empty($_POST["vpassword"])) {
    $vpasswordErr = " Verify your password ";
  } else {
    $vpassword = test_input($_POST["vpassword"]);
  }


function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>

<p><span class="error">* required field</span></p>
<form method="post" action="register_check.php">  
  Name: <input type="text" name="name">
  <span class="error">* <?php echo $nameErr;?></span>
  <br><br>
  NRIC: <input type="text" name="ic">
  <span class="error">* <?php echo $icErr;?></span>
  <br><br>
  E-mail: <input type="text" name="email">
  <span class="error">* <?php echo $emailErr;?></span>
  <br><br>
  Password: <input type="password" name="password">
  <span class="error">*<?php echo $passwordErr;?></span>
  <br><br>
  Verify Password: <input type="password" name="vpassword">
    <span class="error">*<?php echo $vpasswordErr;?></span>
  <br><br>
  
  <input type="submit" name="submit" value="Submit">  
</form>




</body>
</html>