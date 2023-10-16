<?php
// Include the database connection file
include "header.php"; 
// include "database.php";
// session_start();
?>
<link rel="stylesheet" type="text/css" href="style/form.css">


<body>
<table class='dashboard-div'>
    <thead>
      <tr>
        <th><h6><AiFillDashboard /> &nbsp; School-System / Create-Transfer </h6></th>
      <th>  
        <button class='table-btn float-end' variant="light" >
      <RiArrowGoBackFill />&nbsp;<a class="link-btn"
       href="transferList.php">Go Back</a>
      </button>
    </th>
      </tr>
    </thead>
   </table>

<!-- <h1 class="certificate">TRANSFER CERTIFICATE</h1> -->
<div class="container mt-5">
  <!-- <button><a class="" href="transferList.php">View Transfer-List</a></button> -->
    <form class="row g-3 mt-5 form-div" method="POST">
    
      <div class="col-md-4">
        <label class="form-label">Registration</label>
        <input type="text" name="registration" class="form-control">
      </div>
      <div class="col-md-4">
        <label for="inputPassword4" class="form-label">Name Of Pupil</label>
        <input type="text" name="name" class="form-control">
      </div>
      <div class="col-md-4">
        <label for="inputAddress" class="form-label">Mother Name</label>
        <input type="text" name="mother_name" class="form-control">
      </div>

      <div class="col-md-4">
        <label class="form-label"> Father Name</label>
        <input type="text" name="father_name" class="form-control">
      </div>
      <div class="col-md-4">
        <label for="inputPassword4" class="form-label">National</label>
        <input type="text" name="national" class="form-control">
      </div>
      <div class="col-md-4">
        <label for="inputAddress" class="form-label">Category</label>
        <input type="text" name="category" class="form-control">
      </div>


      <div class="col-md-4">
        <label class="form-label">Date of Birth </label>
        <input type="text" name="dob" class="form-control">
      </div>

      <div class="col-md-4">
        <label for="inputPassword4" class="form-label">Whether the Student is failed</label>
        <select class="form-select" name="failed">
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
        <input type="text" name="sbj" class="form-control">
      </div>


      <div class="col-md-4">
        <label class="form-label"> Class </label>
        <input type="text" name="class_name" class="form-control">
      </div>
      <div class="col-md-4">
        <label for="inputPassword4" class="form-label">Board </label>
        <input type="text" name="board" class="form-control">
      </div>

      <div class="col-md-4">
        <label for="inputPassword4" class="form-label">Wheather qualified for promotion to the higher class</label>
        <select class="form-select" name="higher_class">
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
        <select class="form-select" name="fees_paid">
          <option selected>Choose</option>
          <option value="1">YES</option>
          <option value="2">NO</option>

        </select>
        <!-- <input type="text" class="form-control" > -->
      </div>
      <div class="col-md-4">
        <label for="inputPassword4" class="form-label">Fees concession </label>
        <select class="form-select" name="fees_concession">
          <option selected>Choose</option>
          <option value="1">YES</option>
          <option value="2">NO</option>

        </select>
        <!-- <input type="text" class="form-control" > -->
      </div>
      <div class="col-md-4">
        <label for="inputAddress" class="form-label">NCC Cadet/Boy Scout/Girl Guide </label>
        <select class="form-select" name="ncc">
          <option selected>Choose</option>
          <option value="1">YES</option>
          <option value="2">NO</option>

        </select>
        <!-- <input type="text" class="form-control" > -->
      </div>


      <div class="col-md-4">
        <label class="form-label">Transfer Date </label>
        <input type="text" name="roll" class="form-control">
      </div>
      <div class="col-md-4">
        <label for="inputPassword4" class="form-label"> Reasons for leaving the school </label>
        <input type="text" name="leaving_school" class="form-control">
      </div>
      <div class="col-md-4">
        <label for="inputAddress" class="form-label"> No. of Meeting up to date </label>
        <input type="text" name="meeting_date" class="form-control">
      </div>



      <div class="col-md-4">
        <label class="form-label">No. of working days Pupil Attended</label>
        <input type="text" name="pupil_attended" class="form-control">
      </div>
      <div class="col-md-4">
        <label for="inputPassword4" class="form-label">General Conduct</label>
        <input type="text" name="genral_conduct" class="form-control">
      </div>
      <div class="col-md-4">
        <label for="inputAddress" class="form-label">Any other remarks </label>
        <input type="text" name="remark" class="form-control">
      </div>


      <div class="col-md-4">
        <label class="form-label">Date of issue of certificate</label>
        <input type="text" name="certificate_date" class="form-control">
      </div>
      <center>
        <button type="submit" name="submit" value="submit" class="submit-btn mb-4">Submit</button>
      </center>

    </form>
</div>

<?php
// Check if the form has been submitted
if (isset($_POST['submit'])) {
    // Get form input values
    $registration = $_POST['registration'];
    $name = $_POST['name'];
    $mother_name = $_POST['mother_name'];
    $father_name = $_POST['father_name'];
    $national = $_POST['national'];
    $category = $_POST['category'];
    $dob = $_POST['dob'];
    $failed = $_POST['failed'];
    $sbj = $_POST['sbj'];
    $class_name = $_POST['class_name'];
    $board = $_POST['board'];
    $higher_class = $_POST['higher_class'];
    $fees_paid = $_POST['fees_paid'];
    $fees_concession = $_POST['fees_concession'];
    $ncc = $_POST['ncc'];
    $roll = $_POST['roll'];
    $leaving_school = $_POST['leaving_school'];
    $meeting_date = $_POST['meeting_date'];
    $pupil_attended = $_POST['pupil_attended'];
    $genral_conduct = $_POST['genral_conduct'];
    $remark = $_POST['remark'];
    $certificate_date = $_POST['certificate_date'];

    // SQL query to insert data into the database
    $query = "INSERT INTO transfer_certificate (registration, name, mother_name, father_name,
    national, category, dob, failed, sbj, class_name, board, higher_class, fees_paid,
    fees_concession, ncc, roll, leaving_school, meeting_date, pupil_attended,
    genral_conduct, remark, certificate_date) VALUES ('$registration', '$name',
    '$mother_name', '$father_name', '$national', '$category', '$dob', '$failed',
    '$sbj', '$class_name', '$board', '$higher_class', '$fees_paid', '$fees_concession', '$ncc',
    '$roll', '$leaving_school', '$meeting_date', '$pupil_attended', '$genral_conduct',
    '$remark', '$certificate_date')";

    // Execute the query and check for errors
    $data = mysqli_query($con, $query);

    if ($data) {
        // Data saved successfully, you can redirect to a success page here if needed
        ?>
        <script type="text/javascript">
            alert("Data Saved Successfully");
            window.open("http://localhost/schoolsystem/transferList.php","_self")
            // Redirect to a success page or do something else
        </script>
        <?php
    } else {
        // Error occurred during data insertion
        ?>
        <script type="text/javascript">
            alert("Error: <?php echo mysqli_error($con); ?>");
        </script>
        <?php
    }
}
?>

</body>

