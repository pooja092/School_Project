<?php
include "header.php";
include "database.php";

?>


<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
      integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>
<link rel="stylesheet" href="style.css">
<title>Document</title>
</head>


<body>

<table class='dashboard-div'>
    <thead>
      <tr>
        <th><h6><AiFillDashboard /> &nbsp; School-System / Ragistration </h6></th>
      <th>  
        <button class='table-btn float-end' variant="light" >
      <RiArrowGoBackFill />&nbsp;<a class="link-btn"
       href="registrationList.php">Go Back</a>
      </button>
    </th>
      </tr>
    </thead>
   </table>
  
   <div class="container-fluid">
      <div class='form-div'>

            <div class="container">
            <div class="row">
            <form class="row g-3" method="POST" >
           
      


          <div class="col-md-4 mt-3  position-relative">
            <label class="form-label">First name</label>
            <input type="text" name="first_name" class="form-control" />
           
          </div>


          <div class="col-md-4 mt-3  position-relative">
            <label class="form-label">Last name</label>
            <input type="text" name="last_name" class="form-control" />
          </div>


          <div class="col-md-4 mt-3  position-relative">
            <label class="form-label">Date of admission</label>
            <input type="text" name="doa" class="form-control" />

          </div>


          <div class="col-md-4 mt-3  position-relative">
            <label class="form-label">class</label>
            <input type="text" name="class_no" class="form-control" 
  
            />

          </div>


          <div class="col-md-4  mt-3  position-relative">
            <label class="form-label">DOB</label>
            <input type="text" name="dob" class="form-control"
          
             />

          </div>

          <div class="col-md-4 mt-3  position-relative">
            <label class="form-label">Age</label>
            <input type="text" name="age" class="form-control" 
   
             />

          </div>


          <div class="col-md-4 mt-3 position-relative">
            <label class="form-label">Gender</label>
            <select class="form-select" name="gender">
              <option >choose</option>
              <option   >Male </option>
              <option   >Female</option>
              <option   >Other</option>
            </select>
          </div>


          <div class="col-md-4 mt-3  position-relative">
            <label class="form-label">Board</label>
            <input type="text" name="board" class="form-control"  />
          </div>


          <div class="col-md-4 mt-3  position-relative">
            <label class="form-label">Sibling</label>
            <input type="text" name="sibling" class="form-control"  />
          </div>


          <div class="col-md-4 mt-3  position-relative">
            <label class="form-label">Aadhar no</label>
            <input type="text" name="aadhar_no" class="form-control" />
          </div>


          <div class="col-md-4 mt-3  position-relative">
            <label class="form-label">Contact no</label>
            <input type="text" name="contact_no" class="form-control" />
          </div>


          <div class="col-md-4 mt-3  position-relative">
            <label class="form-label">Category</label>
            <input type="text" name="category" class="form-control" />
          </div>

          <div class="col-md-4 mt-3  position-relative">
            <label class="form-label">Father name</label>
            <input type="text" name="father_name" class="form-control"/>
          </div>


          <div class="col-md-4 mt-3  position-relative">
            <label class="form-label">Mother name</label>
            <input type="text" name="mother_name" class="form-control"  />
          </div>


          <div class="col-md-4 mt-3  position-relative">
            <label class="form-label">Father's Occupation</label>
            <input type="text" name="father_occupation" class="form-control" />
          </div>


          <div class="col-md-4 mt-3  position-relative">
            <label class="form-label">Mother's Occupation</label>
            <input type="text" name="mother_occupation" class="form-control" />
          </div>


          <div class="col-md-4  mt-3 position-relative">
            <label class="form-label">Present address</label>
            <input type="text" name="present_address" class="form-control"/>
          </div>


          <div class="col-md-4 mt-3  position-relative">
            <label class="form-label">Permanent address</label>
            <input type="text" name="permanent_address" class="form-control"  />
          </div>


          <div class="col-md-4 mt-3 position-relative">
            <label class="form-label">City</label>
            <input type="text" name="city" class="form-control"/>
          </div>


          <div class="col-md-4  mt-3  position-relative">
            <label class="form-label">Religion</label>
            <input type="text" name="religion" class="form-control"   />
          </div>


            <br />
            <center>
            <button class="stu_btn"
             name="submit" value="submit"
             
              type="submit">
              Submit
            </button>
            </center>

          </form>
          </div>
      </div>
    



     <!-- create data -->
     <?php
     if (isset($_POST['submit'])) {
     
        $first_name = $_POST['first_name'];
        $last_name = $_POST['last_name'];
        $doa = $_POST['doa'];
        $class_no = $_POST['class_no'];
        $dob = $_POST['dob'];
        $age = $_POST['age'];
        $gender = $_POST['gender'];
        $board = $_POST['board'];
        $sibling = $_POST['sibling'];
        $aadhar_no = $_POST['aadhar_no'];
        $contact_no = $_POST['contact_no'];
        $category = $_POST['category'];
        $father_name = $_POST['father_name'];
        $mother_name = $_POST['mother_name'];
        $father_occupation = $_POST['father_occupation'];
        $mother_occupation = $_POST['mother_occupation'];
        $present_address = $_POST['present_address'];
        $permanent_address = $_POST['permanent_address'];
        $city = $_POST['city'];
        $religion = $_POST['religion'];
      
       $query = "INSERT INTO registration_certificate (first_name,last_name,doa,
      class_no,dob,age,gender,board,sibling,aadhar_no,contact_no,category,father_name,mother_name,
      father_occupation,mother_occupation,present_address,permanent_address,city,religion)
      VALUES('$first_name','$last_name','$doa','$class_no','$dob','$age','$gender',
      '$board','$sibling','$aadhar_no','$contact_no','$category','$father_name','$mother_name',
      '$father_occupation','$mother_occupation','$present_address', '$permanent_address',
      '$city','$religion',)";
      $data = mysqli_query($con, $query);
        // create alert msg
      if ($data) {
            // echo "data save";
            ?>
            <script type="text/javascript">
                alert("Data Saved Successfully")
                window.open("http://localhost/schoolsystem/registrationList.php", "_self")

            </script>
            <?php
      } else {
            // echo "Please try again";
            ?>
            <script type="text/javascript">
                alert("Please try again")
            </script>
            <?php
        }
    }
    ?>
    <!--end create data -->

      </body>