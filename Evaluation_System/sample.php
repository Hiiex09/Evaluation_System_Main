
<?php
  $arraySamp = ['Devon','Park','Von'];
  $arraySamp2 = array('Juan','Dela','Cruz');
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Sample</title>

  <style>
    .name{
      font:25px Arial; 
      color:rebeccapurple;
    }
  </style>
</head>
<body>
  <div class="name">
    <span>Arrays</span>
    <div> Name: 
     <?php 
      echo $arraySamp2[2];
     ?>
    </div>
  </div>
</body>
</html>