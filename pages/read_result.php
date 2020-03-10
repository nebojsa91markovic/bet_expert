<?php
include('required/base.php');

$result_sql = $conn ->query("SELECT
*
FROM result WHERE result_id='{$result}'");

if ($result_sql->num_rows > 0)
{
   while($row = $result_sql->fetch_assoc())
   {
      if ($row['result_id']==0) {
        $response .= '<span>U igri</span>';
      }
    else if ($row['result_id']==1) {
        $response .= '<span>WON</span>';
   }
   else if ($row['result_id']==2) {
    $response .= '<span>LOST</span>';
}
else if ($row['result_id']==3) {
    $response .= '<span>VOID</span>';
}
}
}

  ?>