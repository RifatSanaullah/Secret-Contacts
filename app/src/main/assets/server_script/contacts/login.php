<?php

if($_SERVER['REQUEST_METHOD']=='POST'){
 //Getting values 
 $usercell = $_POST['cell'];
 $password = $_POST['password'];

 //importing dbConnect.php script 
 require_once('db_connect.php');
 
 
 
 //Creating sql query

 $sql = "SELECT * FROM users WHERE cell='$usercell' AND password='$password'";
 

 
 

 //executing query
 $result = mysqli_query($con,$sql);

 
 
$count=mysql_num_rows($result);

 //fetching result
 $check = mysqli_fetch_array($result);
 
 //if we got some result 
 if(isset($check)){
 //displaying success 
 echo "success";
 }else{
 //displaying failure
 echo "failure";
 }
 
 mysqli_close($con);
 }

?>