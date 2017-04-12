<?php
  session_start();
# end the session, real nice
  if(session_destroy()) {
    header("Location: ../index.php");
  }
?>
