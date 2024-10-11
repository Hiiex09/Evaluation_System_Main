
<?php
include("./database/dbconnect.php");

function createCriteria($criteria)
{
  global $conn; // Access the $conn variable from the global scope
  try {

    $sql = "INSERT INTO tblcriteria (criteria) VALUES (?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $criteria);
    if ($stmt->execute()) {
      // Success message
      echo "<script>
             alert('Criteria successfully created.');
            </script>";
    } else {
      // Handle the failure
      echo "Error: Unable to insert criteria.";
    }

    // Close the statement
    $stmt->close();
  } catch (mysqli_sql_exception $e) {
    // Log error and display a generic message
    error_log("Insert Failed: " . $e->getMessage());
    echo "Error during criteria creation.";
  }
}


function displayCriteria()
{
  global $conn; // Access the $conn variable from the global scope
  try {
    $sql = "SELECT * FROM tblcriteria";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $result = $stmt->get_result();

    $criteriaList = [];

    if ($result->num_rows > 0) {
      while ($row = $result->fetch_assoc()) {
        $criteriaList[] = $row['criteria']; // Assuming 'criteria' is the column name
      }
    }
    return $criteriaList;
  } catch (mysqli_sql_exception $e) {
    error_log("Error fetching criteria: " . $e->getMessage());
    return [];
  }
}

?>

