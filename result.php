<?php

include('header.php');
?>

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>
  <link rel="stylesheet" href="style/result.css">
  <title>Document</title>
  <style>
    table,
    th,
    td {
      border: 1px solid black;
      border-collapse: collapse;
    }
  </style>
</head>

<body>
<table class='dashboard-div'>
    <thead>
      <tr>
        <th><h6><AiFillDashboard /> &nbsp; School-System / View-Result </h6></th>
      <th>  
        <button class='table-btn float-end' variant="light" >
      <RiArrowGoBackFill />&nbsp;<a class="link-btn"
       href="registrationList.php">Go Back</a>
      </button>
    </th>
      </tr>
    </thead>
   </table>




<?php
// $session = isset($_POST['session']) ?  $_POST['session'] :null;
// $class = isset($_POST['class']) ?  $_POST['class'] :null;
// $name = isset($_POST['name']) ?  $_POST['name'] :null;
// $section = isset($_POST['section']) ?  $_POST['section'] :null;
// $dob = isset($_POST['dob']) ?  $_POST['dob'] :null;
// $mother_name = isset($_POST['mother_name']) ?  $_POST['mother_name'] :null;
// $father_name = isset($_POST['father_name']) ?  $_POST['father_name'] :null;
// $address = isset($_POST['address']) ?  $_POST['address'] :null;
// $roll_no = isset($_POST['roll_no']) ?  $_POST['roll_no'] :null;
// $sr_no = isset($_POST['sr_no']) ?  $_POST['sr_no'] :null;

$subj_code = isset($_POST['subj_code']) ?  $_POST['subj_code'] :null;
$subj_details = isset($_POST['subj_details']) ?  $_POST['subj_details'] :null;
$first_theory = isset($_POST['first_theory']) ?  $_POST['first_theory'] :null;
$first_practical = isset($_POST['first_practical']) ?  $_POST['first_practical'] :null;
$out_terms_one = isset($_POST['out_terms_one']) ?  $_POST['out_terms_one'] :null;
$secound_theory = isset($_POST['secound_theory']) ?  $_POST['secound_theory'] :null;
$secound_practical = isset($_POST['secound_practical']) ?  $_POST['secound_practical'] :null;
$out_terms_secound = isset($_POST['out_terms_secound']) ?  $_POST['out_terms_secound'] :null;
$out_twohundred = isset($_POST['out_twohundred']) ?  $_POST['out_twohundred'] :null;
$total_hundred = isset($_POST['total_hundred']) ?  $_POST['total_hundred'] :null;
$total = isset($_POST['total']) ?  $_POST['total'] :null;


$total = isset($_POST['total']) ?  $_POST['total'] :null;
$percentage = isset($_POST['percentage']) ?  $_POST['percentage'] :null;
$total_grade = isset($_POST['total_grade']) ?  $_POST['total_grade'] :null;

$health = isset($_POST['health']) ?  $_POST['health'] :null;
$education = isset($_POST['education']) ?  $_POST['education'] :null;
$games = isset($_POST['games']) ?  $_POST['games'] :null;
$attendance = isset($_POST['attendance']) ?  $_POST['attendance'] :null;


?>

<div class="main-div">
  <div class="container-fluid mt-3">
    <div class="row">
      <div class="col-md-3">
        <img class="logo" src="img/logo.jpg" alt="logo">
      </div>
      <div class="col-md-6 scholl-details">
        <p class="different-color">Affiliation No. 2131636</p>
        <h2> <b>DIAMOND PUBLIC SR.SEC. SCHOOL</b></h2>
        <p>(A CBSE Affiliation Senior Secondary Co-Educational English Medium
          School)</p>
        <h5>VILLAGE BHIKANPUR CHHAJLET - MORADABAD</h5>
        <p>Phone No. 0591-29 75 999 Website: www.diamondpublicschoolmbd.edu.in </p>
        <h5 class="different-color">REPORT CARD (SESSION : 2021-22)</h5>
        <P>issued by School as per directives of Central Board of Secondary
          Education, Delhi
        </P>
        <h4 class="different-color">class : <span><?php echo $class ?>  </span></h4>
      </div>
      <div class="col-md-3">
        <img class="right-logo" src="img/logo.jpg" alt="logo">
      </div>

    </div>

    <div class="row  student-profile">
      <div class="col-sm-4">
        <h4 class="mb-3 profile">Student Profile</h4>

        <h6 class="stu-profile">NAME : <span class="fill-profile"><b><?php echo $name ?>   </b></span></h6>
        <h6 class="stu-profile">CLASS & SECTION : <span class="fill-profile"><b><?php echo $section ?>  </b></span> </h6>
        <h6 class="stu-profile">D.O.BIRTH : <span class="fill-profile"><b><?php echo $dob ?>  </b></span></h6>
        <h6 class="stu-profile">FATHER NAME : <span class="fill-profile"><b><?php echo $father_name ?> </b></span></h6>
        <h6 class="stu-profile">MOTHER'S NAME : <span class="fill-profile"><b><?php echo $mother_name ?>  </b></span></h6>
        <h6 class="stu-profile">RESIDENTIAL </br> ADDRESS : <span class="fill-profile"><b><?php echo $address ?>  </b></span></h6>



      </div>

      <div class="col-sm-4">
        <h6 class="roll">ROLL NO. <span class="fill-profile"><b><?php echo $roll_no ?> </b></span> </h6>
        <h6 class="roll">SR. NO. <span class="fill-profile"><b><?php echo $sr_no ?> </b></span> </h6>
      </div>
  
      <div class="col-sm-4">
        <div class="profile-img">
          <img class="stu-img" src="img/child2.jpg" alt="">
        </div>
      </div>
    </div>


    <div class="table-responsive row table-row border-dark">
      <table class="table table-bordered border-dark">

        <tr>
          <th rowspan="2">Subject Code</th>
          <th rowspan="2">Subject Details</th>
          <th colspan='3'>TERM 1</th>
          <th colspan="3">TERM 2</th>
          <th colspan="3">OVER All</th>

        </tr>
        <tr>
          <th>Theory <br>80/70</th>
          <th>Practical/<br> I.A. 30/20</th>
          <th>Out Of <br> 100</th>
          <th>Theory <br>80/70</th>
          <th>Practical/<br> I.A. 30/20</th>
          <th>Out Of<br> 100</th>
          <th>(T1+T2)<br> Out Of<br> 200</th>
          <th>Total Out<br> of 100</th>
          <th>Grade</th>

       </tr>
       


       <tr>
          <td><?php echo $subj_code ?></td>
          <td><?php echo $subj_details ?></td>
          <td><?php echo $first_theory ?></td>
          <td><?php echo $first_practical ?></td>
          <td><?php echo $out_terms_one ?></td>
          <td><?php echo $secound_theory ?></td>
          <td><?php echo $secound_practical ?></td>
          <td><?php echo $out_terms_secound ?></td>
          <td><?php echo $out_twohundred ?></td>
          <td><?php echo $total_hundred ?></td>
          <td><?php echo $total ?></td>
        </tr> 

      
      </table>
  </div>

      <br></br>

      <div class="table-responsive row table-row border-dark">
      <table class="table table-bordered border-dark mt-3">
        <thead>
          <tr>
            <th scope="col">TOTAL</th>
            <th scope="col">PERCENTAGE</th>
            <th scope="col">GRADE</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td><?php echo $total ?>/500</td>
            <td><?php echo $percentage ?>%</td>
            <td><?php echo $total_grade ?></td>
          </tr>
        </tbody>
      </table>

      <table class="table table-bordered border-dark">
        <thead>
          <tr>
            <h5 class=" profile mt-3"> <b>Part 2 : Scholastic Activities(to be
                accessed on a five point scale)</b>

            </h5>
            <th>Activities</th>
            <th>GRADE</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>Health & Fitness</td>
            <td><?php echo $health ?></td>

          </tr>
          <tr>
            <td>Education</td>
            <td><?php echo $education ?></td>

          </tr>
          <tr>
            <td>Games & Fitness</td>
            <td><?php echo $games ?></td>

          </tr>

        </tbody>
      </table>


      <table class="table table-bordered border-dark">
        <thead>
          <tr>
            <h5 class=" profile mt-3"><b>Attendance</b></h5>
            <th>Attendance </th>
            <th><?php echo $attendance ?>/203 Days</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <th>Result</th>
            <th>PASS & PROMOTED TO CLASS 12th</th>

          </tr>
          <tr>
            <th>Remarks</th>
            <th>GOOD WORK/ KEEP IT UP</th>

          </tr>

        </tbody>
      </table>

      <div class="row">
        <div class="col-sm-6">
          <table class="table table-bordered border-dark">
            <thead>
              <tr>
                <h5 class="mt-5"><b>Scholastic Areas Grading</b> </h5>

              </tr>
            </thead>
            <thead>
              <tr>
                <th>Grade</th>
                <th>Marks Range</th>

              </tr>
            </thead>

            <tbody>
              <tr>
                <th>A1 </th>
                <th>91-100 </th>
              </tr>
              <tr>
                <th>A2 </th>
                <th>81-90 </th>
              </tr>
              <tr>
                <th>B1 </th>
                <th>71-80 </th>
              </tr>
              <tr>
                <th>B2 </th>
                <th>61-70 </th>
              </tr>
              <tr>
                <th>C1 </th>
                <th>51-60 </th>
              </tr>
              <tr>
                <th>C2 </th>
                <th>41-50 </th>
              </tr>
              <tr>
                <th>D </th>
                <th>33-40 </th>
              </tr>
              <tr>
                <th>E</th>
                <th>1-32 </th>
              </tr>

            </tbody>
          </table>
        </div>

        <div class="col-sm-6">
          <table class="table table-bordered border-dark">
            <thead>
              <tr>
                <h5 class="mt-5"><b>Co Scholastic Activities(Grading on Five Points Scale)</b></h5>
              </tr>
            </thead>
            <thead>
              <tr>
                <th>Grade</th>
                <th>Grade Points</th>

              </tr>
            </thead>

            <tbody>
              <tr>
                <th>A </th>
                <th>5</th>
              </tr>
              <tr>
                <th>B </th>
                <th>4</th>
              </tr>
              <tr>
                <th>C </th>
                <th>3 </th>
              </tr>
              <tr>
                <th>D </th>
                <th>2 </th>
              </tr>
              <tr>
                <th>E </th>
                <th>1 </th>
              </tr>

            </tbody>
          </table>
        </div>

        <div class="col-sm-4 mt-5 mb-3 pt-5">CLASS TEACHER</div>

        <div class="col-sm-4 mt-5 pt-5">EXAMINATION CONTROLLER</div>

        <div class="col-sm-4 mt-5 pt-5">PRINCIPAL</div>


      </div>
    </div>
  </div>

</div>

</body>