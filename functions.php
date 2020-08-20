<?php
	// function read_all_data($db){
	// 	// $username = $_SESSION['username'];
	// 	foreach ($db->query("SELECT * FROM contact ") as $rows)
	// 		return $rows;
	// }
	?>

	<?php
	function read_all_data($db){
				$sql = "SELECT * FROM contact" ;

				$stmt = $db->prepare($sql);
				$stmt->execute();

				$rows =$stmt->fetchAll();
				return $rows;
			}
				 ?>
	<?php
	function read_sindge_data($db,$id){
				$id=$id;
				$sql = "SELECT * FROM contact WHERE id= ?" ;

				$stmt = $db->prepare($sql);
				$stmt->execute([$id]);

				$rows =$stmt->fetch();
				return $rows;
			}
				 ?>