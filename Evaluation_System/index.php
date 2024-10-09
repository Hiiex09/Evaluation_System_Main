<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login</title>
  <style>
    section{
      padding: 100px 0;
    }


    .image-con{
      object-fit:cover;
    }

    input{
      height: 50px;
    }
    .btnSign{
      width: 100%;
      font: 20px 'Outfit';
      color:white;
      background-color:#1E2A5E;
      border:none;
      border-radius:5px;
    }
  </style>

</head>
<body>

<?php
  include 'header_section.php';
?>  

<section>
  <div class='container-lg boder'>
    <d iv class='row justify-content-center align-items-center'>
      <h1>
        <div class="display-5">Cebu Eastern College</div>
      </h1>
      <div class="col-sm-4 col-md-5 col-lg-5 m-5">
        <img src="Background-Image/Login Img.png" alt="Background-Image" class=" text-center d-none d-md-block image-con">
      </div>
      <div class="col-sm-4 col-md-5 col-lg-5 m-5">
      <form>
        <div class="mb-3">
          <label  class="form-label lead">School ID</label>
          <input type="text" class="form-control" aria-describedby="emailHelp">
        </div>
        <div class="mb-3">
          <label class="form-label lead">Password</label>
          <input type="password" class="form-control">
        </div>
       <input type="submit" value="Sign In" class="btnSign">
      </form>
      </div>
    </div>
  </div>
</section>
</body>
</html>