<?php
session_start();
$username="root";
$password="";
$server="localhost";
$db="excellence";


$conn=mysqli_connect($server,$username,$password,$db); 

if(isset($_POST['submit'])){
        $username=$_POST['email'];
        $password=$_POST['psw'];

   
$query="SELECT * FROM  user_detail WHERE email = '$username' && psw = '$password'";
$result=mysqli_query($conn,$query);
$total=mysqli_num_rows($result);

 if($total==true)

 {
    while($row = mysqli_fetch_array($result)){
        $_SESSION['email']=$row['email'];
        $_SESSION['name']=$row['name'];
        $_SESSION['psw']=$row['psw'];
        $_SESSION['contact_no']=$row['contact_no'];
        $_SESSION['role']=$row['role'];
        
   
       if($row['email']='$username'){
        echo"<script type='text/javascript'>
    alert('Welcme Back You Are Successfuly Login Excellence Technology Dashboard !');
    location='dashboard.php';
    </script>";
       }else{
   
       }
        
         
    }
             }else{
              echo"no";
             }
      
   }
   ?>