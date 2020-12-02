<?php
  session_start(); // MUST place it at the top of file
  
    echo 'The content of $_SESSION[\'sess_var\'] is '
          .$_SESSION['sess_var'].'<br />';
  
    unset($_SESSION['sess_var']);
?>
<a href="page3.php">Next page</a>
