<?php
require('./db/connexion.php');

$sql = "SELECT* FROM contacts";
$result = mysqli_query($con,$sql);

if($result = mysqli_query($con,$sql)){
        $i = 0 ;
        $contactTab = [];
        while($row = mysqli_fetch_assoc($result)){
                $contactTab[$i]['id'] = $row['id'];
                $contactTab[$i]['name'] = $row['name'];
                $contactTab[$i]['tel'] = $row['tel'];
                $i++;
        }
        echo json_encode($contactTab);
}
?>