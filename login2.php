<?php
$host ="localhost";
$user="root";
$password="";
$db="cmd";
 
session_start();

$data=mysqli_connect($host,$user,$password,$db);
if ($data===false){
  die("failed to connect");
}




if($_SERVER["REQUEST_METHOD"]=="POST" ){	
  $username=$_POST["username"];
  $password=$_POST["password"];
  
   
  
  

 
  
  $result=mysqli_query($data,"SELECT  `username`, `password`, `usertype` FROM `distributor` WHERE `usertype` = 'user' AND `password`= '$password' AND `username`='$username' ");
   
  
$row=mysqli_fetch_array($result);

if(isset($_POST['username'])){
  if (empty($_POST['username']) || empty($_POST['password'])) {
    // echo '<script>alert("username and password field is empty")</script>';
    if(empty($_POST['username'])){
      echo '<script>alert("username field is empty")</script>';
    }
    if(empty($_POST['password'])){
      echo '<script>alert("password field is empty")</script>';
    }
  }
if(!empty($row['usertype'])){
   if($row['usertype'] == 'user'){ 
     $_SESSION["username"]=$username;
    header("location:welcome2.php") ;
   }
}
  
   else{
    echo '<script>alert("invalid username and password")</script>';
   }
}

  

   

}

  



?>








<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login page</title>
    <style>
      body{
        background-image:url(img/pexels-s-migaj-747964.jpg) ;
        border: #FF0000;
        background-repeat: no-repeat;
        background-size: cover;
      }
      h1{
        text-shadow: 0 0 3px #FF0000, 0 0 5px #0000FF
      }
      .container{
        /* border: 2px solid red; */
        height: 30vw;
        display: flex;
        align-items: center;
        justify-content: center;

      }
      label{
        
        color: #46f600;
  
      }
      .form-label{
        display: flex;
        justify-content: center;
        

        /* align-items: center; */
      }
      .form-control{
        width: 100%;
        padding: 12px 20px;
      margin: 8px 0;
      display: inline-block;
     border: 1px solid #ccc;
     border-radius: 4px;
     box-sizing: border-box;
      }
      .btn {
        width: 100%;
       background-color: #4CAF50;
       color: white;
       padding: 14px 20px;
       margin: 8px 0;
       border: none;
       border-radius: 4px;
       cursor: pointer;
      }
      .btn:hover{
        background-color:  #45a049;
      }
  
    </style>
</head>
<body>
   <center> <h1>Welcome to login</h1></center>
    <div class="container">
        <form action="#" method="post">
            <div class="mb-3">
            <!-- onsubmit="return validateform()" -->
              <label for="exampleInputusername" name="myform"   class="form-label">Username</label>
              <input type="username" class="form-control" name="username" id="exampleInputusername" placeholder="username" >
            
            </div>
            <div class="mb-3">
              <label for="exampleInputPassword1" class="form-label">Password</label>
              <input type="password" class="form-control" name="password" id="password" placeholder="password" value="<?php if(empty($_POST["password"])) { echo "password field is empty"; } ?>" >
            </div>
         
            <button type="submit" class="btn">Submit</button>
          </form>
    </div>
</body>
<!-- <script>  
function validateform(){  
var username=document.myform.username.value;  
var password=document.myform.password.value;  
  
if (username==null || username==""){  
  alert("email can't be blank");  
  return false;  
}else if(password==null || password==""){  
  alert("Password cant be blank.");  
  return false;  
  }  
}  
</script>   -->
</html>