
<?php 
include('header.php');
include "database.php";
// display id 
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
        <th><h6><AiFillDashboard /> &nbsp; School-System / View-Character </h6></th>
      <th>  
        <button class='table-btn float-end' variant="light" >
      <RiArrowGoBackFill />&nbsp;<a class="link-btn"
       href="characterList.php">Go Back</a>
      </button>
    </th>
      </tr>
    </thead>
   </table>





<div class="container mt-3">
        <div class="row">
            <div class="col-md-3">
                <!-- <img class="logo" src="img/logo.jpg" alt="logo"> -->
            </div>
            <div class="col-md-6 scholl-details">
                <h2>DIAMOND PUBLIC SR.SEC. SCHOOL</h2>
                <p>Vill. Bhikanpur,Post- Chhajlet, Moradabad</p> 
                <p>9997854454 <span>Email ID: diamondpublicschoolmbd@gmail.com</span></p>
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
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="certificate">CHARACTER CERTIFICATE </div>
                <P class="details">
                    <span class="character-head-line">This is to certify that Mr / Km </span> 
                   <span class="fill-input"><b> <?php echo $row['name'] ?></b></span>
                    <!-- ............................................................... -->
                    S/o, D/o, Shri  <span class="fill-input"><b>  <?php echo $row['father_name'] ?></b></span>
                    <!-- ....................................  -->
                    has been a regular student in the school during the session: 
                    <span class="fill-input"><b><?php echo $row['Session'] ?></b></span>
                    <!-- ................................................... -->
                    under Roll No : <span class="fill-input"><b> <?php echo $row['roll_no'] ?></b></span>
                    <!-- .................................................... -->
                    and according to school record his/her date of birth is:
                    <span class="fill-input"><b> <?php echo $row['dob'] ?></b></span>
                     <!-- ........................................ -->
                    He/She Passed in the examination of class 
                    <span class="fill-input"><b> <?php echo $row['class_name'] ?></b></span>
                    <!-- ........................ -->
                </P><br/>
                      <p class="character-last-line">To the best of my Knowledge and belief, he/she bears a good moral character.
                        Wish him for a glorious future.
                      </p>

                      <button onclick="window.print();" class="noPrint float-end">
                        Print 
                        </button>

                      <br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>

           
            
            </div>

        </div>

    </div>
</body>
