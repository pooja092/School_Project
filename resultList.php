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
    <link rel="stylesheet" href="style/list.css">
    <title>Document</title>
</head>

<body>
<table class='dashboard-div'>
        <thead>
          <tr>
            <th><h5><AiFillDashboard /> &nbsp; School-System / Result-List </h5></th>
          <th>  
            <button class='table-btn float-end' variant="light" >
          <RiArrowGoBackFill />&nbsp;<a class="link-btn"
           href="resultForm.php">Go Back</a>
          </button>
        </th>
          </tr>
        </thead>
      </table>

      <div class="form-div mt-5  table-responsive">

<table class="table table-bordered border-dark ">
 <thead>
   <tr>
     <th class="text-center" scope="col">id</th>
     <th class="text-center" scope="col">Name</th>
     <th class="text-center" scope="col">Father Name</th>
    <th class="text-center" scope="col">Session</th> 
    <th class="text-center" scope="col">Roll No</th>
     <th class="text-center" scope="col">D.O.B</th>
     <th class="text-center" scope="col">Class</th> 
     <th class="text-center" scope="col" colspan="2">Action</th>
   </tr>
</thead>


<tbody>
  <tr>
    <td>1</td>
    <td>1</td>
    <td>1</td>
    <td>1</td>
    <td>1</td>
    <td>1</td>
    <td>1</td>
    <td>1</td>

  </tr>
</tbody>

</table>
  </div>





   

</body>