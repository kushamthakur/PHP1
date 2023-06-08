<?php
include("connection.php");

$id=$_GET['ID'];
$query="SELECT * FROM user_detail WHERE id='$id'";
$res=mysqli_query($conn,$query);
$total=mysqli_num_rows($res);
if($total==true){
    while($row=mysqli_fetch_array($res)){ 
?>

<html>
<head>
<title>UPDATE</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
<style>
body {font-family: Arial, Helvetica, sans-serif;}
* {box-sizing: border-box;}


input[type=text], input[type=password] {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  display: inline-block;
  border: none;
  background: #f1f1f1;
}
input[type=text]:focus, input[type=password]:focus {
  background-color: #ddd;
  outline: none;
}



.modal-content {
  background-color: #fefefe;
  margin: 5% auto 15% auto;
  border: 1px solid #888;
  width: 59%;
}


.a{border: 1px solid; height:100% 100%; width: 100%;background-color: aquamarine;
		padding-left: 20px;padding-top: 5px; padding-right:20px;
	}
</style>
</head>
<body>
    <form class="modal-content" method="post" action="">
     <div class="a">
      <h1>Update</h1>
      <p>Please fill in this form to create an account.</p>
      <hr>
      <label for="email"><b>NAME</b></label>
      <input type="text" placeholder="Enter Name" name="name" value="<?php echo$row['name']; ?>"><br><br>

      <label for="email"><b>Email</b></label>
    <input type="text" placeholder="Enter Email" name="email" value="<?php echo$row['email']; ?>"><br><br>

    <label for="contact_no"><b>Contact</b></label>
      <input type="text" placeholder="Enter Contact no." name="contact_no" value="<?php echo$row['contact_no']; ?>"><br><br>

      <label for="emp_id"><b>Emp-id</b></label>
      <input type="text" placeholder="Enter Emp-id" name="emp_id" value="<?php echo$row['emp_id']; ?>"><br><br>

        <div class="clearfix">
        
      <input type ="submit" class="btn btn-warning" name="submit" value="UPDATE ">
      </div>
</div>
</div>

</body>
</html

<?php  }
}

if($_GET['ACTION']=='UPDATE'){

    if(isset($_POST['submit'])){
        $name=$_POST['name'];
        $email=$_POST['email'];
        $contact=$_POST['contact_no'];
        $emp=$_POST['emp_id'];
        
    
        $query="UPDATE user_detail  SET name='$name', email='$email', contact_no='$contact', emp_id='$emp' WHERE id='$id'";
        $run=mysqli_query($conn,$query);
        if($run){
           header("location:dashboard.php");
        }else{
            echo"no";
        }
    
    }
    }

?>

