<?php
include('header.php');
include 'database.php';
$id=$_GET['id'];
// get one id
$select="SELECT * FROM transfer_certificate WHERE id='$id'";
$data=mysqli_query($con,$select);
$row=mysqli_fetch_array($data);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
            crossorigin="anonymous"></script>
    <link rel="stylesheet" href="style/form.css">
    <title>Transfer Certificate</title>
</head>
<body>

<table class='dashboard-div'>
    <thead>
      <tr>
        <th><h6><AiFillDashboard /> &nbsp; School-System / Edit-Transfer </h6></th>
      <th>  
        <button class='table-btn float-end' variant="light" >
      <RiArrowGoBackFill />&nbsp;<a class="link-btn"
       href="transferList.php">Go Back</a>
      </button>
    </th>
      </tr>
    </thead>
   </table>

<!-- <h1 class="transfer">TRANSFER CERTIFICATE</h1> -->
<div class="container mt-5">
    <form class="row g-3 mt-5 form-div" method="POST">
    
      <div class="col-md-4">
        <label class="form-label">Registration</label>
        <input type="text" name="registration" value="<?php echo $row['registration'];?>" class="form-control">
      </div>
      <div class="col-md-4">
        <label for="inputPassword4" class="form-label">Name Of Pupil</label>
        <input type="text" name="name" value="<?php echo $row['name'];?>" class="form-control">
      </div>
      <div class="col-md-4">
        <label for="inputAddress" class="form-label">Mother Name</label>
        <input type="text" name="mother_name"  value="<?php echo $row['mother_name'];?>" class="form-control">
      </div>

      <div class="col-md-4">
        <label class="form-label"> Father Name</label>
        <input type="text" name="father_name" value="<?php echo $row['father_name'];?>" class="form-control">
      </div>
      <div class="col-md-4">
        <label for="inputPassword4" class="form-label">National</label>
        <input type="text" name="national" value="<?php echo $row['national'];?>" class="form-control">
      </div>
      <div class="col-md-4">
        <label for="inputAddress" class="form-label">Category</label>
        <input type="text" name="category" value="<?php echo $row['category'];?>" class="form-control">
      </div>


      <div class="col-md-4">
        <label class="form-label">Date of Birth </label>
        <input type="text" name="dob" value="<?php echo $row['dob'];?>" class="form-control">
      </div>

      <div class="col-md-4">
        <label for="inputPassword4" class="form-label">Whether the Student is failed</label>
        <select class="form-select" name="failed" value="<?php echo $row['failed'];?>">
          <option selected>Choose</option>
          <option value="1">YES</option>
          <option value="2">NO</option>

        </select>
      </div>
      <!-- <div class="col-md-4">
            <label for="inputPassword4" class="form-label">Whether the Student is failed</label>
            <input type="text" class="form-control" >
          </div> -->
      <div class="col-md-4">
        <label for="inputAddress" class="form-label">Subject Studied</label>
        <input type="text" name="sbj" value="<?php echo $row['sbj'];?>" class="form-control">
      </div>


      <div class="col-md-4">
        <label class="form-label"> Class </label>
        <input type="text" name="class_name" value="<?php echo $row['class_name'];?>" class="form-control">
      </div>
      <div class="col-md-4">
        <label for="inputPassword4" class="form-label">Board </label>
        <input type="text" name="board" value="<?php echo $row['board'];?>" class="form-control">
      </div>

      <div class="col-md-4">
        <label for="inputPassword4" class="form-label">Wheather qualified for promotion to the higher class</label>
        <select class="form-select" name="higher_class" value="<?php echo $row['higher_class'];?>">
          <option selected>Choose</option>
          <option value="1">YES</option>
          <option value="2">NO</option>

        </select>
      </div>

      <!-- <div class="col-md-4">
            <label for="inputAddress" class="form-label">Wheather qualified for promotion to the higher class</label>
            <input type="text" class="form-control" >
          </div> -->



      <div class="col-md-4">
        <label class="form-label">Fees paid </label>
        <select class="form-select" name="fees_paid"  value="<?php echo $row['fees_paid'];?>">
          <option selected>Choose</option>
          <option value="1">YES</option>
          <option value="2">NO</option>

        </select>
        <!-- <input type="text" class="form-control" > -->
      </div>
      <div class="col-md-4">
        <label for="inputPassword4" class="form-label">Fees concession </label>
        <select class="form-select" name="fees_concession" value="<?php echo $row['fees_concession'];?>">
          <option selected>Choose</option>
          <option value="1">YES</option>
          <option value="2">NO</option>

        </select>
        <!-- <input type="text" class="form-control" > -->
      </div>
      <div class="col-md-4">
        <label for="inputAddress" class="form-label">NCC Cadet/Boy Scout/Girl Guide </label>
        <select class="form-select" name="ncc" value="<?php echo $row['ncc'];?>">
          <option selected>Choose</option>
          <option value="1">YES</option>
          <option value="2">NO</option>

        </select>
        <!-- <input type="text" class="form-control" > -->
      </div>


      <div class="col-md-4">
        <label class="form-label">Transfer Date </label>
        <input type="text" name="roll"  value="<?php echo $row['roll'];?>" class="form-control">
      </div>
      <div class="col-md-4">
        <label for="inputPassword4" class="form-label"> Reasons for leaving the school </label>
        <input type="text" name="leaving_school" value="<?php echo $row['leaving_school'];?>" class="form-control">
      </div>
      <div class="col-md-4">
        <label for="inputAddress" class="form-label"> No. of Meeting up to date </label>
        <input type="text" name="meeting_date" value="<?php echo $row['meeting_date'];?>" class="form-control">
      </div>



      <div class="col-md-4">
        <label class="form-label">No. of working days Pupil Attended</label>
        <input type="text" name="pupil_attended"  value="<?php echo $row['pupil_attended'];?>" class="form-control">
      </div>
      <div class="col-md-4">
        <label for="inputPassword4" class="form-label">General Conduct</label>
        <input type="text" name="genral_conduct"  value="<?php echo $row['genral_conduct'];?>" class="form-control">
      </div>
      <div class="col-md-4">
        <label for="inputAddress" class="form-label">Any other remarks </label>
        <input type="text" name="remark"  value="<?php echo $row['remark'];?>" class="form-control">
      </div>


      <div class="col-md-4">
        <label class="form-label">Date of issue of certificate</label>
        <input type="text" name="certificate_date"  value="<?php echo $row['certificate_date'];?>" class="form-control">
      </div>
      <center>
        <button type="submit" name="update_btn" value="Update" class="submit-btn">Edit</button>
      </center>

    </form>
</div>

<?php
// Check if the form has been submitted
if(isset($_POST['update_btn'])){
    // Get form input values
    $registration=$_POST['registration'];
    $name=$_POST['name'];
    $mother_name=$_POST['mother_name'];
    $father_name=$_POST['father_name'];
    $national=$_POST['national'];
    $category=$_POST['category'];
    $dob=$_POST['dob'];
    $failed=$_POST['failed'];
    $sbj=$_POST['sbj'];
    $class_name=$_POST['class_name'];
    $board=$_POST['board'];
    $higher_class=$_POST['higher_class'];
    $fees_paid=$_POST['fees_paid'];
    $fees_concession=$_POST['fees_concession'];
    $ncc=$_POST['ncc'];
    $roll=$_POST['roll'];
    $leaving_school=$_POST['leaving_school'];
    $meeting_date=$_POST['meeting_date'];
    $pupil_attended=$_POST['pupil_attended'];
    $genral_conduct=$_POST['genral_conduct'];
    $remark=$_POST['remark'];
    $certificate_date=$_POST['certificate_date'];

    $update = "UPDATE transfer_certificate SET registration='$registration', name='$name',
    mother_name='$mother_name', father_name='$father_name', national='$national', category='$category',
    dob='$dob', failed='$failed', sbj='$sbj', class_name='$class_name',board='$board',
    higher_class='$higher_class', fees_paid='$fees_paid', fees_concession='$fees_concession', ncc='$ncc',roll='$roll',
    leaving_school='$leaving_school', meeting_date='$meeting_date', pupil_attended='$pupil_attended', genral_conduct='$genral_conduct',remark='$remark',certificate_date='$certificate_date'
    WHERE id='$id'";

  $data=mysqli_query($con,$update);
  // create alert msg
  if($data){
      // echo "data save";
      ?>
      <script type="text/javascript">
          alert("Data Updated Successfully")
          window.open("http://localhost/schoolsystem/transferList.php", "_self")
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