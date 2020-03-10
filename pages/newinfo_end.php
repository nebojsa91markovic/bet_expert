<?php

$datum=$_POST['datum'];
$title=$_POST['title'];
$invunits=$_POST['invunits'];
$picks=$_POST['picks'];
$ukupna_kvota=$_POST['ukupna_kvota'];
$result=$_POST['result'];
$kladionica=1;
$analiza=$_POST['analiza'];
$group_id=$_POST['group_id'];

include('required/base.php');


$insert_tips = "INSERT INTO `tips` (`tip_id`, `group_id`, `title`, `bet`, `picks`, `sum`, `analiza`, `date`, `result`, `visibility`)
        VALUES (NULL, '{$group_id}', '{$title}', '{$invunits}', '{$picks}','{$ukupna_kvota}', '{$analiza}', '{$datum}', '{$result}', 1)";

 if (mysqli_query($conn, $insert_tips)) {
    echo ("<script >
  window.alert('Uspesan upis');
   window.location.href='?p=new_info';
  </script>");
} else {
   // echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

?>