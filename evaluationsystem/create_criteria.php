<?php
include("./database/dbconnect.php");
include("criteria.php");
?>
<?php
if ($_SERVER['REQUEST_METHOD'] == "POST") {
  if (isset($_POST['submit'])) {
    $criteria = $_POST['criteria'];

    // Check if the input is a valid student school ID (exactly 7 characters)
    if (!empty($criteria)) {
      createCriteria($criteria);
    }
  }
}
$criteriaList = displayCriteria();
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Display Criteria</title>
  <!-- <script>
    let questionCount = 0; // To track the number of questions

    function displayQuestion() {
      // Get the value from the input field
      var question = document.getElementsByName("question")[0].value;

      if (question.trim() !== "") {
        // Ensure the question is not empty
        questionCount++;

        // Create a new div to display the question with numbering
        var newQuestion = document.createElement("div");
        newQuestion.textContent = questionCount + ". " + question;

        // Append the new question to the question list
        document.getElementById("criterialist").appendChild(newQuestion);

        // Clear the input field
        document.getElementsByName("criteria")[0].value = "";
      }

      // Prevent form from submitting and refreshing the page
      return false;
    }
  </script> -->
</head>

<body>
  <!-- Input Form -->
  <form action="<?php htmlspecialchars($_SERVER['PHP_SELF']); ?>" onsubmit="return displayQuestion();" method="post">
    <input type="text" name="criteria" placeholder="Create a criteria" required>
    <input type="submit" name="submit" value="Create" />
  </form>

  <!-- Where the questions will be displayed -->
  <div id="criterialist">
    <?php if (count($criteriaList) > 0): ?>
      <div>
        <?php foreach ($criteriaList as $listCriteria): ?>
          <div><?php echo htmlspecialchars($listCriteria) ?></div>
        <?php endforeach; ?>
      </div>
    <?php else: ?>
      <div>No Criteria Available</div>
    <?php endif; ?>

  </div>
</body>



</html>