<?php

$email = $_GET['q'];


include('required/base.php');

      $result_email = $conn ->query("SELECT
      *
    FROM users
    WHERE email = '{$email}'
        ");


if ($result_email->num_rows > 0)
{

echo '<button type="submit" class="button" disabled>Snimi</button>';

  }
  else {

    echo '<button type="submit" class="button">Snimi</button>';
  }


?>