<?php
include ('header.php');
include "database.php"; 
?>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
    crossorigin="anonymous"></script>
<link rel="stylesheet" href="style.css">


<body>
<table class='dashboard-div'>
    <thead>
      <tr>
        <th><h6><AiFillDashboard /> &nbsp; School-System / Ragistration-List </h6></th>
      <th>  
        <button class='table-btn float-end' variant="light" >
      <RiArrowGoBackFill />&nbsp;<a class="link-btn"
       href="registration.php">Go Back</a>
      </button>
    </th>
      </tr>
    </thead>
   </table>
   
      <div class='form-div  table-responsive mt-5'>



<table class="table table-bordered border-dark ">
  <thead>
    <tr>
      <th class="text-center" scope="col">Admission_No</th>
      <th class="text-center" scope="col">First_Name</th>
      <th class="text-center" scope="col">Last_Name</th>
     <th class="text-center" scope="col">D.O.A</th> 
     <th class="text-center" scope="col">Class</th>
      <th class="text-center" scope="col">D.O.B</th>
      <th class="text-center" scope="col">Age</th> 
      <th class="text-center" scope="col" colspan="2">Action</th>
    </tr>
</thead>

<?php
    $query="SELECT * FROM registration_certificate";
    $data=mysqli_query($con,$query);
    $result=mysqli_num_rows($data);
    if($result){
        // echo "display";
        while ($row=mysqli_fetch_array($data)){
            ?>
            <tr>
                <td><?php echo $row['id'] ?></td>
                <td><?php echo $row['first_name'] ?></td>
                <td><?php echo $row['last_name'] ?></td>
                <td><?php echo $row['doa'] ?></td>
                <td><?php echo $row['class_no'] ?></td>
                <td><?php echo $row['dob'] ?></td>
                <td><?php echo $row['age'] ?></td>

        

            </tr>
            <?php
        }
    }
    else{
        ?>
        <tr>
            <td>No Record Found</td>
        </tr>
        <?php
    }
    ?>

</table>


      </div>

</body>