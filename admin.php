
<?php 

session_start();

	include("connection.php");
	


	if($_SERVER['REQUEST_METHOD'] == "POST")
	{
		
		$user_name = $_POST['user_name'];
		$password = $_POST['password'];

		if(!empty($user_name) && !empty($password))
		{

			

			
					if($password == "987699" && $user_name=="Admin")
					{

					//	$_SESSION['user_id'] = $user_data['user_id'];
						header("Location: display.php");
						die;
					}else{
			
			
				echo '<script type="text/javascript">';
				echo ' alert("Incorrect details entered")';  
				echo '</script>';

		}}else
		{
						
			echo '<script type="text/javascript">';
			echo ' alert("Incorrect details entered")'; 
			echo '</script>';
			
		}
	}

?>


<!DOCTYPE html>
<html>
<head>
	<title> Admin Login</title>
</head>
<body >

	<style type="text/css">


body{
	height: 100%;
  width: 100%;
  background: url("one.jpg");
  background-size: cover;
  background-repeat: no-repeat;
}

a{
text-decoration: none;
	color: black;
}

a:link {
        color: #ccc;
      }
      
  
      a:hover {
        color: rgb(132,2,22);
      }
	
	#text{

		height: 25px;
		border-radius: 5px;
		padding: 4px;
		border: solid thin #aaa;
		width: 100%;
	}

	#button{

		padding: 10px;
		width: 100px;
		color: white;
		background-color: black;
		border: none;
	}

	#box{

		background-color: grey;
		margin: auto;
		width: 300px;
		padding: 20px;
	}

	</style>
<br><br><br><br><br><br><br><br><br><br><br><br>
	<div id="box">
		
		<form method="post">
			<div style="font-size: 20px;margin: 10px;color: white;"><b><center>Admin Login</center></b></div>

			<input id="text" type="text" name="user_name" placeholder = "Username"><br><br>
			<input id="text" type="password" name="password" placeholder ="Password"><br><br>

			<input id="button" type="submit" value="Login"><br><br>


		</form>
	</div>
</body>
</html>