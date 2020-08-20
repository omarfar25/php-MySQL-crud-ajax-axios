<?php require 'dbconfig.php'; ?>
<?php
$name=$_GET['nf'];
$phone=$_GET['pf'];
$email=$_GET['ef'];
$sql = "INSERT INTO contact (name, phone, email) VALUES (?,?,?)";
$db->prepare($sql)->execute([$name, $phone, $email]);

if ($db->prepare($sql)) {
	echo "success";
}

// $sql = "INSERT INTO users (name, surname, sex) VALUES (?,?,?)";
// $pdo->prepare($sql)->execute($data);
//
?>