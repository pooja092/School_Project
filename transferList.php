<?php
include('header.php');
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
    <link rel="stylesheet" href="list.css">
    <title>Document</title>
</head>

<body>


<table class='dashboard-div'>
    <thead>
      <tr>
        <th><h6><AiFillDashboard /> &nbsp; School-System / Transfer-List </h6></th>
      <th>  
        <button class='table-btn float-end' variant="light" >
      <RiArrowGoBackFill />&nbsp;<a class="link-btn"
       href="transfer.php">Go Back</a>
      </button>
    </th>
      </tr>
    </thead>
   </table>



  <div class="form-div mt-5 table-responsive">

    <table class="table table-bordered border-dark">
        <thead>
            <tr>
                <th class="text-center" scope="col">id</th>
                <th class="text-center" scope="col">Registration</th>
                <th class="text-center" scope="col">Name Of Pupil</th>
                <th class="text-center" scope="col">Mother Name</th>
                <th class="text-center" scope="col">Father Name</th>
                <th class="text-center" scope="col">National</th>
                <th class="text-center" scope="col">Category</th>

                <th class="text-center" scope="col" colspan="2">Action</th>
            </tr>
        </thead>

        <?php
        $query = "SELECT * FROM transfer_certificate";
        $data = mysqli_query($con, $query);
        $result = mysqli_num_rows($data);
        if ($result) {
            // echo "display";
            while ($row = mysqli_fetch_array($data)) {
                ?>
                <tr>
                    <td>
                        <?php echo $row['id'] ?>
                    </td>
                    <td>
                        <?php echo $row['registration'] ?>
                    </td>
                    <td>
                        <?php echo $row['name'] ?>
                    </td>
                    <td>
                        <?php echo $row['mother_name'] ?>
                    </td>
                    <td>
                        <?php echo $row['father_name'] ?>
                    </td>
                    <td>
                        <?php echo $row['national'] ?>
                    </td>
                    <td>
                        <?php echo $row['category'] ?>
                    </td>

                    <td><a href="transferView.php?id=<?php echo $row['id']; ?>">
                    <button class="submit-btn">View</button></a></td>
                    <td><a href="transferEdit.php?id=<?php echo $row['id']; ?>">
                    <button class="submit-btn">Update</button></a></td>
                
                </tr>
                <?php
            }
        } else {
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