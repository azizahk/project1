<?php include('koneksi.php'); ?>

<!DOCTYPE html>
<html>
<head>
	<title>Club | Pake database</title>
	<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</head>
<body>
<div class="container">
	<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="index.php">WebSiteName</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="index.php">Home</a></li>
      <li><a href="data_regis.php">Data Registrasi</a></li>
      <li><a href="#">Page 2</a></li>
    </ul>
    <ul class="nav navbar-nav navbar-right">
      <li><a href="#"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
      <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
    </ul>
  </div>
</nav>
</div>
<div class="container">
      <div class="container">
  <h2>Data Registrasi</h2>
  <table class="table table-bordered">
    <thead>
      <tr>
        <th>Nama</th>
        <th>Email</th>
        <th>No. HP</th>
        <th>Gender</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
      
      <?php

          $query = "SELECT * FROM registrasi";
          $hasil  = mysqli_query($con, $query)

      ?>
      <?php 
      while ($row = mysqli_fetch_array($hasil)){
       ?>
    

      <tr>
        <td><?php echo $row['nama']; ?></td>
        <td><?php echo $row['email']; ?></td>
        <td><?php echo $row['no_hp']; ?></td>
        <td><?php echo $row['gender']; ?></td>
        <td><a class= "btn btn-primary" href="delete.php?&id=<?php echo $row["id"];?>"; Update</a><a class="btn btn-danger" href="">Delete</a></td>
      </tr>
      <?php
      } 
      ?>
    </tbody>
  </table>
</div>
</body>
</html>