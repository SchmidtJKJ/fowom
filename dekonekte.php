<?php
  include("../dbKoneksyon.php");

  session_destroy();

  header("Location: ../index.php?dekonekte=Wi");
 ?>
