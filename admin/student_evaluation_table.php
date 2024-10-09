<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Student Table</title>
</head>
<body>
  
<?php
  include 'header_section.php';
?>

  <section>
    <div class="m-5">
      <a href="admin_dashboard.php" class="btn btn-primary">
        <i class="bi bi-arrow-return-left mx-3"></i>Return</a>
    </div>

    

    <div class="px-1 m-5">
      <h1>STUDENT EVALUATION STATUS</h1>
    </div>


    <button type="button" class="btn btn-primary float-end me-5 mb-3" data-bs-toggle="modal" data-bs-target="#exampleModal">
      <i class="bi bi-person-fill-add mx-1 fs-6"></i>ADD STUDENT
    </button>


  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="exampleModalLabel">ADD STUDENT</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <form method="POST" id="addStudentForm">
            <div class="mb-3">
              <label for="schoolId" class="form-label">School ID</label>
              <input type="text" class="form-control" id="schoolId" required>
            </div>
            <div class="mb-3">
              <label for="firstName" class="form-label">First Name</label>
              <input type="text" class="form-control" id="firstName" required>
            </div>
            <div class="mb-3">
              <label for="lastName" class="form-label">Last Name</label>
              <input type="text" class="form-control" id="lastName" required>
            </div>
            <div class="mb-3">
              <label for="email" class="form-label">Email</label>
              <input type="email" class="form-control" id="email" required>
            </div>
            <div class="mb-3">
              <label for="password" class="form-label">Password</label>
              <input type="password" class="form-control" id="password" required>
            </div>
            <div class="mb-3">
              <label for="confirmPassword" class="form-label">Confirm Password</label>
              <input type="password" class="form-control" id="confirmPassword" required>
            </div>
            <div class="mb-3">
              <label for="department" class="form-label">Department</label><br>
              <select id="department" class="form-control" required>
                <option value="">Choose a Department</option>
                <option value="Bachelor of Science In Information Technology">Bachelor of Science In Information Technology</option>
                <option value="Bachelor of Elementary Education">Bachelor of Elementary Education</option>
                <option value="Bachelor of Science in Hospitality Management">Bachelor of Science in Hospitality Management</option>
                <option value="Bachelor of Science in Tourism Management">Bachelor of Science in Tourism Management</option>
              </select>
            </div>
            <div class="mb-3">
              <label for="year" class="form-label">Year</label>
              <input type="text" class="form-control" id="year" required>
            </div>
            <div class="mb-3">
              <label for="section" class="form-label">Section</label>
              <input type="text" class="form-control" id="section" required>
            </div>
          </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary" form="addStudentForm">Save changes</button>
        </div>
      </div>
  </div>
</div>


    <div class="p-1 m-5">
    <table class="table table-light table-bordered text-center">
      <thead>
        <tr>
          <th scope="col">School ID</th>
          <th scope="col">Student Name</th>
          <th scope="col">Year & Section</th>
          <th scope="col">Status</th>
          <th scope="col">Operation</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>111456</td>
          <td>Juan Dela Cruz</td>
          <td>1st Year - Section 1</td>
          <td>Pending</td>
          <td>
            <button class="btn btn-sm btn-danger btnDanger">
                <span>Remove</span>
            </button>
            <button class="btn btn-sm btn-success btnHold">
                <span>Hold</span>
            </button>
          </td>
        </tr>
        <tr>
          <td>111467</td>
          <td>Nelson Nellas</td>
          <td>2nd Year - Section 2</td>
          <td>Approved</td>
          <td>
            <button class="btn btn-sm btn-danger btnDanger">
                <span>Remove</span>
            </button>
            <button class="btn btn-sm btn-success btnHold">
                <span>Hold</span>
            </button>
          </td>
  
        </tr>
        <tr>
          <td>111789</td>
          <td>Jean Henri Mendoza</td>
          <td>3rd Year - Section 3</td>
          <td>Approved</td>
          <td>
            <button class="btn btn-sm btn-danger btnDanger">
              <span>Remove</span>
            </button>
            <button class="btn btn-sm btn-success btnHold">
              <span>Hold</span>
            </button>
          </td>
        </tr>
      </tbody>
      </table>
    </div>
    
  </section>
</body>
</html>