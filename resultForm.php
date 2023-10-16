<?php
include('header.php');
?>


<link rel="stylesheet" href="style/result.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"
    integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>


<script type="text/javascript">
    $(document).ready(function () {
        var html = '<tr><td><input type="text" name="sub_code" class="form-control" placeholder="Subject_code"/></td><td><input type="text" name="sub_details" class="form-control" placeholder="Subject details"/></td><td><input type="text" name="term1_theory" class="form-control" placeholder="theory"/></td><td><input type="text" name="term1_practical" class="form-control" placeholder="practical"/></td><td><input type="text" name="term1_out_100" class="form-control" placeholder="out of 100"/></td><td><input type="text" name="term2_theory" class="form-control" placeholder="theory"/></td><td><input type="text" name="term2_practical" class="form-control" placeholder="practical"/></td><td><input type="text" name="term2_out_100" class="form-control" placeholder="out of 100"/></td><td><input type="text" name="term3_out_200" class="form-control" placeholder="out of 200"/></td><td><input type="text" name="term3_out_100" class="form-control" placeholder="total out of 100"/></td><td><input type="text" name="term3_grade" class="form-control" placeholder="grade"/></td><td><input class="btn btn-danger" type="button" name="remove" id="remove" value="remove"></td> </tr>';
        var x = 1;
        $("#add").click(function () {
            $("#table_field").append(html);
            // alert('ok');
        });
        $("#table_field").on('click', '#remove', function () {
            $(this).closest('tr').remove();
            // alert('ok');
        });
    });
</script>

<?php
?>


<body>
<table class='dashboard-div'>
    <thead>
      <tr>
        <th><h6><AiFillDashboard /> &nbsp; School-System / Create-Result </h6></th>
      <th>  
        <button class='table-btn float-end' variant="light" >
      <RiArrowGoBackFill />&nbsp;<a class="link-btn"
       href="resultList.php">Go Back</a>
      </button>
    </th>
      </tr>
    </thead>
   </table>




    <div class="container-fluid ">
        <div class="certificate">RESULT</div>
        <form id="insert_form" class="row g-3 form-div" action="result.php" method="post">

            <div class="col-md-4">
                <label for="inputPassword4" class="form-label">Session</label>
                <input type="text" name="session" class="form-control">
            </div>
            <div class="col-md-4">
                <label for="inputPassword4" class="form-label">Class</label>
                <input type="text" name="class" class="form-control">
            </div>
            <div class="col-md-4">
                <label for="inputPassword4" class="form-label">Name Of Pupil</label>
                <input type="text" name="name" class="form-control">
            </div>
            <div class="col-md-4">
                <label for="inputPassword4" class="form-label">Class & Section</label>
                <input type="text" name="section" class="form-control">
            </div>
            <div class="col-md-4">
                <label for="inputPassword4" class="form-label">D.O.Birth</label>
                <input type="text" name="dob" class="form-control">
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
                <label for="inputPassword4" class="form-label">Residential Address</label>
                <input type="text" name="address" class="form-control">
            </div>
            <div class="col-md-4">
                <label for="inputAddress" class="form-label">Roll.No</label>
                <input type="text" name="roll_no" class="form-control">
            </div>


            <div class="col-md-4">
                <label class="form-label">SR.No</label>
                <input type="text" name="sr_no" class="form-control">
            </div>

            <!-- <form class="insert-form" id="insert_form" method="post" action=""> -->
            <div class="row table-row border-dark mt-5">

                <!-- <table class="table table-row table-responsive "> -->
                <table class="table table-bordered border-dark table-responsive" id="table_field">

                    <tr>
                        <th rowspan="2">Subject Code</th>
                        <th rowspan="2">Subject Details</th>
                        <th colspan='3' class="text-center">TERM 1</th>
                        <th colspan="3" class="text-center">TERM 2</th>
                        <th colspan="3" class="text-center">OVER All</th>

                    </tr>
                    <tr>
                        <th class="text-center">Theory <br>80/70</th>
                        <th class="text-center">Practical/<br> I.A. 30/20</th>
                        <th class="text-center">Out Of <br> 100</th>
                        <th class="text-center">Theory <br>80/70</th>
                        <th class="text-center">Practical/<br> I.A. 30/20</th>
                        <th class="text-center">Out Of<br> 100</th>
                        <th class="text-center">(T1+T2)<br> Out Of<br> 200</th>
                        <th class="text-center">Total Out<br> of 100</th>
                        <th class="text-center">Grade</th>
                    </tr>

                    <tr>
                        <td><input type="text" name="subj_code" class="form-control" placeholder='Subject code' /></td>
                        <td><input type="text" name="subj_details" class="form-control" placeholder='Subject details' />
                        </td>
                        <td><input type="text" name="first_theory" class="form-control" placeholder='theory' /></td>
                        <td><input type="text" name="first_practical" class="form-control" placeholder='practical' />
                        </td>
                        <td><input type="text" name="out_terms_one" class="form-control" placeholder='out of 100' />
                        </td>
                        <td><input type="text" name="secound_theory" class="form-control" placeholder='theory' /></td>
                        <td><input type="text" name="secound_practical" class="form-control" placeholder='practical' />
                        </td>
                        <td><input type="text" name="out_terms_secound" class="form-control" placeholder='out of 100' />
                        </td>
                        <td><input type="text" name="out_twohundred" class="form-control" placeholder='out of 200' />
                        </td>
                        <td><input type="text" name="total_hundred" class="form-control"
                                placeholder='total out of 100' /></td>
                        <td><input type="text" name="grade" class="form-control" placeholder='grade' /></td>
                        <td><input class="btn btn-dark" type="button" name="add" id="add" value="Add"></td>
                    </tr>

                </table>
                <br></br>


                <table class="table table-bordered border-dark">
                    <thead>
                        <tr>
                            <th scope="col">TOTAL</th>
                            <th scope="col">PERCENTAGE</th>
                            <th scope="col">GRADE</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><input type="text" name="total" class="form-control" placeholder='Total' /></td>
                            <td><input type="text" name="percentage" class="form-control" placeholder='Percentage' />
                            </td>
                            <td><input type="text" name="total_grade" class="form-control" placeholder='Grade' /></td>
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
                            <td><input type="text" name="health" class="form-control"
                                    placeholder='Health & Fitness Grade' /></td>

                        </tr>
                        <tr>
                            <td>Education</td>
                            <td><input type="text" name="education" class="form-control"
                                    placeholder='Education Grade' /></td>

                        </tr>
                        <tr>
                            <td>Health & Fitness</td>
                            <td><input type="text" name="games" class="form-control"
                                    placeholder='Health & Fitness Grade' /></td>

                        </tr>

                    </tbody>
                </table>


                <table class="table table-bordered border-dark">
                    <thead>
                        <tr>
                            <h5 class=" profile mt-3"><b>Attendance</b></h5>

                            <th>Attendance </th>
                            <th><input type="text" name="attendance" class="form-control" placeholder='Attendance ' />
                            </th>
                        </tr>
                    </thead>

                </table>
                <center>
                    <button type="submit" name="submit" value="submit" class="submit-btn mt-4 mb-4">Submit</button>
                </center>


            </div>


        </form>

    </div>


    <!-- create data -->
    <?php
    if (isset($_POST['submit'])) {
        $subj_code = $_POST['subj_code'];
        $subj_details = $_POST['subj_details'];
        $first_theory = $_POST['first_theory'];
        $first_practical = $_POST['first_practical'];
        $out_terms_one = $_POST['out_terms_one'];
        $secound_theory = $_POST['secound_theory'];
        $secound_practical = $_POST['secound_practical'];
        $out_terms_secound = $_POST['out_terms_secound'];
        $out_twohundred = $_POST['out_twohundred'];
        $total_hundred = $_POST['total_hundred'];
        $total = $_POST['total'];
        $percentage = $_POST['percentage'];
        $total_grade = $_POST['total_grade'];
        $health = $_POST['health'];
        $education = $_POST['education'];
        $games = $_POST['games'];
        $attendance = $_POST['attendance'];



        $query = "INSERT INTO result_certificate (subj_code,subj_details,first_theory,first_practical,
    first_practical,out_terms_one,secound_theory,secound_practical,out_terms_secound,out_twohundred,
    total_hundred,total,percentage,total_grade,health,education,games,attendance )
     VALUES('$subj_code','$subj_details','$first_theory','$first_practical','$out_terms_one','$secound_theory',
     '$secound_practical','$out_terms_secound','$out_twohundred','$total_hundred',
     '$total','$percentage','$total_grade','$health','$education','$games','$attendance' )";
        $data = mysqli_query($con, $query);
        // create alert msg
        if ($data) {
            // echo "data save";
            ?>
            <script type="text/javascript">
                alert("Data Saved Successfully")
                // window.open("http://localhost/schoolsystem/characterList.php", "_self")

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