<?php
include('header.php');
include 'database.php';
$id=$_GET['id'];
// get one id
$select="SELECT * FROM character_certificate WHERE id='$id'";
$data=mysqli_query($con,$select);
$row=mysqli_fetch_array($data);
?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
    crossorigin="anonymous"></script>
    <link rel="stylesheet" href="style/character.css">
    <title>Document</title>
</head>

<body>
<table class='dashboard-div'>
    <thead>
      <tr>
        <th><h6><AiFillDashboard /> &nbsp; School-System / Edit-Character-Certificate </h6></th>
      <th>  
        <button class='table-btn float-end' variant="light" >
      <RiArrowGoBackFill />&nbsp;<a class="link-btn"
       href="characterList.php">Go Back</a>
      </button>
    </th>
      </tr>
    </thead>
   </table>


    <div class="container mt-5" >
    <!-- <div class="certificate">EDIT CHARACTER CERTIFICATE </div> -->
   
  

    <form class="row g-3 mt-5 form-div" method="POST">
        <div class="col-md-4">
          <label  class="form-label">Name Of Pupil</label>
          <input type="text"  name="name" value="<?php echo $row['name'];?>" class="form-control" >
        </div>
        <div class="col-md-4">
          <label for="inputPassword4" class="form-label">Father Name</label>
          <input type="text"  name="father_name" value="<?php echo $row['father_name'];?>" class="form-control" >
        </div>
        <div class="col-md-4">
          <label for="inputAddress" class="form-label">Session</label>
          <input type="text" name="session" value="<?php echo $row['Session'];?>" class="form-control" >
        </div>
        <div class="col-md-4">
            <label for="inputAddress" class="form-label">Roll no</label>
            <input type="text" name="roll_no" value="<?php echo $row['roll_no'];?>" class="form-control" >
        </div>
        <div class="col-md-4">
            <label for="inputAddress" class="form-label">D.O.B</label>
            <input type="text" name="dob" value="<?php echo $row['dob'];?>" class="form-control" >
        </div>
        <div class="col-md-4">
            <label for="inputAddress" class="form-label">Class</label>
            <input type="text" name="class_name" 
            value="<?php echo $row['class_name'];?>" 
            class="form-control" >
        </div>

          <center>
          <button type="submit" name="update_btn" value="Update"  class="submit-btn mt-4 mb-4">Edit</button>
          </center>

        </form>
        </div>

        <?php
    if(isset($_POST['update_btn'])){
      $name=$_POST['name'];
      $father_name=$_POST['father_name'];
      $session=$_POST['session'];
      $roll_no=$_POST['roll_no'];
      $dob=$_POST['dob'];
      $class_name=$_POST['class_name'];

      $update = "UPDATE character_certificate SET name='$name', father_name='$father_name',
      session='$session', roll_no='$roll_no', dob='$dob', class_name='$class_name'
      WHERE id='$id'";

    $data=mysqli_query($con,$update);
    // create alert msg
    if($data){
        // echo "data save";
        ?>
        <script type="text/javascript">
            alert("Data Updated Successfully")
            window.open("http://localhost/schoolsystem/characterList.php", "_self")
            </script>
        <?php
    }
    else 
    {
        // echo "Please try again";
        ?>
        <script type="text/javascript">
            alert("Please try again")
            </script>
        <?php
    }
    }
    ?>


  
       </body>

