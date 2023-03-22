<?php

?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  </head>
<style>
    body {background-color: #F6EFC8}
</style>
  
<body>

  <div class='container border border-secondary mt-5' style="width:500px; border-radius:25px; background-color:white">

    <h2 class="text-center mt-5 mb-3 ">REGISTER</h2>
    <form method="post" action="http://localhost/codeigniter/public/process/login" class="mx-auto" style="max-width:320px"> 
        <div class='mb-3'>
            <label class="form-label">Name:</label>
            <input class="form-control" type="text" name="name" placeholder="Name"/>
        </div>
        <div class='mb-3'>
            <label class="form-label">Username:</label>
            <input class="form-control" type="text" name="username" placeholder="Username"/>
        </div>
        <div class='mb-3'>
            <label class="form-label">Password:</label>
            <input class="form-control" type="password" name="pass" placeholder="Password"/>
        </div>
        <div class='mb-3'>
            <label class="form-label">Confirm Password:</label>
            <input class="form-control" type="text" name="pass2" placeholder="Confirm Password"/>
        </div>
        <div class='mb-3 d-flex justify-content-center align-items-center '>
            <button class="btn btn-primary" type="submit">Sign Up</button>
        </div>
        <br>
           <a class= 'd-flex justify-content-center' href="<?= site_url('login') ?>">I already have an account</a>
        </br>
      </form>
    </div>
 
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  </body>
</html>
        