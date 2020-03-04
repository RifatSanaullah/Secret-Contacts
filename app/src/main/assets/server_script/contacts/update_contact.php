<?php

if($_SERVER['REQUEST_METHOD']=='POST'){
 //Getting values 



 $getid =  $_POST['id'];
 $getname =  $_POST['name'];
 $getcell =  $_POST['cell'];
 $getemail =  $_POST['email'];
 
 
 //importing dbConnect.php script 
 require_once('db_connect.php');
 
  
   $sql="UPDATE contacts SET name ='$getname' , cell ='$getcell', email = '$getemail' WHERE id = '$getid' ";
 
  
     

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