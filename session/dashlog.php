<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>LOGIN</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <style>
        .ab {border: 1px solid; height:600px; width: 390px;
            margin-left:500px ;margin-top: 50px;}
        .ab img{margin-top: 20px;}
        .b {padding-left: 30px;}
        .b input {width: 300px;}
    </style>
 </head>
  <body>
    
    <div class="ab">
        <center><img src="https://t3.ftcdn.net/jpg/03/35/45/32/240_F_335453295_9pv2YZObv3b8veEpFW3gEqAu46OSdMYd.jpg" height="50px" width="50px"><br>
        <h3>LOG IN</h3></center><br>
        <div class="b">
       
        <form method="post"action="dashcon.php">
          <lable>Email</lable><br>
          <input type="email"  name="email" required><br><br>
          <lable>Password</lable><br>
          <input type="password" name="psw" required><br><br>
          
          <input type="submit" class="btn btn-success" name="submit" value="login"><br><br>
        </form>
        <a href="">Forget password?</a><br><br>
     </div>
      <hr>
      <center><a href="https://www.google.com/"><img src="https://cdn-icons-png.flaticon.com/128/720/720255.png" height="40px" width="40px"></a>
             <a hef="https://www.facebook.com/"> <img src="https://cdn-icons-png.flaticon.com/128/3955/3955011.png" height="40px" width="40px"><br><br></a>
              <p>Need an account <a href="sessionsignup.php">SIGN UP</a></center>
        
        </div>
        
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
  </body>
</html>

