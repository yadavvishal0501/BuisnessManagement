<?php
$host ="localhost";
$user="root";
$password="";
$db="cmd";
 
$data=mysqli_connect($host,$user,$password,$db);
if ($data===false){
  die("failed to connect");
}
?>






<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>welcome</title>
</head>
<style>
    body{
        margin: 0;
        padding: 0;
        background-image: url(img/pexels-quintin-gellar-313782.jpg);
        background-repeat: no-repeat;
        background-size: cover;
        
    }
    h1{
        text-shadow: 0 0 3px #FF0000, 0 0 5px #0000FF;
    }
    
    .button1{
        
        border: 1px  white;
        height:30em;
        display: flex;
        justify-items: center;
        align-items: center;
        padding-left: 30em;
        /* background-color: aqua; */
        

        
    
    }
    button{
         
         background-color: #4CAF50; /* Green */
         
        border: none;
       color: white;
        padding: 15px 32px;
        text-align: center;
        text-decoration: none;
        display: inline-block;
        font-size: 16px;
        border-radius: 15px;
        margin: 12px;
        
     }
     button:hover{
        
        box-shadow: 0 12px 16px 0 rgba(0,0,0,0.24), 0 17px 50px 0 rgba(0,0,0,0.19);
     }
  


</style>
<body>
    
    <center><h1>SHRADHA LIME DEPO</h1></center>

 <div class="button1" >
    <button onclick="document.location='login.php'">Admin login</button>


    <button onclick="document.location='login2.php'">distributor login</button>
    </div>
    <script></script>

 
</body>
</html>