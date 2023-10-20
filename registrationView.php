<?php
include('header.php');
include "database.php";
// display id
$id=$_GET['id'];
// get one id
$select="SELECT * FROM registration_certificate WHERE id='$id'";
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
                <div class="certificate mb-5">REGISTRATION </div>
            
            </div>

        </div>

    </div>
    <div class="container mt-5">

      <p class="float-end admission"><b>Admission No :<span class="fill-input"><?php echo $row['id'] ?> </span></b></p>

          <div class="row">
        
                <p class="registraion-input" >
                   <b>1. First Name of Student</b>
                     &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <span class="fill-input"><?php echo $row['first_name'] ?> </span>
                </p>
         
          
                <p class="registraion-input" >
                   <b>2. Last Name of Student</b>  
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <span class="fill-input"><?php echo $row['last_name'] ?> </span>
                </p>
       
            
                <p class="registraion-input" >
                  <b>3. Date of admission </b>  
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <span class="fill-input"><?php echo $row['doa'] ?>  </span>
                </p>
       
                <p class="registraion-input" >
                  <b> 4. Class of Student</b> 
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <span class="fill-input"><?php echo $row['class_no'] ?>  </span> 
                    </p>

                    <p class="registraion-input" >
                     <b>5. Dob of Student</b>
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <span class="fill-input"><?php echo $row['dob'] ?> </span>
                    </p>
                <p class="registraion-input" >
                 <b> 6. Age of Student</b>  
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <span class="fill-input"><?php echo $row['age'] ?> </span>
                </p>
                <p class="registraion-input" >
                   <b>7. Gender of Student</b> 
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <span class="fill-input"><?php echo $row['gender'] ?> </span> 
                </p>
              
                <p class="registraion-input" >
                  <b>8. Board of Student</b>  
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <span class="fill-input"><?php echo $row['board'] ?>  </span>
                </p>
                <p class="registraion-input" >
                  <b> 9. Sibling of Student</b> 
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <span class="fill-input"><?php echo $row['sibling'] ?> </span>
                </p>
                <p class="registraion-input" >
                  <b>10. Aadhar no of Student</b>  
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <span class="fill-input"><?php echo $row['aadhar_no'] ?> </span>
                </p>
                <p class="registraion-input" >
                 <b>11. Contact no of Student</b>   
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <span class="fill-input"><?php echo $row['contact_no'] ?> </span>
                </p>
                <p class="registraion-input" >
                 <b>  12. Category of Student</b> 
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <span class="fill-input"><?php echo $row['category'] ?> </span>
                </p>
                <p class="registraion-input" >
                  <b>13. Father Name of Student</b>  
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <span class="fill-input"><?php echo $row['father_name'] ?> </span>
                </p>
                <p class="registraion-input" >
                  <b>14. Mother Name of Student</b>  
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <span class="fill-input"><?php echo $row['mother_name'] ?> </span>
                </p>
                <p class="registraion-input" >
                <b> 15. Father's Occupation of Student</b>   
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <span class="fill-input"><?php echo $row['father_occupation'] ?> </span>
                </p>
                <p class="registraion-input" >
                <b>  16. Mother Occupation of Student</b>  
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <span class="fill-input"><?php echo $row['mother_occupation'] ?> </span>
                </p>
                <p class="registraion-input" >
                <b> 17. Present Address of Student</b>     
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <span class="fill-input"><?php echo $row['present_address'] ?> </span>
                </p>
                <p class="registraion-input" >
                 <b>18. Permanent address of Student </b>   
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <span class="fill-input"><?php echo $row['permanent_address'] ?> </span>
                </p>
                <p class="registraion-input" >
                <b> 19. City of Student </b>   
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <span class="fill-input"><?php echo $row['city'] ?></span>
                </p>
                <p class="registraion-input" >
                <b> 20. Religion of Student </b>  
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <span class="fill-input"><?php echo $row['religion'] ?> </span>
                </p>
               
                <br/>
               
                <br/><br/><br/><br/>
           
           </div>
           </div>
    </div>
</body>
 


