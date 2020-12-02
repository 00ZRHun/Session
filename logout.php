<?php
// Deleting Sessions
  // Must start the session first:
  session_start();
  
    // store to test if they *were* logged in
    $old_user = $_SESSION['valid_user'];

  // Remove a single variable:
  unset($_SESSION['valid_user']);

  // Clear all the variables:
  $_SESSION = array();

  // Clear the stored data:
  session_destroy();
?>
<html>
<body>
<h1>Log out</h1>
<?php 
  if (!empty($old_user))
  {
    echo 'Logged out.<br />';
  }
  else
  {
    // if they weren't logged in but came to this page somehow
    echo 'You were not logged in, and so have not been logged out.<br />'; 
  }
?> 
<a href="authmain.php">Back to main page</a>
</body>
</html>
