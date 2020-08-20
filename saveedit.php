<?php require 'dbconfig.php'; ?>
<?php
$id=$_GET['id'];
$name=$_GET['nf'];
$phone=$_GET['pf'];
$email=$_GET['ef'];
$sql = "UPDATE contact SET name= ?,phone= ?,email= ? WHERE id = ?";
$db->prepare($sql)->execute([$name, $phone, $email ,$id]);

if ($db->prepare($sql)) {
	echo "success";
}

// $sql = "INSERT INTO users (name, surname, sex) VALUES (?,?,?)";
// $pdo->prepare($sql)->execute($data);
//

?>