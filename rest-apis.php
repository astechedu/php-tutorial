//api-fetch-all.php

header('Content-Type: application/json');
header('Access-Conrol-Allow-Origin: *');

include "config.php";

$sql = "select * from students";
$result = mysqli_query($conn, $sql) or die("SQL Query Failed");

if(mysqli_num_rows($conn, $sql) > 0){
  $output = myssqli_fetch_all($result, MYSQLI_ASSOC);
  echo json_encode($output);
}else{
  echo json_encode(array("message"=>"No Record Found", "status"=>"", false));
}


//api-fetch-single.php
 header('Content-Type: application/json');
 header('Access-Control-Allow-Origin: *');
 $data = json_decode(file_get_contents("php://input"), true);
 $student_id = $data['sid];

include "config.php";

 $sql = "Select * from students where id={$squdent_id}";
 $result = mysqli_query($conn, $sql) or die("SQL Query Failed.");

if(mysqli_num_rows($conn, $sql) > 0){
  $output = mysqli_fetch_all($conn, $sql);
  echo json_encode($output);
}else{
  echo json_encode(array("message"=>"No Record Found.", "status"=> false));
}
