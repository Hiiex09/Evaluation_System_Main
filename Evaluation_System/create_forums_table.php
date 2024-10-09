<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Add Forums</title>
  <!-- Include Bootstrap CSS -->
  <link href="httpdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
  <?php include 'header_section.php'; ?>

  <section>
    <div class="m-5">
      <a href="admin_dashboard.php" class="btn btn-primary">
        <i class="bi bi-arrow-return-left mx-3"></i>Return
      </a>
    </div>

    <div class="container-lg m-5">
      <h1>CEC FORUM</h1>
      <form>
        <div class="mb-3">
          <h1><label for="forumTitle" class="form-label fs-4">Enter A New Questionaire</label></h1>
          <label for="forumTitle" class="m-1">Title</label>
          <input type="text" class="form-control m-1" id="forumTitle" placeholder="Title">
          
          <label for="forumQuestion" class="m-1">Question</label>
          <input type="text" class="form-control m-1" id="forumQuestion" placeholder="Question">
        </div> 
        <input type="submit" value="Insert New Forum" class="btn btn-sm btnSubmit btn-primary">
      </form>
    </div>

    <div class="container-lg m-5">
      <div class="row">
        <div class="col-12">
          <table class="table table-bordered">
            <thead>
              <tr>
                <th scope="col" class="fs-5">Questionnaire</th>
                <th scope="col" class="fs-5">Operation</th>
              </tr>
            </thead>
            <tbody>
             
              <tr>
                <td>
                  
                  <div class="col-12">
                    <div class="m-2">
                      <div class="m-2"><strong>1. Teaching Quality</strong></div>
                      <p class="m-2">How would you rate the teacher's knowledge of the subject?</p>
                      <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="flexRadioDefault1" id="Excellent">
                        <label class="form-check-label" for="Excellent">Excellent</label>
                      </div>
                      <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="flexRadioDefault1" id="Good">
                        <label class="form-check-label" for="Good">Good</label>
                      </div>
                      <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="flexRadioDefault1" id="Average">
                        <label class="form-check-label" for="Average">Average</label>
                      </div>
                      <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="flexRadioDefault1" id="Poor">
                        <label class="form-check-label" for="Poor">Poor</label>
                      </div>
                      <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="flexRadioDefault1" id="Very Poor">
                        <label class="form-check-label" for="Very Poor">Very Poor</label>
                      </div>
                    </div>
                  </div>
                </td>
                <td class="d-block">
                  <div>
                    <span class="btn btn-danger w-100 m-1">Remove</span>
                  </div>
                  <div>
                    <span class="btn btn-success w-100 m-1">Update</span>
                  </div>
                </td>
              </tr>


              <tr>
                <td>
                  <div class="m-2">
                    <div class="m-2"><strong>2. Clarity of Instruction</strong></div>
                    <p class="m-2">How effectively does the teacher explain complex topics in a way that is easy to understand?</p>
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" type="radio" name="flexRadio2" id="Excellent2">
                      <label class="form-check-label" for="Excellent2">Excellent</label>
                    </div>
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" type="radio" name="flexRadio2" id="Good2">
                      <label class="form-check-label" for="Good2">Good</label>
                    </div>
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" type="radio" name="flexRadio2" id="Average2">
                      <label class="form-check-label" for="Average2">Average</label>
                    </div>
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" type="radio" name="flexRadio2" id="Poor2">
                      <label class="form-check-label" for="Poor2">Poor</label>
                    </div>
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" type="radio" name="flexRadio2" id="VeryPoor2">
                      <label class="form-check-label" for="VeryPoor2">Very Poor</label>
                    </div>
                  </div>
                </td>
                <td class="d-block">
                  <div>
                    <span class="btn btn-danger w-100 m-1">Remove</span>
                  </div>
                  <div>
                    <span class="btn btn-success w-100 m-1">Update</span>
                  </div>
                </td>
              </tr>

             
              <tr>
                <td>
                  <div class="m-2">
                    <div class="m-2"><strong>3. Classroom Management</strong></div>
                    <p class="m-2">How well does the teacher maintain a productive and respectful learning environment?</p>
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" type="radio" name="flexRadio3" id="Excellent3">
                      <label class="form-check-label" for="Excellent3">Excellent</label>
                    </div>
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" type="radio" name="flexRadio3" id="Good3">
                      <label class="form-check-label" for="Good3">Good</label>
                    </div>
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" type="radio" name="flexRadio3" id="Average3">
                      <label class="form-check-label" for="Average3">Average</label>
                    </div>
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" type="radio" name="flexRadio3" id="Poor3">
                      <label class="form-check-label" for="Poor3">Poor</label>
                    </div>
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" type="radio" name="flexRadio3" id="VeryPoor3">
                      <label class="form-check-label" for="VeryPoor3">Very Poor</label>
                    </div>
                  </div>
                </td>
                <td class="d-block">
                  <div>
                    <span class="btn btn-danger w-100 m-1">Remove</span>
                  </div>
                  <div>
                    <span class="btn btn-success w-100 m-1">Update</span>
                  </div>
                </td>
              </tr>

              <tr>
                <td>
                    <div class="m-2">
                      <div class="m-2"><strong>4. Engagement with Students</strong></div>
                      <p class="m-2">How well does the teacher engage students and encourage participation in class discussions?</p>
                      <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="flexRadioDefault3" id="Excellent">
                        <label class="form-check-label" for="Excellent">Excellent</label>
                      </div>
                      <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="flexRadioDefault3" id="Good">
                        <label class="form-check-label" for="Good">Good</label>
                      </div>
                      <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="flexRadioDefault3" id="Average">
                        <label class="form-check-label" for="Average">Average</label>
                      </div>
                      <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="flexRadioDefault3" id="Poor">
                        <label class="form-check-label" for="Poor">Poor</label>
                      </div>
                      <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="flexRadioDefault3" id="Very Poor">
                        <label class="form-check-label" for="Very Poor">Very Poor</label>
                      </div>
                    </div>
                </td>
                <td class="d-block">
                  <div>
                    <span class="btn btn-danger w-100 m-1">Remove</span>
                  </div>
                  <div>
                    <span class="btn btn-success w-100 m-1">Update</span>
                  </div>
                </td>
              </tr>

              <tr>
                <td>
                <div class="col-12">
                  <div class="m-2">
                    <div class="m-2"><strong>5. Support and Availability</strong></div>
                    <p class="m-2">Is the teacher available and approachable when you need help outside of class hours?</p>
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" type="radio" name="flexRadioDefault3" id="Excellent">
                      <label class="form-check-label" for="Excellent">Excellent</label>
                    </div>
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" type="radio" name="flexRadioDefault3" id="Good">
                      <label class="form-check-label" for="Good">Good</label>
                    </div>
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" type="radio" name="flexRadioDefault3" id="Average">
                      <label class="form-check-label" for="Average">Average</label>
                    </div>
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" type="radio" name="flexRadioDefault3" id="Poor">
                      <label class="form-check-label" for="Poor">Poor</label>
                    </div>
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" type="radio" name="flexRadioDefault3" id="Very Poor">
                      <label class="form-check-label" for="Very Poor">Very Poor</label>
                    </div>
                  </div>
                  </div>
                </td>
                <td class="d-block">
                  <div>
                    <span class="btn btn-danger w-100 m-1">Remove</span>
                  </div>
                  <div>
                    <span class="btn btn-success w-100 m-1">Update</span>
                  </div>
                </td>
              </tr>

            </tbody>
          </table>
        </div>
      </div>
    </div>
  </section>
</body>
</html>
