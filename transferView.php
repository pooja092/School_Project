<?php
include('header.php');
include "database.php";
// display id
$id=$_GET['id'];
// get one id
$select="SELECT * FROM transfer_certificate WHERE id='$id'";
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
        <link rel="stylesheet" href="style/list.css">
    <title>Document</title>
</head>

<body>
<!-- <table class='dashboard-div'>
    <thead>
      <tr>
        <th><h6><AiFillDashboard /> &nbsp; School-System / View-Transfer </h6></th>
      <th>  
        <button class='table-btn float-end' variant="light" >
      <RiArrowGoBackFill />&nbsp;<a class="link-btn"
       href="registrationList.php">Go Back</a>
      </button>
    </th>
      </tr>
    </thead>
   </table> -->


 
    <div class="container mt-3">
        <div class="row">
            <div class="col-md-3">
                <img class="logo" src="img/logo.jpg" alt="logo">
            </div>
            <div class="col-md-6 scholl-details">
                <h2>DIAMOND PUBLIC SR.SEC. SCHOOL</h2>
                <p>Vill. Bhikanpur,Post- Chhajlet, Moradabad</p> 
                <p>9997854454 <span>Email ID: Diamondpublicschoolmbd@gmail.com</span></p>
            </div>

        </div>

    </div>

    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div>School No : 2131636 </div>
            </div>
            <div class="col-md-6">
                <div class="float-end school-code">School Code : 81774 </div>
            </div>
        </div>
        <hr class="underline">
    </div>

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="certificate">TRANSFER CERTIFICATE </div>
            
            </div>

        </div>

    </div>
    <div class="container-xxl">

      <p class="float-end admission"><b>Admission No :<span>1426</span></b></p>

            <div class="col-md mt-5">
                <p>
                   <b>1. Registration No of the candidate(in case Class-IX to XII)</b>
                     &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <span class="fill-input">  <?php echo $row['registration'] ?> </span>
                </p>

                <p>
                   <b>2. Name Of Pupil</b>  
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <span class="fill-input"><?php echo $row['name'] ?> </span>
                </p>
                <p>
                  <b>3. Mother Name  </b>  
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <span class="fill-input"><?php echo $row['mother_name'] ?>  </span>
                </p>
                <p>
                  <b> 4. Father Name </b> 
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <span class="fill-input"><?php echo $row['father_name'] ?>  </span> 
                    </p>
                    <p>
                     <b>5. Nationality</b>
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <span class="fill-input"><?php echo $row['national'] ?> </span>
                    </p>
                <p>
                 <b> 6. Whether the pupil belongs to SC/ST/OBC/GEN Category</b>  
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <span class="fill-input"><?php echo $row['category'] ?> </span>
                </p>
                <p>
                   <b>7. Date of Birth according to Admission Register </b> 
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <span class="fill-input"><?php echo $row['dob'] ?> </span> 
                </p>
              
                <p>
                  <b>8. Whether the Student is failed </b>  
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <span class="fill-input"><?php echo $row['failed'] ?>  </span>
                </p>
                <p>
                  <b> 9. Subject Studied</b> 
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <span class="fill-input"><?php echo $row['sbj'] ?> </span>
                </p>
                <p>
                  <b>10. Class in which pupil last Studied</b>  
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <span class="fill-input"><?php echo $row['class_name'] ?> </span>
                </p>
                <p>
                 <b>11. School/Board Annual Examination last Taken with result </b>   
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <span class="fill-input"><?php echo $row['board'] ?> </span>
                </p>
                <p>
                 <b>  12. Wheather qualified for promotion to the higher class</b> 
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <span class="fill-input"><?php echo $row['higher_class'] ?> </span>
                </p>
                <p>
                  <b>13. Wheather the pupil has paid all dues to the school </b>  
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <span class="fill-input"><?php echo $row['fees_paid'] ?> </span>
                </p>
                <p>
                  <b>14. Wheather the pupil was in receipt of any fee concession, if so , the nature of such concession</b>  
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <span class="fill-input"><?php echo $row['fees_concession'] ?> </span>
                </p>
                <p>
                <b> 15. Wheather NCC Cadet/Boy Scout/Girl Guide (Give Detail)</b>   
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <span class="fill-input"><?php echo $row['ncc'] ?> </span>
                </p>
                <p>
                <b>  16. Date On which pupil name was struck off the roll of the school</b>  
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <span class="fill-input"><?php echo $row['roll'] ?> </span>
                </p>
                <p>
                <b> 17. Reasons for leaving the school</b>     
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <span class="fill-input"><?php echo $row['leaving_school'] ?> </span>
                </p>
                <p>
                 <b>18. No. of Meeting up to date </b>   
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <span class="fill-input"><?php echo $row['meeting_date'] ?> </span>
                </p>
                <p>
                <b> 19. No. of working days Pupil Attended </b>   
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <span class="fill-input"><?php echo $row['pupil_attended'] ?></span>
                </p>
                <p>
                <b> 20. General Conduct </b>  
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <span class="fill-input"><?php echo $row['genral_conduct'] ?> </span>
                </p>
                <p>
                <b>21. Any other remarks</b>     
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <span class="fill-input"><?php echo $row['remark'] ?></span>
                </p>
                <p>
                <b>22. Date of issue of certificate</b>    
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <span class="fill-input"><?php echo $row['certificate_date'] ?> </span>
                </p>
                <br/>
                <button onclick="window.print();" class="noPrint float-end">
                    Print 
                    </button>
                <br/><br/><br/><br/>
           
           </div>
    </div>
</body>
 


