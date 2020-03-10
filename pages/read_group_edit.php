<?php
include('required/base.php');

$group_sql = $conn ->query("SELECT
*
FROM groups");

if ($group_sql->num_rows > 0)
{
   while($row = $group_sql->fetch_assoc())
   {
      if ($row['group_id']==$group_id) {
         $sel ='selected';
      }
    else {
      $sel='';
   }
  

  $response .= '<option value="'.$row['group_id'].'" '.$sel.'>'.$row['group_name'].'</option>';
}
}

  ?>