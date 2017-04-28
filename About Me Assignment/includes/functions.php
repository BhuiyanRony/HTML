<?php

  //----------Check if value exist in Associative Array
  function userNeedLogin() {
      if (!((isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) && !strstr($_SERVER['PHP_SELF'], "login.php"))) {
          header ("Location: login.php");
      }
  }

?>