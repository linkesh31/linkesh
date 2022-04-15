<?php
	
$nameErr = $icErr = $emailErr = $passwordErr = $vpasswordErr = "";
$name = $ic= $email = $password = $vpassword ="";
    $name = test_input($_POST["name"]);
   	$ic = test_input($_POST["ic"]);
    $email = test_input($_POST["email"]);
    $password = test_input($_POST["password"]);
    $vpassword = test_input($_POST["vpassword"]);
 


function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
	function mykad($ic){
		$kod = substr($ic,0,2);
		if ($kod==01){
			echo "You are from johor..";

		} elseif ($kod==02) {
			echo "You are from kedah.. ";
		} elseif ($kod==03){
			echo "You are from kelantan..";
		}elseif ($kod==04){
			echo "You are from Melaka..";
		}elseif($kod==05){
			echo "You are from Negeri Sembilan..";
		}else{
			echo"You Ic number is invalid";
		}
	}
	
	mykad($ic); 
	echo "<br>";

	

		function gender($ic){
			$total = substr($ic, -1);

		if ($total % 2 ==0 ){
			echo "You are a women";
		}
		else{
			echo"You are a men";
		}
	}

	

	function birth($ic){
		$date = substr($ic,4,2);
		$month = substr($ic,2,2 );
		$year = substr($ic, 0,2);

	echo "Your birthday is on : ";
	echo  $date."-".$month."-".$year;
	}
	


	gender($ic);
	echo"<br>";
	birth($ic);
	echo "<br>";