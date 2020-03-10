<?php
include('required/base.php');

$result_group = $conn ->query("SELECT
*
FROM result");

if ($result_group->num_rows > 0)
{
   while($row = $result_group->fetch_assoc())
   {
      if ($row['result_id']==$group_id) {
         $sel ='selected';
      }
    else {
      $sel='';
   }
  

  $response .= '<option value="'.$row['result_id'].'" '.$sel.'>'.$row['result_text'].'</option>';
}
}

  ?>