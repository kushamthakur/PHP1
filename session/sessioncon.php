<?php
session_start();
$username="root";
$password="";
$server="localhost";
$db="excellence";


$conn=mysqli_connect($server,$username,$password,$db); 

if(isset($_POST['login'])){
        $username=$_POST['email'];
        $password=$_POST['password'];

   
$query="SELECT * FROM  login WHERE email = '$username' && password = '$password'";
$result=mysqli_query($conn,$query);
$total=mysqli_num_rows($result);

 if($total==true)

 {
    while($row = mysqli_fetch_array($result)){
        $_SESSION['name']=$row['name'];
        $_SESSION['email']=$row['email']; 
        $_SESSION['password']=$row['psw'];
        $_SESSION['contact']=$row['contact_no'];
        $_SESSION['role']=$row['role'];
        $_SESSION['branch']=$row['brach'];
        
   
       if($row['email']='$username'){
        echo"<script type='text/javascript'>
    alert('Welcme Back You Are Successfuly Login Excellence Technology Dashboard !');
    location='welcome.php';
    </script>";
       }else{
   
       }
        
         
    }
             }else{
              echo"no";
             }
      
   }
   ?>