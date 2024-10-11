<?php
include("./database/dbconnect.php");
include('question.php');
session_start();

// Retrieve school year details based on the passed ID
if (isset($_GET['id'])) {
  $qry = $conn->query("SELECT * FROM tblschoolyear WHERE school_year_id = " . $_GET['id'])->fetch_array();
  foreach ($qry as $k => $v) {
    $$k = $v;
  }
}

// Fetch criteria with their associated questions
$criteriaWithQuestions = displayCriteriaWithQuestions();

// Call the createQuestion function to handle form submissions
// createQuestion();
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Manage Questionnaire</title>
</head>

<body>
  <div class="card card-info card-primary">
    <div class="card-header">
      <b>Question Form</b>
    </div>
    <div class="card-body">
      <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" id="manage-question" method="post">
        <input type="hidden" name="school_year_id" value="<?php echo isset($school_year_id) ? $school_year_id : '' ?>">
        <input type="hidden" name="id" value="">

        <div class="form-group">
          <label for="criteria_id">Criteria</label>
          <select name="criteria_id" id="criteria_id" class="custom-select custom-select-sm select2" required>
            <option value="" disabled selected>Select Criteria</option>
            <?php
            $criteria = $conn->query("SELECT * FROM tblcriteria ORDER BY abs(order_by) ASC");
            while ($row = $criteria->fetch_assoc()):
            ?>
              <option value="<?php echo $row['criteria_id'] ?>"><?php echo htmlspecialchars($row['criteria']) ?></option>
            <?php endwhile; ?>
          </select>
        </div>

        <div class="form-group">
          <label for="question">Question</label>
          <textarea name="question" id="question" cols="30" rows="1" class="form-control" required></textarea>
        </div>

        <input type="submit" name="submit" value="Create">
        <input type="reset" value="Cancel">
      </form>
    </div>
  </div>

  <div class="card card-outline card-info">
    <div class="card-header">
      <b>Evaluation Questionnaire for Academic:</b>
      <div class="card-tools">
        <button class="btn btn-sm btn-flat btn-primary bg-gradient-primary mx-1" id="eval_restrict" type="button">Evaluation Restriction</button>
        <button class="btn btn-sm btn-flat btn-success bg-gradient-success mx-1" form="order-question">Save Order</button>
      </div>
    </div>
    <div class="card-body">
      <fieldset class="border border-info p-2 w-100">
        <legend class="w-auto">Rating Legend</legend>
        <p>5 = Strongly Agree, 4 = Agree, 3 = Uncertain, 2 = Disagree, 1 = Strongly Disagree</p>
      </fieldset>
      <form id="order-question">
        <div class="clear-fix mt-2"></div>
        <?php foreach ($criteriaWithQuestions as $criteria => $questions): ?>
          <table class="table table-condensed">
            <thead>
              <tr class="bg-gradient-secondary">
                <th colspan="2" class="p-1"><b><?php echo htmlspecialchars($criteria) ?></b></th>
                <th class="text-center">5</th>
                <th class="text-center">4</th>
                <th class="text-center">3</th>
                <th class="text-center">2</th>
                <th class="text-center">1</th>
              </tr>
            </thead>
            <tbody class="tr-sortable">
              <?php foreach ($questions as $question): ?>
                <tr>
                  <td><?php echo htmlspecialchars($question); ?></td>
                  <td><input type="text" name="rating[]" class="form-control" placeholder="Rate" required></td>
                </tr>
              <?php endforeach; ?>
            </tbody>
          </table>
        <?php endforeach; ?>
      </form>
    </div>
  </div>
</body>

</html>