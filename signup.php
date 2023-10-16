<?php
include "database.php";

if (isset($_POST['signup_btn'])){
    $username=mysqli_real_escape_string($con,$_POST['username']);
    $email=mysqli_real_escape_string($con,$_POST['email']);
    $password=mysqli_real_escape_string($con,$_POST['password']);
    
    if(empty($username)){
        $error="username field is required";
    }   
    elseif(empty($email)){
        $error="email field is required";
    }
    elseif(empty($password)){
        $error="password field is required";
    }
    else{
        $check_email="SELECT * FROM users WHERE email='$email' && password='$password' ";
        $data=mysqli_query($con,$check_email);
        $result=mysqli_fetch_array($data);
        if($result >0 ){
            $error="Email already exist"; 
        }   
        else{
            $password=md5($password);
            $insert="INSERT INTO users(username,email,password)
            Values('$username','$email','$password')";
            $q=mysqli_query($con,$insert);
            if ($q){
                ?>
                <script type="text/javascript">
                    alert("Data Saved Successfully")
                    window.open("http://localhost/schoolsystem/login.php", "_self")
                </script>
                <?php
            }
        }
    }
}
?>


<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
    crossorigin="anonymous"></script>
    <link rel="stylesheet" href="style/login.css">
    <title>Document</title>
</head>


<body>
<div class="login-page">
        <img class="login-logo" src="img/logo.jpg" alt="hhh">
        <h2>Signup</h2>

        <form action="signup.php" method="post">
        <p style="color:red">
        <?php
        if(isset($error)){
            echo $error;
        }
        ?> 
        </p>

        <p style="color:blue">
        <?php
        if(isset($success)){
            echo $success;
        }
        ?> 
        </p>
        <div class="input-group">
            <input type="text" name="username" 
             value="<?php if(isset($error)) {echo $username;} ?>">
            <label for="">User-name</label>
        </div>
        <div class="input-group">
            <input type="email" name="email"  
            value="<?php if(isset($error)) {echo $email;} ?>">
            <label for="">email</label>
        </div>
        <div class="input-group">
            <input type="password" name="password"  
            value="<?php if(isset($error)) {echo $password;} ?>">
            <label for="">Password</label>
        </div>

        <button type="submit" name="signup_btn" value="signup" class="login-btn">Signup</button>
        </form>
    </div>
  </form>
  </div>
</body>     
