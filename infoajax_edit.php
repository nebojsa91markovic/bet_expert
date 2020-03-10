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

$response = '<form action="?p=newinfo_end" method="POST">
<div class="m-title" >
<input type="text" placeholder="" name="datum" value="'.$date.'">
<div style="  position: relative;
margin-left: auto;
margin-right: auto;
  width: 100%;
  text-align: center;
  font-size: 24px;text-transform: uppercase;"> 
  <input name="title" type="text" placeholder="Unesi Naslov" style="font-size:24px;" value="'.$title.'"></div>
</div>

<p style="  position: relative;
margin-left: auto;
margin-right: auto;
width: 100%;
text-align: center;">ulog: <span> <input type="text" placeholder="Unesi Units" name="invunits" value="'.$bet.'">
</span> unita</p>

<div style="text-align:center; width: 100%;">
        <p><textarea name="picks" rows="50" cols="30" placeholder="Ponuda parova" style="font-size:20px;margin-left: auto;
        margin-right: auto;
          width: 100%;
          text-align: center; ">'.$picks.'</textarea>
          <label for="result" ></label>
          <select id="result" name="result" style="font-size:20px; margin-left: auto;
          margin-right: auto;">';

          include('pages/read_result_edit.php');

$response  .='</select>
</div>
</div>
<div class="odd1" style="margin-left:0;">
    <input type="text" placeholder="Ukupna kvota" style="font-size:25px;" name="ukupna_kvota" value="'.$sum.'">
</div>
<div class="analize1">
    <h2>Analisys</h2>
    <textarea name="analiza" rows="50" cols="30" placeholder="Analiza" style="font-size:20px;margin-left: auto;
        margin-right: auto;
          width: 100%;
          text-align: center; ">'.$analiza.'</textarea>
</div>
</div>
<label for="group_id" ></label>
<select id="group_id" name="group_id" style="font-size:20px;margin-left: auto;
margin-right: auto;">';

include('pages/read_group_edit.php');


$response .= '</select>

<button style="border-radius: 8px; padding: 20px;
text-align: center;
text-decoration: none;
display: inline-block;
font-size: 26px;
margin-left: auto;
margin-right: auto;
width:100%;
cursor: pointer; background-color:#42C259;" type="submit"><b>Sacuvaj</b></button>
</form>
';

echo $response;
exit;