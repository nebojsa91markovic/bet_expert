<?php
include('required/base.php');
$result_group = $conn ->query("SELECT
*
FROM
rights
");

if ($result_group->num_rows > 0)
{
   while($row = $result_group->fetch_assoc())
   {
      if ($row['id_rights']==$privilege) {
         $sel ='selected';
      }
    else {
      $sel='';
   }
  

  echo '<option value="'.$row['id_rights'].'" '.$sel.'>'.$row['rights_name'].'</option>';
}}

?>