<?php 

session_start();

	include("connection.php");
	
if(isset($_GET['deleteid']))
{
    $user_id=$_GET['deleteid'];
    $query="delete from register where user_id=$user_id";
    $result=mysqli_query($con,$query);
    if($result)
    {
         header('location:display.php');
    }else{
        die(mysqli_error($con));
    }
}

	
		
			
            
	

?>