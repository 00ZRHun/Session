<?php
  session_start();
  
  // the name of session is up to you, eg. sess_var
  $_SESSION['sess_var'] = "Hello world!";

  echo 'The content of $_SESSION[\'sess_var\'] is '
        .$_SESSION['sess_var'].'<br />';
?>
<a href="page2.php">Next page</a> 
<!-- <a href="http://www.yahoo.com">Next page</a>  -->
