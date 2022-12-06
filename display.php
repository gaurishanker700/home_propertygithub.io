<?php
include("connection.php");
	?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>house property</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins&family=Roboto:wght@700&display=swap" rel="stylesheet">  

    <!-- Icon Font Stylesheet -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">
    <link href="lib/flaticon/font/flaticon.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
</head>
<style>
    	body{
	
    background: url("c.jpg");
    background-size: cover;
    background-repeat: no-repeat;
    opacity: 0.7;
    margin-left: auto;
    margin-right: auto;
    max-width: 100%;
    height: auto;
  
  }
  .table{
    background-color:hsl(0, 0%, 100%);
    
  }
  th, td {
  padding: 8px;
  border-bottom: 3px solid #ddd;
  color: #145f76;
  font: italic bold 12px/30px Georgia, serif;
  font-size: medium;

}
tr{
    padding: 8px;
  border-bottom: 3px solid  #0d393b;
}

tr:hover {background-color: #becece;;}

.l{
    background-color: #0d393b; /* Green */
  border: 10% #0d393b;
  color: white;
  padding: 16px ;
  text-align: right;
  text-decoration: none;
  
  font-size: 16px;
  margin: 4px;
  transition-duration: 0.4s;
  cursor: pointer;
}

.l:hover {
  background-color: #0d393b;
  color: white;
}

  </style>
<body>

<div class="l">
    <button >
       <div> <a href="register.php"><b>Add user</b></a></div>
   
        <div><a href="logout.php"><b>logout</b></a></div>
    </button></div>
    <table class="table">
  <thead >
    <tr>
      <th scope="col">user_id</th>
      <th scope="col">name</th>
    
      <th scope="col">email</th>
      <th scope="col">password</th>
      <th scope="col">confirm_password</th>
    </tr>
  </thead>
  <tbody>
<?php
        //read from database
        $query = "select * from register ";
        $result = mysqli_query($con, $query);

     
            if($result)
            {
                while( $user_data = mysqli_fetch_assoc($result)){
                $user_id=$user_data['user_id'];
                $user_name=$user_data['name'];
                $email=$user_data['email'];
                $password=$user_data['password'];
                $confirm_password=$user_data['confirm_password'];
               echo ' <tr>
                <th scope="row">'.$user_id.'</th>
                <td>'.$user_name.'</td>
                <td>'.$email.'</td>
                <td>'.$password.'</td>
                <td>'.$confirm_password.'</td>
                <td>
<button style="background-color:lightseagreen";><a href="update.php?updateid='.$user_id.'"  style="color:black";>update</a></button>
<button  style="background-color:lightseagreen"  ><a href="delete.php?deleteid='.$user_id.'" style="color:black"; >delete</a></button>
 
    </td>
              </tr> ';
                }
                
                
                
        }
        
?>
<!-- <td>
<button><a href=" " >update</a></button>
<button><a href=" " ></a>delete</button>   
    </td> -->

  </tbody>
</table>


</body>
</html>