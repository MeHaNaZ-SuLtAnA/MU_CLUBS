<?php

    include 'config.php';
?>


<!DOCTYPE html>
 
<html lang="">

<head>
<title>MU_CLUB | Pages | Registation Form </title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<link href="../layout/styles/layout.css" rel="stylesheet" type="text/css" media="all">
<link href="css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="./css/style.css">
  <link href="bootstrap-3.3.7-dist/css/bootstrap-theme.min.css" rel="stylesheet">
  <link href="bootstrap-3.3.7-dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="fontawesome-free-5.5.0-web/css/fontawesome.min.css" rel="stylesheet">
</head>
<body id="top">
 
 
<body class="bg-light">
  <div class="container">
    <div class="py-5 text-center">
      <h1>Metropolitan University Club Members </h1>
      <h3>Registration Form </h3>
    </div>
  </div>

   <form action="Registration Form.php" method="POST" class="f1">

    

      <fieldset>
   
  <div class="container">
    <div class="row">
      <div class="col-md-12">

 

          <div class="form-group">
            <label for="exampleInputEmail1">Name</label>
            <input type="text" class="form-control" id="firstName" required name="name">
          </div>

          <div class="form-group">
            <label for="exampleInputEmail1">Email address</label>
            <input type="email" class="form-control" id="exampleInputEmail1" placeholder="abc@gmail.com"
            name="email">
            <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
          </div>

          <div class="form-group">
            <label for="exampleInputPassword1">Address </label>
            <input type="text" class="form-control" id="address" required name="address">

          </div>
          <div class="row">
            <div class="col-md-5 mb-3">
              <label for="department">Department</label>
              <select style=" width: 100%; margin-bottom: 20%;" id="department" required name="department">
                <option value="">Choose...</option>
                <option> Computer Science & Engineering</option>
                <option> Software Engineering </option>
                <option> Business Administration</option>
                <option> Economics</option>
                <option>Electrical & Electronic Engineering</option>
                <option> English</option>
                <option>Journalism and Media Studies </option>
                <option> Law & Justice</option>
               
              </select>
              <div class="invalid-feedback">
                Please select a valid department.
              </div>
            </div>

            <div class="col-md-4 mb-3">
              <label for="id">ID no</label>
              <input type="text" class="form-control" id="id" required name="idNum">
              </div>
               
            <div class="col-md-3 mb-3">
              <label for="club">Club</label>
              <select style=" width: 105%; margin-bottom: 20%;" id="club" required name="club">
                <option value="">Choose...</option>
                <option>MU Sports Club</option>
                <option>MU Rover Scouts</option>
                <option>MU Karate Club</option>
                <option>MU Theater</option>
                <option>MU Debating Club</option>
                <option>MU Social Services Club</option>
                <option>MU Model United Nation</option>
                <option>MU Model United Nation</option>
                <option>MU Cultural Club</option>
                <option>MU Cultural Club</option>
                <option>MU Cycling Association</option>
                <option>MU Photographic Society</option>
              </select>
              <div class="invalid-feedback">
                Please select a valid club.
              </div>
            </div>
          </div>

          <hr class="mb-4">
          </fieldset>
    <button name="sub" type="submit">Submit</button>
  </form>
      </div>
    </div>
 
    <?php

if(isset($_POST['sub'])) {

     $name = $_POST['name'];
     $email = $_POST['email'];
     $addr = $_POST['address'];
    $dep = $_POST['department'];
    $roll = $_POST['idNum'];
    $club = $_POST['club'];
     
     $insertion = "insert into clubsTable(name, email, address, department, id_no, club) values('$name', '$email', '$addr', '$dep', '$roll', '$club')";

     $run = mysqli_query($con, $insertion);

        if($run) {

         echo"
         <script>
         alert('You are Successfully Registered');
         window.location.href='index.html';
         </script>
         ";
         } else {
          echo"
          <script>
          alert('Connection Failed');
     
          </script>
          ";
          }

}
?>


 
</body>
</html>