<?php require 'dbconfig.php'; ?>
<?php
$id=$_GET['id'];
$sql = "DELETE FROM contact WHERE id = ?";
$db->prepare($sql)->execute([$id]);

if ($db->prepare($sql)) {
	echo "success";
}

// $sql = "INSERT INTO users (name, surname, sex) VALUES (?,?,?)";
// $pdo->prepare($sql)->execute($data);
//
?>