<?php require 'dbconfig.php'; ?>

<?php  header('Content-Type: application/json') ?>

<?php
$method = $_SERVER['REQUEST_METHOD'];
switch ($method) {
  case 'GET':
    echo '{
  "firstName": "John",
  "lastName": "Smith"
}';
    break;
  case 'POST':
    //Here Handle POST Request
  $data = json_decode(file_get_contents('php://input'), true);
  add_data($data,$db);
    break;
  case 'DELETE':
    //Here Handle DELETE Request
    break;
  case 'PUT':
echo '{
  "post": "put mathod",
}';
    break;
    default :
    echo "request not valid";
    break;
}

  function add_data($data,$db){
  $name=$data["name"];
  $phone=$data['phone'];
  $email=$data['email'];
  $sql = "INSERT INTO contact (name, phone, email) VALUES (?,?,?)";
  $db->prepare($sql)->execute([$name, $phone, $email]);

  if ($db->prepare($sql)) {
    echo "success";
  }else{
    echo "faild";
  }
  }
?>
