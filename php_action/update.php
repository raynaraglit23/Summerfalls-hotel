<?php 

require_once 'db_connect.php';

if($_POST) {
	$checkin = $_POST['checkin'];
	$checkout = $_POST['checkout'];
	$nomecompleto = $_POST['nomecompleto'];
	$id = $_POST['id'];
	$tel = $_POST['tel'];
    $email = $_POST['email'];
	$quarto = $_POST['quarto'];
	$num_hospedes = $_POST['num_hospedes'];

	$sql  = "UPDATE summerfalls SET checkin = '$checkin', checkout = '$checkout', nomecompleto = '$nomecompleto', tel = '$tel',
	 email = '$email', quarto = '$quarto', num_hospedes = '$num_hospedes'   WHERE id = {$id}";
	if($connect->query($sql) === TRUE) {
		echo "<p>Succcessfully Updated</p>";
		echo "<a href='../edit.php?id=".$id."'><button type='button'>Back</button></a>";
		echo "<a href='../index.php'><button type='button'>Home</button></a>";
	} else {
		echo "Erorr while updating record : ". $connect->error;
	}

	$connect->close();

}

?>