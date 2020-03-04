<?php

if($_SERVER['REQUEST_METHOD']=='POST'){
 //Getting values 
  $name = $_POST['name'];
  $cell = $_POST['cell'];
  $password = $_POST['password'];

 
 //importing db_connect.php script 
 require_once('db_connect.php');
  
 
 
 //Creating sql query
  $sql = "Insert into users (name,cell,password) values ('$name','$cell','$password')";
 
 
 
  $result =  mysqli_query($con,"SELECT cell FROM users where cell='$cell'");
  $num_rows =mysqli_num_rows($result);
  
  
if($num_rows>0)
	
{
echo  "exists";	
}
  
  else
  
  {
 if(mysqli_query($con,$sql))
 {
     echo "success";
     
 }
 else
 {
     echo "failure";
 }
 
 mysqli_close($con);
 }
 
}


?>