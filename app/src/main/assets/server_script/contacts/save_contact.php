<?php

if($_SERVER['REQUEST_METHOD']=='POST'){
 //Getting values 

$get_usercell =  $_POST['user_cell'];
 $getname =  $_POST['name'];
 $getcell =  $_POST['cell'];
 $getemail =  $_POST['email'];
 
 
 //importing dbConnect.php script 
 require_once('db_connect.php');
 
  
  /// $sql="INSERT INTO contacts SET name ='$getname' , cell ='$getcell', email = '$getemail' WHERE id = '$getid' ";
   
   //Creating sql query
  $sql = "INSERT INTO contacts (name,cell,email,user_cell) values ('$getname','$getcell','$getemail','$get_usercell')";
 
 
  
     

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


?>