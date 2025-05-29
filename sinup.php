<?php

   $Name=$_POST["name"];
   $Email=$_POST["email"];
   $Password=$_POST["password"];
// $name="muskan";
// $email= "muskan@gmail.com";
// $password="123e4";
   $con=mysqli_connect("localhost","root","","test");
if($con==true)
{
//     echo"database sucessfully connected";
$sql= "INSERT into sign_up VALUES (?,?,?)";
$ps=$con->prepare($sql);
$ps->bind_param("sss",$Name,$Email,$Password);
$ps->execute();
echo" record secussfully!";


//   $sql=bind_param("sss",$name,$email,$password); 
//   $sql->execute(); 
  // echo"siqn up sucessfully!";
}
else{
    error("sorry not connected!");
}
?>