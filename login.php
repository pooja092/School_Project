
<?php
include "database.php";
?>

<link rel="stylesheet" href="style/login.css">
<!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous"> -->
<body>

  <div class="login-page">
        <img class="login-logo" src="img/logo.jpg" alt="hhh">
        <h2 class="mt-3" >Login</h2>
        
        <form action="" method="POST">
        <div class="input-group">
            <input type="email" name="email" required="">
            <label for="">email</label>
        </div>
        <div class="input-group">
            <input type="password" name="password" required="" > 
            <label for="">Password</label>
        </div>
        <br></br>
        <button type="submit" name="login_btn" value="Login" class="login-btn mb-5">Login</button>
        <br></br> <br></br>   
        <p class="mt-5 pt-5">if you did't have an account please <a href="signup.php">  Signup </a></p>
        </form>
       

    </div>

    <?php
   if(isset($_POST['login_btn'])){
    $email=$_POST['email'];
    $password=$_POST['password'];
   
    $select="SELECT * FROM users WHERE email='$email'";
    $query=mysqli_query($con,$select);
    $row=mysqli_num_rows($query);
    $fetch=mysqli_fetch_array($query);
  
    if($row==1){
      
      $username=$fetch['username'];
      session_start();
      $_SESSION['username']=$username;
      header("location:index.php");

    }
    else{
      ?>
      <script type="text/javascript">
          alert("invalid email/password")
          // window.open("http://localhost/schoolsystem/login.php", "_self")
      </script>
      <?php
      // echo "<p style='color:red'>invalid email/password</p>";

    }
   }
    ?>

  </f



