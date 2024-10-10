

<?php 
  include('../database/configuration.php'); 
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>ADMIN DASHBOARD</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
  
</head>

<body>

  <?php
    include'../header.php';
  ?>

  <section class="mt-5">
    <div class="offcanvas offcanvas-start" data-bs-scroll="true" data-bs-backdrop="false" tabindex="-1" id="offcanvasScrolling" aria-labelledby="offcanvasScrollingLabel">
      <div class="offcanvas-header">
        <h5 class="offcanvas-title" id="offcanvasScrollingLabel">ADMIN DASHBOARD</h5>
        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
      </div>
      <div class="offcanvas-body">
        <ul class="nav flex-column">
          <li class="nav-item">
            <a class="nav-link btn btn-sm btn-light text-start text-dark fs-5" aria-current="page" href="student_evaluation_table.php">
              <i class="bi bi-people-fill icon-student-dash"></i> Manage Students
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link btn btn-sm btn-light text-start text-dark fs-5" href="teacher_evaluation_table.php">
              <i class="bi bi-person-fill-gear icon-teacher-dash"></i> Manage Teachers
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link btn btn-sm btn-light text-start text-dark fs-5" href="create_forums_table.php">
              <i class="bi bi-journal-album icon-manage-dash"></i> Manage Forums
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link btn btn-sm btn-light text-start text-dark fs-5" href="#">
              <i class="bi bi-brightness-high-fill icon-dark-dash"></i> Dark Mode
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link btn btn-sm btn-light text-start text-dark fs-5" href="index.php">
              <i class="bi bi-door-closed-fill icon-logout-dash"></i> Logout
            </a>
          </li>
        </ul>
      </div>
    </div>

    <div class="container-lg">
      <h1>
        <div class="display-3">Cebu Eastern College</div>
      </h1>

      <div class="container-lg bg-light border p-5">
        <div class="fs-1">Welcome Administrator</div>
        <div class="fs-4">School Year: 2024 - 2025, 1st Semester</div>
        <span class="fs-4">Status: On - going</span>
      </div>

      <div class="row justify-content-center align-items-center g-3 mt-2">
        <div class="col col-md-5 col-lg-6">
          <div class="card">
            <div class="card-body text-white backg-card">
              <h5 class="card-title"><i class="bi bi-person-lines-fill mx-1"></i>TEACHER</h5>
              <p class="card-text fs-1"><i class="bi bi-circle-fill cir-cle-orange"></i>35</p>
            </div>
          </div>
        </div>
        <div class="col col-md-5 col-lg-6">
          <div class="card">
            <div class="card-body text-white backg-card">
              <h5 class="card-title"><i class="bi bi-people-fill mx-1"></i>STUDENT</h5>
              <p class="card-text fs-1"><i class="bi bi-circle-fill cir-cle-green"></i>450</p>
            </div>
          </div>
        </div>
        <div class="col col-md-5 col-lg-6">
          <div class="card">
            <div class="card-body text-white backg-card">
              <h5 class="card-title"><i class="bi bi-person-fill-gear mx-1"></i>ADMIN</h5>
              <p class="card-text fs-1"><i class="bi bi-circle-fill cir-cle-admin"></i>5</p>
            </div>
          </div>
        </div>
        <div class="col col-md-5 col-lg-6">
          <div class="card">
            <div class="card-body text-white backg-card">
              <h5 class="card-title"><i class="bi bi-book-half mx-1"></i>FEEDBACK</h5>
              <p class="card-text fs-1"><i class="bi bi-circle-fill cir-cle-cec"></i>250</p>
            </div>
          </div>
        </div>
      </div>

      <div class="row justify-content-center align-items-center gy-2 mt-2">
        <div class="col mt-4">
          <div class="card">
            <div class="card-body backg-card">
              <a href="create_forums_table.php" class="card-link fs-2 btn btn text-white">
                <i class="bi bi-file-plus-fill icon-forum"></i> ADD FORUM
              </a>
            </div>
          </div>
        </div>
        <div class="col mt-4">
          <div class="card">
            <div class="card-body backg-card">
              <a href="teacher_evaluation_table.php" class="card-link fs-2 btn btn text-white">
                <i class="bi bi-person-lines-fill icon-teacher"></i> VIEW TEACHERS
              </a>
            </div>
          </div>
        </div>
        <div class="col mt-4">
          <div class="card">
            <div class="card-body backg-card">
              <a href="student_evaluation_table.php" class="card-link fs-2 btn btn text-white">
                <i class="bi bi-people-fill icon-students"></i> VIEW STUDENTS
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</body>

</html>