<?php
  if (!isset($_SESSION)) {
    session_start();
    $_SESSION = array();
  }

  echo "<p>You've been logged out! <a href = \"signin.php\">Log back in!</a></p>";

	session_destroy();  //look up the documentation for this
?>
