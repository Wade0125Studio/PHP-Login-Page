<?php 
session_start();

	include("connection.php");
	include("functions.php");


	if($_SERVER['REQUEST_METHOD'] == "POST")
	{
		//something was posted
		$user_name = $_POST['user_name'];
		$password = $_POST['password'];

		if(!empty($user_name) && !empty($password) && !is_numeric($user_name))
		{

			//save to database
			$user_id = random_num(20);
			$query = "insert into users (user_id,user_name,password) values ('$user_id','$user_name','$password')";
			

			mysqli_query($con, $query);

			header("Location: login.php");
			die;
		}else
		{
			echo "Please enter some valid information!";
		}
	}
?>


<!DOCTYPE html>
<html>
<head>
	<title>Signup</title>
</head>
<body>

	<style type="text/css">
	
	#text{

height: 25px;
border-radius: 5px;
padding: 4px;
border: solid bold #000000;
width: 100%;
color: black;
}
button{

text-decoration: none;
border: 2px solid transparent;
font-weight: bold;
padding: 13px 30px;
border-radius: 30px;
transition: .4s; 
background-color:white;
color: white;
text-decoration: none;
}


button:hover{
background-color: transparent;
border: 2px solid black;
cursor: pointer;
}

#box{

background-color: #22D9F5;
margin: auto;
width: 300px;
height: 300px;
padding: 20px;
padding-top: 100px;
}

	</style>

	<div id="box">
		
		<form method="post">
			<div style="font-size: 30px;margin:auto ;color: black;text-align:center;">Signup</div>

			<input id="text" type="text" name="user_name"  placeholder="請輸入帳號"><br><br>
			<input id="text" type="password" name="password"  placeholder="請輸入密碼"><br><br>

			<input id="button" type="submit" value="Signup"><br><br>

			<a href="login.php">Click to Login</a><br><br>
		</form>
	</div>
</body>
</html>