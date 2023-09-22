
//api-fetch-all.php
//Create database, Table: users, Fields: id, student_name, age & city


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





//api-insert.php    

 header('Content-Type: application/json');
 header('Access-Control-Allow-Origin: *');
 header('Access-Control-Allow-Methods: POST');
 header('Access-Control-Allow-Headers: Access-Control-Allow-Methods, Content-Type, Access-Control-Allow-Methods, Autherization, x-Requested-with');
 
 $data = json_decode(file_get_contents("php://input"), true);
 $name = $data['snnam'];
 $age = $data['sage'];
 $city= $data['scity'];
 
include "config.php";

 $sql = "insert into students(student_name, age, city) values('{$name}',{$age}, '{$city}')";
 
if(mysqli_query($conn, $sql){
  echo json_encode(array("message"=>"Student Record Inserted.", "status"=> true));
}else{
  echo json_encode(array("message"=>"Student Record not Inserted.", "status"=> false));
}





//api-update.php    

 header('Content-Type: application/json');
 header('Access-Control-Allow-Origin: *');
 header('Access-Control-Allow-Methods: PUT');
 header('Access-Control-Allow-Headers: Access-Control-Allow-Methods, Content-Type, Access-Control-Allow-Methods, Autherization, x-Requested-with');
 
 $data = json_decode(file_get_contents("php://input"), true);
 $id = $data['sid'];
 $name = $data['snnam'];
 $age = $data['sage'];
 $city= $data['scity'];
 
include "config.php";

 $sql = "update students set student_name = '{$name}', age = {$age}, city = '{$city}'";
 
if(mysqli_query($conn, $sql){
  echo json_encode(array("message"=>"Student Record Updated.", "status"=> true));
}else{
  echo json_encode(array("message"=>"Student Record not Inserted.", "status"=> false));
}


//api-delete.php

 header('Content-Type: application/json');
 header('Access-Control-Allow-Origin: *');
  header('Access-Control-Allow-Methods: DELETE');
 header('Access-Control-Allow-Headers: Access-Control-Allow-Methods, Content-Type, Access-Control-Allow-Methods, Autherization, x-Requested-with');
 
 
 $data = json_decode(file_get_contents("php://input"), true);
 $student_id = $data['sid];

include "config.php";

 $sql = "delete from students where id={$squdent_id}";
 
if(mysqli_query($conn, $sql)){
  echo json_encode(array("message"=>"Student Record Deleted.", "status"=> true));
}else{
  echo json_encode(array("message"=>"Student Record Not Deleted.", "status"=> false));
}



//api-search.php

 header('Content-Type: application/json');
 header('Access-Control-Allow-Origin: *');
 
 //$data = json_decode(file_get_contents("php://input"), true);
 //$search_vlaue = $data['search'];

OR
  $search_vlaue = ($_GET['search'])?? : die();
  
include "config.php";

 $sql = "Select * from students where student_name LIKE '%{$search_value}%'";
 $result = mysqli_query($conn, $sql) or die("SQL Query Failed.");

if(mysqli_num_rows($conn, $sql) > 0){
  $output = mysqli_fetch_all($conn, $sql);
  echo json_encode($output);
}else{
  echo json_encode(array("message"=>"No Record Found.", "status"=> false));
}



-----------------------------------------------------------------------------------




//Incomplete

//All apis in a single file Using jquery, html
//video: Yahoo Baba 
//Incomplete:


<script type="">
<script type="">
$(document).ready(function(){

  //Featch All Records
  function loadTable(){
    $.ajax(function(){
       url: 'http://localhost/php-rest-api-fetch-all.php',
       type: "GET",s
       success: function(data){
         
         //console.log(data)
         
         if(data.status == false){
           $("#load_table").append("<tr>..</tr>");
         }else{
         
         }
       
       }       
       
    });
  
  }
  
  
});


Incomplete:

Watch video: Yahoo Baba
php api


------------------------------------------------------------------------------------
