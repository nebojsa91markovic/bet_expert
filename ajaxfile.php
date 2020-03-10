<?php
include "required/base.php";

$tipid = $_POST['tipid'];

$sql = $conn ->query("SELECT
*
FROM
tips
WHERE
tip_id='{$tipid}'");

$response = "<table border='0' width='100%'>";
if ($sql->num_rows > 0)
{
   while($row = $sql->fetch_assoc())
   {
    $group_id = $row['group_id'];
    $title = $row['title'];
    $bet = $row['bet'];
    $picks = $row['picks'];
    $sum = $row['sum'];
    $analiza = $row['analiza'];
    $date = $row['date'];
    $result = $row['result'];
    $visibility = $row['visibility'];
   
   
}}

$response = '<div class="m-title" >

<div class="date11" style="  position: inherit; top: 8px; left: 16px;
font-size: 18px;">'.$date.'</div>
<div style="  position: relative;
margin-left: auto;
margin-right: auto;
  width: 100%;
  text-align: center;
  font-size: 24px;text-transform: uppercase;"> '.$title.'</div>

</div>';
$response .='
<p style="  position: relative;
margin-left: auto;
margin-right: auto;
width: 100%;
text-align: center;">ulog: <span>'.$bet.'</span> unita</p>
<div style="text-align:center; width: 100%;">
    <div class="game11" style="box-sizing: border-box; border: 1px solid rgb(150, 147, 147);">
        <p style="font-size: 20px;">'.$picks.' </p>
    </div>';
    include('pages/read_result.php');
$response .='
</div>
</div>
<div class="odd1" style="margin-left:0;">
    <p><span>'.$sum.'</span></p> 
</div>
<div class="analize1">
    <h2>Analisys</h2>
    <p>'.$analiza.'</p>
</div>
</div>

';

echo $response;
exit;