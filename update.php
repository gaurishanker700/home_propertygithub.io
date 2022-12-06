
<?php 
session_start();


	include("connection.php");
    $user_id=$_GET['updateid'];
	$query="select * from register where user_id=$user_id";
    $result=mysqli_query($con,$query);
    $row= mysqli_fetch_assoc($result);
        $user_name=$row['name'];
       
        $email=$row['email'];
        $password=$row['password'];
		$confirm_password=$row['confirm_password'];
if(isset($_POST['submit']))
{    
               
                $user_name=$_POST['name'];
                
                $email=$_POST['email'];

                $password=$_POST['password'];
                $confirm_password=$row['confirm_password'];
    $query="update register set user_id=$user_id,name='$user_name',email='$email',password='$password',confirm_password='$confirm_password'where user_id=$user_id ";
    $result=mysqli_query($con,$query);
    if($result)
    {
         header('location:display.php');
    }else{
        die(mysqli_error($con));
    }
}
	

?>
<!DOCTYPE html>
<html>
<head>
	<title>update</title>
</head>
<body>

	<style type="text/css">
	
	body{
	
  background: url("about.jpg");
  background-size: cover;
  background-repeat: no-repeat;
  opacity: 0.7;
  margin-left: auto;
  margin-right: auto;
  max-width: 100%;
  height: auto;
}
a{
text-decoration: none;
	color: white;
}

a:link {
        color:lightslategray;
      }
      
  
      a:hover {
        color: black;
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
		background-color: lightslategray;
		border: none;
	}

	#box{

		background-color:lightseagreen;
		margin: auto;
		width: 250px;
		padding: 20px;
	}

	</style>
<br><br><br><br><br><br><br><br><br><br>
	<div id="box">
	
		<form method="post">
			<div style="font-size: 20px;margin: 10px;color: white;"><b><center>Signup</b> </center></div> <br>

			<input id="text" type="text" name="name" placeholder="Username" value=<?php echo $user_name;?>><br><br>
			
			<input id='text' type="email" name = "email" placeholder="Email id" value=<?php echo $email ;?>><br><br>

			<input id="text" type="password" name="password" placeholder="Password"value=<?php echo $password ;?>><br><br>
            <input id="text" type="password" name="confirm_password" placeholder="confirm_Password"value=<?php echo $confirm_password ;?>><br><br>
			<button type="submit" name="submit">update</button><br><br>
		</form>
	</div>
</body>
</html>