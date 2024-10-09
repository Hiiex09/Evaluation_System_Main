<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Teacher Table</title>
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
      <h1>TEACHER EVALUATION STATUS</h1>
    </div>

    
        <button type="button" class="btn btn-primary float-end mx-5 mb-3" data-bs-toggle="modal" data-bs-target="#exampleModal">
         <i class="bi bi-person-fill-add mx-1 fs-5"></i>ADD TEACHER
        </button>

   
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">ADD TEACHER</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">
              <form>
                <div class="mb-3">
                  <label class="form-label">School ID</label>
                  <input type="text" class="form-control" required>
                </div>
                <div class="mb-3">
                  <label class="form-label">First Name</label>
                  <input type="text" class="form-control" required>
                </div>
                <div class="mb-3">
                  <label class="form-label">Last Name</label>
                  <input type="text" class="form-control" required>
                </div>
                <div class="mb-3">
                  <label class="form-label">Email</label>
                  <input type="email" class="form-control" required>
                </div>
                <div class="mb-3">
                  <label class="form-label">Department</label>
                  <input type="text" class="form-control" required>
                </div>
                <div class="mb-3">
                  <label class="form-label">Subject</label>
                  <input type="text" class="form-control" required>
                </div>
                <div class="text-center">
                  <img src="Profiles User/Teacher 1.png" class="rounded profile-base" alt="">
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                  <input type="submit" value="save" class="btn btn-primary">
                </div>
              </form>
              </div>
              
            </div>
          </div>
        </div>

    <div class="p-1 m-5">
    <table class="table table-light table-bordered text-center">
      <thead>
        <tr>
          <th scope="col">Teacher ID</th>
          <th scope="col">Teacher Name</th>
          <th scope="col">Operation</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td class="p-2">111456</td>
          <td class="p-2">Boss Thanos</td>
          <td class="p-2">
            <button type="button" class="btn btn-primary w-25" data-bs-toggle="modal" data-bs-target="#viewRatingsTeacher6">
                View
            </button>
            <input type="submit" value="Remove" class="btn btn-danger w-25">  

            <div class="modal fade" id="viewRatingsTeacher4" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog modal-xl">
                <div class="modal-content">
                  <div class="modal-header">
                    <h1 class="modal-title fs-3" >Teacher Profile Status</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                  </div>
                  <div class="modal-body">
                    <div class="container-lg">
                      <div class="row justify-content-center align-items-center">
                        <div class="col-lg-5 col-md-6 col-sm-12">
                          <div class="text-center">
                            <img src="Profiles User\Teacher 4.png" class="img-thumbnail w-75" alt="Boss Thanos">
                            <h1>
                              <div class="m-2 fs-2">Boss Thanos</div>
                            </h1>
                            <div class="fs-6 fw">IT Department</div>
                          </div>  
                          <div class="mt-5">
                          <div class="text-start">
                            <h1>
                              <span class="ratings-num">3.5</span>
                              <i class="bi bi-star-fill star"></i>
                              <i class="bi bi-star-fill star"></i>
                              <i class="bi bi-star-fill star"></i>
                            </h1>
                          </div>
                            <div class="text-start">
                              <div class="mb-1 mt-4 fs-6">Teaching Quality</div> 
                              <div class="progress" role="progressbar" aria-label="Success example" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">
                                <div class="progress-bar bg-success" style="width: 25%"></div>
                              </div>
                              <div class="mb-1 mt-4 fs-6">Communication & Skills</div> 
                              <div class="progress" role="progressbar" aria-label="Info example" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">
                                <div class="progress-bar bg-info" style="width: 50%"></div>
                              </div>
                              <div class="mb-1 mt-4 fs-6">Classroom Management</div> 
                              <div class="progress" role="progressbar" aria-label="Warning example" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100">
                                <div class="progress-bar bg-warning" style="width: 75%"></div>
                              </div>
                              <div class="mb-1 mt-4 fs-6">Knowledge & Expertise</div> 
                              <div class="progress" role="progressbar" aria-label="Danger example" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100">
                                <div class="progress-bar bg-danger" style="width: 100%"></div>
                              </div>
                              <div class="mb-1 mt-4 fs-6">Student Engagement</div> 
                              <div class="progress" role="progressbar" aria-label="Danger example" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100">
                                <div class="progress-bar bg-danger" style="width: 100%"></div>
                              </div>
                            </div>
                          </div>
                          </div>
                       
                        <div class="col-lg-5 col-md-6 col-sm-12">
                          <div class="container-lg m-5">
                            <h1 class="px-1 bg-light">
                              <div class="fs-4">Feedback</div>
                            </h1>
                          </div>
                          <div class="container-lg m-5 p-5">
                          <div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel">
                            <div class="carousel-inner d-flex flex-col">
                              <div class="carousel-item active" data-bs-interval="2000">
                                <div class="card m-4">
                                  <div class="card-body">
                                    <h5 class="card-title fs-6">Abnonymous</h5>
                                    <p class="card-text fs-6">
                                    Four, repeat steps one through three
                                    Five, make you fall in love with me
                                    If ever I believe my work is done
                                    Then I'll start back at one
                                    </p>
                                  </div>
                                </div>
                                <div class="card m-4">
                                  <div class="card-body">
                                    <h5 class="card-title fs-6">Abnonymous</h5>
                                    <p class="card-text fs-6">
                                    Four, repeat steps one through three
                                    Five, make you fall in love with me
                                    If ever I believe my work is done
                                    Then I'll start back at one
                                    </p>
                                  </div>
                                </div>
                                <div class="card m-4">
                                  <div class="card-body">
                                    <h5 class="card-title fs-6">Abnonymous</h5>
                                    <p class="card-text fs-6">
                                    Four, repeat steps one through three
                                    Five, make you fall in love with me
                                    If ever I believe my work is done
                                    Then I'll start back at one
                                    </p>
                                  </div>
                                </div>
                              </div>
                              <div class="carousel-item" data-bs-interval="3000">
                              <div class="card m-4">
                                  <div class="card-body">
                                    <h5 class="card-title fs-6">User Comment</h5>
                                    <p class="card-text fs-6">
                                    Four, repeat steps one through three
                                    Five, make you fall in love with me
                                    If ever I believe my work is done
                                    Then I'll start back at one
                                    </p>
                                  </div>
                                </div>
                                <div class="card m-4">
                                  <div class="card-body">
                                    <h5 class="card-title fs-6">User Comment</h5>
                                    <p class="card-text fs-6">
                                    Four, repeat steps one through three
                                    Five, make you fall in love with me
                                    If ever I believe my work is done
                                    Then I'll start back at one
                                    </p>
                                  </div>
                                </div>
                                <div class="card m-4">
                                  <div class="card-body">
                                    <h5 class="card-title fs-6">User Comment</h5>
                                    <p class="card-text fs-6">
                                    Four, repeat steps one through three
                                    Five, make you fall in love with me
                                    If ever I believe my work is done
                                    Then I'll start back at one
                                    </p>
                                  </div>
                                </div>
                              </div>
                              <div class="carousel-item" data-bs-interval="4000">
                              <div class="card m-4">
                                  <div class="card-body">
                                    <h5 class="card-title fs-6">Bruce Wayne</h5>
                                    Four, repeat steps one through three
                                    Five, make you fall in love with me
                                    If ever I believe my work is done
                                    Then I'll start back at one
                                  </div>
                                </div>
                                <div class="card m-4">
                                  <div class="card-body">
                                    <h5 class="card-title fs-6">Bruce Wayne</h5>
                                    <p class="card-text fs-6">
                                    Four, repeat steps one through three
                                    Five, make you fall in love with me
                                    If ever I believe my work is done
                                    Then I'll start back at one
                                    </p>
                                  </div>
                                </div>
                                <div class="card m-4">
                                  <div class="card-body">
                                    <h5 class="card-title fs-6">Bruce Wayne</h5>
                                    <p class="card-text fs-6">
                                    Four, repeat steps one through three
                                    Five, make you fall in love with me
                                    If ever I believe my work is done
                                    Then I'll start back at one
                                    </p>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                          </div>
                         
                          </div>
                      </div>
                    </div>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>   
                    <input type="submit" value="Remove" class="btn btn-danger">   
                  </div>
                </div>
              </div>
            </div>

          </td>
        </tr>
        <tr>
          <td class="p-2">111467</td>
          <td class="p-2">Boss Oscar</td>
          <td class="p-2">

            <button type="button" class="btn btn-primary w-25" data-bs-toggle="modal" data-bs-target="#viewRatingsTeacher6">
              View
            </button>
            <input type="submit" value="Remove" class="btn btn-danger w-25">  

            <div class="modal fade" id="viewRatingsTeacher6" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog modal-xl">
                <div class="modal-content">
                  <div class="modal-header">
                    <h1 class="modal-title fs-3" >Teacher Profile Status</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                  </div>
                  <div class="modal-body">
                    <div class="container-lg">
                      <div class="row justify-content-center align-items-center">
                        <div class="col-lg-5 col-md-6 col-sm-12">
                          <div class="text-center">
                            <img src="Profiles User/Teacher 6.png" class="img-thumbnail w-75" alt="Boss Oscar">
                            <h1>
                              <div class="m-2 fs-2">Boss Oscar</div>
                            </h1>
                            <div class="fs-6 fw">IT Department</div>
                          </div>  
                          <div class="mt-5">
                          <div class="text-start">
                            <h1>
                              <span class="ratings-num">3.5</span>
                              <i class="bi bi-star-fill star"></i>
                              <i class="bi bi-star-fill star"></i>
                              <i class="bi bi-star-fill star"></i>
                            </h1>
                          </div>
                            <div class="text-start">
                              <div class="mb-1 mt-4 fs-6">Teaching Quality</div> 
                              <div class="progress" role="progressbar" aria-label="Success example" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">
                                <div class="progress-bar bg-success" style="width: 25%"></div>
                              </div>
                              <div class="mb-1 mt-4 fs-6">Communication & Skills</div> 
                              <div class="progress" role="progressbar" aria-label="Info example" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">
                                <div class="progress-bar bg-info" style="width: 50%"></div>
                              </div>
                              <div class="mb-1 mt-4 fs-6">Classroom Management</div> 
                              <div class="progress" role="progressbar" aria-label="Warning example" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100">
                                <div class="progress-bar bg-warning" style="width: 75%"></div>
                              </div>
                              <div class="mb-1 mt-4 fs-6">Knowledge & Expertise</div> 
                              <div class="progress" role="progressbar" aria-label="Danger example" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100">
                                <div class="progress-bar bg-danger" style="width: 100%"></div>
                              </div>
                              <div class="mb-1 mt-4 fs-6">Student Engagement</div> 
                              <div class="progress" role="progressbar" aria-label="Danger example" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100">
                                <div class="progress-bar bg-danger" style="width: 100%"></div>
                              </div>
                            </div>
                          </div>
                          </div>
                       
                        <div class="col-lg-5 col-md-6 col-sm-12">
                          <div class="container-lg m-5">
                            <h1 class="px-1 bg-light">
                              <div class="fs-4">Feedback</div>
                            </h1>
                          </div>
                          <div class="container-lg m-5 p-5">
                          <div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel">
                            <div class="carousel-inner d-flex flex-col">
                              <div class="carousel-item active" data-bs-interval="2000">
                                <div class="card m-4">
                                  <div class="card-body">
                                    <h5 class="card-title fs-6">Abnonymous</h5>
                                    <p class="card-text fs-6">
                                    Four, repeat steps one through three
                                    Five, make you fall in love with me
                                    If ever I believe my work is done
                                    Then I'll start back at one
                                    </p>
                                  </div>
                                </div>
                                <div class="card m-4">
                                  <div class="card-body">
                                    <h5 class="card-title fs-6">Abnonymous</h5>
                                    <p class="card-text fs-6">
                                    Four, repeat steps one through three
                                    Five, make you fall in love with me
                                    If ever I believe my work is done
                                    Then I'll start back at one
                                    </p>
                                  </div>
                                </div>
                                <div class="card m-4">
                                  <div class="card-body">
                                    <h5 class="card-title fs-6">Abnonymous</h5>
                                    <p class="card-text fs-6">
                                    Four, repeat steps one through three
                                    Five, make you fall in love with me
                                    If ever I believe my work is done
                                    Then I'll start back at one
                                    </p>
                                  </div>
                                </div>
                              </div>
                              <div class="carousel-item" data-bs-interval="3000">
                              <div class="card m-4">
                                  <div class="card-body">
                                    <h5 class="card-title fs-6">User Comment</h5>
                                    <p class="card-text fs-6">
                                    Four, repeat steps one through three
                                    Five, make you fall in love with me
                                    If ever I believe my work is done
                                    Then I'll start back at one
                                    </p>
                                  </div>
                                </div>
                                <div class="card m-4">
                                  <div class="card-body">
                                    <h5 class="card-title fs-6">User Comment</h5>
                                    <p class="card-text fs-6">
                                    Four, repeat steps one through three
                                    Five, make you fall in love with me
                                    If ever I believe my work is done
                                    Then I'll start back at one
                                    </p>
                                  </div>
                                </div>
                                <div class="card m-4">
                                  <div class="card-body">
                                    <h5 class="card-title fs-6">User Comment</h5>
                                    <p class="card-text fs-6">
                                    Four, repeat steps one through three
                                    Five, make you fall in love with me
                                    If ever I believe my work is done
                                    Then I'll start back at one
                                    </p>
                                  </div>
                                </div>
                              </div>
                              <div class="carousel-item" data-bs-interval="4000">
                              <div class="card m-4">
                                  <div class="card-body">
                                    <h5 class="card-title fs-6">Bruce Wayne</h5>
                                    Four, repeat steps one through three
                                    Five, make you fall in love with me
                                    If ever I believe my work is done
                                    Then I'll start back at one
                                  </div>
                                </div>
                                <div class="card m-4">
                                  <div class="card-body">
                                    <h5 class="card-title fs-6">Bruce Wayne</h5>
                                    <p class="card-text fs-6">
                                    Four, repeat steps one through three
                                    Five, make you fall in love with me
                                    If ever I believe my work is done
                                    Then I'll start back at one
                                    </p>
                                  </div>
                                </div>
                                <div class="card m-4">
                                  <div class="card-body">
                                    <h5 class="card-title fs-6">Bruce Wayne</h5>
                                    <p class="card-text fs-6">
                                    Four, repeat steps one through three
                                    Five, make you fall in love with me
                                    If ever I believe my work is done
                                    Then I'll start back at one
                                    </p>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                          </div>
                         
                          </div>
                      </div>
                    </div>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button> 
                  </div>
                </div>
              </div>
            </div>

          </td>
        </tr>
        <tr>
          <td class="p-2">111789</td>
          <td class="p-2">Boss Ampol</td>
          <td class="p-2">

            <button type="button" class="btn btn-primary w-25" data-bs-toggle="modal" data-bs-target="#viewRatingsTeacher6">
                View
            </button>
            <input type="submit" value="Remove" class="btn btn-danger w-25">  

            <div class="modal fade" id="viewRatingsTeacher5" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog modal-xl">
                <div class="modal-content">
                  <div class="modal-header">
                    <h1 class="modal-title fs-3" >Teacher Profile Status</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                  </div>
                  <div class="modal-body">
                    <div class="container-lg">
                      <div class="row justify-content-center align-items-center">
                        <div class="col-lg-5 col-md-6 col-sm-12">
                          <div class="text-center">
                            <img src="Profiles User\Teacher 5.png" class="img-thumbnail w-75" alt="Boss Ampol">
                            <h1>
                              <div class="m-2 fs-2">Boss Ampol</div>
                            </h1>
                            <div class="fs-6 fw">IT Department</div>
                          </div>  
                          <div class="mt-5">
                          <div class="text-start">
                            <h1>
                              <span class="ratings-num">3.5</span>
                              <i class="bi bi-star-fill star"></i>
                              <i class="bi bi-star-fill star"></i>
                              <i class="bi bi-star-fill star"></i>
                            </h1>
                          </div>
                            <div class="text-start">
                              <div class="mb-1 mt-4 fs-6">Teaching Quality</div> 
                              <div class="progress" role="progressbar" aria-label="Success example" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">
                                <div class="progress-bar bg-success" style="width: 25%"></div>
                              </div>
                              <div class="mb-1 mt-4 fs-6">Communication & Skills</div> 
                              <div class="progress" role="progressbar" aria-label="Info example" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">
                                <div class="progress-bar bg-info" style="width: 50%"></div>
                              </div>
                              <div class="mb-1 mt-4 fs-6">Classroom Management</div> 
                              <div class="progress" role="progressbar" aria-label="Warning example" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100">
                                <div class="progress-bar bg-warning" style="width: 75%"></div>
                              </div>
                              <div class="mb-1 mt-4 fs-6">Knowledge & Expertise</div> 
                              <div class="progress" role="progressbar" aria-label="Danger example" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100">
                                <div class="progress-bar bg-danger" style="width: 100%"></div>
                              </div>
                              <div class="mb-1 mt-4 fs-6">Student Engagement</div> 
                              <div class="progress" role="progressbar" aria-label="Danger example" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100">
                                <div class="progress-bar bg-danger" style="width: 100%"></div>
                              </div>
                            </div>
                          </div>
                          </div>
                       
                        <div class="col-lg-5 col-md-6 col-sm-12">
                          <div class="container-lg m-5">
                            <h1 class="px-1 bg-light">
                              <div class="fs-4 text-success">Feedback</div>
                            </h1>
                          </div>
                          <div class="container-lg m-5 p-5">
                          <div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel">
                            <div class="carousel-inner d-flex flex-col">
                              <div class="carousel-item active" data-bs-interval="2000">
                                <div class="card m-4">
                                  <div class="card-body">
                                    <h5 class="card-title fs-6">Abnonymous</h5>
                                    <p class="card-text fs-6">
                                    Four, repeat steps one through three
                                    Five, make you fall in love with me
                                    If ever I believe my work is done
                                    Then I'll start back at one
                                    </p>
                                  </div>
                                </div>
                                <div class="card m-4">
                                  <div class="card-body">
                                    <h5 class="card-title fs-6">Abnonymous</h5>
                                    <p class="card-text fs-6">
                                    Four, repeat steps one through three
                                    Five, make you fall in love with me
                                    If ever I believe my work is done
                                    Then I'll start back at one
                                    </p>
                                  </div>
                                </div>
                                <div class="card m-4">
                                  <div class="card-body">
                                    <h5 class="card-title fs-6">Abnonymous</h5>
                                    <p class="card-text fs-6">
                                    Four, repeat steps one through three
                                    Five, make you fall in love with me
                                    If ever I believe my work is done
                                    Then I'll start back at one
                                    </p>
                                  </div>
                                </div>
                              </div>
                              <div class="carousel-item" data-bs-interval="3000">
                              <div class="card m-4">
                                  <div class="card-body">
                                    <h5 class="card-title fs-6">User Comment</h5>
                                    <p class="card-text fs-6">
                                    Four, repeat steps one through three
                                    Five, make you fall in love with me
                                    If ever I believe my work is done
                                    Then I'll start back at one
                                    </p>
                                  </div>
                                </div>
                                <div class="card m-4">
                                  <div class="card-body">
                                    <h5 class="card-title fs-6">User Comment</h5>
                                    <p class="card-text fs-6">
                                    Four, repeat steps one through three
                                    Five, make you fall in love with me
                                    If ever I believe my work is done
                                    Then I'll start back at one
                                    </p>
                                  </div>
                                </div>
                                <div class="card m-4">
                                  <div class="card-body">
                                    <h5 class="card-title fs-6">User Comment</h5>
                                    <p class="card-text fs-6">
                                    Four, repeat steps one through three
                                    Five, make you fall in love with me
                                    If ever I believe my work is done
                                    Then I'll start back at one
                                    </p>
                                  </div>
                                </div>
                              </div>
                              <div class="carousel-item" data-bs-interval="4000">
                              <div class="card m-4">
                                  <div class="card-body">
                                    <h5 class="card-title fs-6">Bruce Wayne</h5>
                                    Four, repeat steps one through three
                                    Five, make you fall in love with me
                                    If ever I believe my work is done
                                    Then I'll start back at one
                                  </div>
                                </div>
                                <div class="card m-4">
                                  <div class="card-body">
                                    <h5 class="card-title fs-6">Bruce Wayne</h5>
                                    <p class="card-text fs-6">
                                    Four, repeat steps one through three
                                    Five, make you fall in love with me
                                    If ever I believe my work is done
                                    Then I'll start back at one
                                    </p>
                                  </div>
                                </div>
                                <div class="card m-4">
                                  <div class="card-body">
                                    <h5 class="card-title fs-6">Bruce Wayne</h5>
                                    <p class="card-text fs-6">
                                    Four, repeat steps one through three
                                    Five, make you fall in love with me
                                    If ever I believe my work is done
                                    Then I'll start back at one
                                    </p>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                          </div>
                         
                          </div>
                      </div>
                    </div>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <input type="submit" value="Remove" class="btn btn-danger">   
                  </div>
                </div>
              </div>
            </div>

          </td>
        </tr>
      </tbody>
      </table>
    </div>
    
  </section>
</body>
</html>