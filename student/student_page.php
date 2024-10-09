<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://fonts.googleapis.com/css?family=Epilogue:100,200,300,regular,500,600,700,800,900,100italic,200italic,300italic,italic,500italic,600italic,700italic,800italic,900italic" rel="stylesheet" />
  <link href="https://fonts.googleapis.com/css?family=Outfit:100,200,300,regular,500,600,700,800,900" rel="stylesheet" />
  <style>
    .sidebar{
      position: fixed;
      bottom: 0;
      left: 0; 
      top: 180px;
      z-index: 999;

      width: 300px;
      background-color: #1E2A5E;
      border-top-right-radius: 5px;
    }
    .school-name{
      margin-left: 30px;
    }
    .cec{
      font: bold 50px 'Epilogue';
    }
    .name-con{
      height: 90px;
      width: 280px;
      background-color: white;

      position: absolute;
      top:150px;
      right: -8px;

      border-radius: 5px;
      box-shadow: 5px 5px 10px rgba(0,0,0,0.15);
    }
    .student-name,
    .name{
      display: flex;
      justify-content:center;
      padding-top: 30px;
    }
    .juan{
      font: 25px 'Outfit';
    }
    .name{
      padding:0;
      font: 16px 'Outfit';
    }
    .main{
      padding-left: 50px;
    }
  </style>
</head>
<body>
  

<?php
  include 'header.php'
?>
<section>
  <div class="school-name">
    <h1 class="cec">Cebu Eastern College</h1>
  </div>

  <div class="sidebar">
    <div class="name-con">
      <div class="student-name">
        <span class="juan">Juan Dela Cruz</span>
      </div>
      <div class="name">Name</div>
    </div>
  </div>

  <div class="main">
    <h1>Welcome</h1>
  </div>
</section>



</body>
</html>