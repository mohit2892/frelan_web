<?php
// delete_profile.php
include "db_connect.php";

$id = isset($_GET['id']) ? intval($_GET['id']) : 0;

if ($id) {
  $sql = "DELETE FROM qualification_sign WHERE sno = $id";
  
  if (mysqli_query($conn, $sql)) {
    echo "Profile deleted successfully.";
    header("Location: index.php"); // Redirect to a list of profiles or homepage
    exit;
  } else {
    echo "Error deleting profile: " . mysqli_error($conn);
  }
} else {
  echo "Invalid ID.";
}
?>
