<!DOCTYPE html>
<html lang="en">


<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
    crossorigin="anonymous"></script>
  <link rel="stylesheet" href="style/all.css">
  <title>Document</title>
</head>


<body>
  <?php session_start();
  if (!isset($_SESSION['username'])) {
    header('location:login.php');
  }
  ?>

  <nav class="navbar navbar-expand-lg">
    <div class="container-fluid nav-back">
      <a class="navbar-brand nav-back" href="index.php">School System</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ms-auto mb-2 mb-lg-0">

          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="registration.php">Registration</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="transfer.php">Transfer</a>
          </li>
          <!-- <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="transferList.php">Transfer List</a>
        </li> -->
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="character.php">Character</a>
          </li>
          <!-- <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="characterList.php">Character List</a>
        </li> -->
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="resultForm.php">Result</a>
          </li>
          <!-- <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="result.php">Result List</a>
        </li> -->
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="signup.php">Signup</a>
          </li>
          <li>
            <a class="nav-link active" aria-current="page" href="logout.php">Logout</a>
          </li>

        </ul>
      </div>
    </div>
  </nav>