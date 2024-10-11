<?php
include("./database/dbconnect.php");
include("question.php");
// Process form submission to create a question
if ($_SERVER['REQUEST_METHOD'] == "POST") {
  if (isset($_POST['submit'])) {
    $school_year_id = $_POST['school_year_id'];
    $question = $_POST['question'];
    $criteria_id = $_POST['criteria_id'];

    // Validate input
    if (!empty($criteria_id) && !empty($question) && !empty($school_year_id)) {
      createQuestion($school_year_id, $question, $criteria_id);
    }
  }
}

// Fetch the list of questions grouped by criteria
$questionList = displayCriteriaWithQuestions();
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Manage Question</title>
</head>

<body>
  <!-- Input Form -->
  <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
    <!-- Dropdown for selecting school year -->
    <div class="form-group">
      <label for="school_year_id">School Year</label>
      <select name="school_year_id" id="school_year_id" class="custom-select custom-select-sm select2" required>
        <option value="" disabled selected>Select School Year</option>
        <?php
        $schoolYears = $conn->query("SELECT * FROM tblschoolyear ORDER BY annual_year ASC");
        while ($row = $schoolYears->fetch_assoc()):
        ?>
          <option value="<?php echo $row['school_year_id']; ?>">
            <?php echo htmlspecialchars($row['annual_year'] . " - " . $row['annual_year']); ?>
          </option>
        <?php endwhile; ?>
      </select>
    </div>

    <!-- Dropdown for selecting criteria -->
    <div class="form-group">
      <label for="criteria_id">Criteria</label>
      <select name="criteria_id" id="criteria_id" class="custom-select custom-select-sm select2" required>
        <option value="" disabled selected>Select Criteria</option>
        <?php
        $criteria = $conn->query("SELECT * FROM tblcriteria ORDER BY abs(order_by) ASC");
        while ($row = $criteria->fetch_assoc()):
        ?>
          <option value="<?php echo $row['criteria_id']; ?>"><?php echo htmlspecialchars($row['criteria']); ?></option>
        <?php endwhile; ?>
      </select>
    </div>

    <input type="text" name="question" placeholder="Create question" required>
    <input type="submit" name="submit" value="Create" />
  </form>

  <!-- Where the questions will be displayed -->
  <div id="questionlist">
    <?php if (count($questionList) > 0): ?>
      <?php foreach ($questionList as $criteria => $questions): ?>
        <div>
          <h3><?php echo htmlspecialchars($criteria); ?></h3>
          <ul>
            <?php if (count($questions) > 0): ?>
              <?php foreach ($questions as $index => $listQuestion): ?>
                <li>
                  <?php echo htmlspecialchars($listQuestion); ?>

                  <!-- Radio buttons for rating 1-5 -->
                  <div>
                    <label>
                      <input type="radio" name="rating[<?php echo $index; ?>]" value="1" required> 1
                    </label>
                    <label>
                      <input type="radio" name="rating[<?php echo $index; ?>]" value="2"> 2
                    </label>
                    <label>
                      <input type="radio" name="rating[<?php echo $index; ?>]" value="3"> 3
                    </label>
                    <label>
                      <input type="radio" name="rating[<?php echo $index; ?>]" value="4"> 4
                    </label>
                    <label>
                      <input type="radio" name="rating[<?php echo $index; ?>]" value="5"> 5
                    </label>
                  </div>
                </li>
              <?php endforeach; ?>
            <?php else: ?>
              <li>No questions available for this criteria.</li>
            <?php endif; ?>
          </ul>
        </div>
      <?php endforeach; ?>
    <?php else: ?>
      <div>No Criteria Available</div>
    <?php endif; ?>
  </div>

</body>

</html>