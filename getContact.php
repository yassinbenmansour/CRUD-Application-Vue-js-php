<?php
require('./db/connexion.php');
$query = "SELECT * FROM contacts";
$result = mysqli_query($con,$query);

$contacts = [];

if($result = mysqli_query($con,$query))
{
  $i = 0;
  while($row = mysqli_fetch_assoc($result))
  {
    $contacts[$i]['id']    = $row['id'];
    $contacts[$i]['name'] = $row['name'];
    $contacts[$i]['tel'] = $row['tel'];
    $i++;
  }
  echo json_encode($contacts);
}