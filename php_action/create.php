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

	$sql = "INSERT INTO summerfalls (checkin, checkout, nomecompleto, id, tel, email, quarto, num_hospedes, active) VALUES ('$checkin', 
		'$checkout', '$nomecompleto','$id', '$tel', '$email', '$quarto', '$num_hospedes', 1)";
    header('location:../contact.html');
    
	if(!$connect->query($sql) === TRUE) {
		echo "<a href='../contact.html'>";
	} 


	
}
    $sql2 = mysqli_query($connect, "SELECT checkin FROM summerfalls WHERE checkin = '$checkin' ");
    if (mysqli_num_rows($sql2) === 0) {
    	echo "Quarto disponível";
    }
    else{
    	echo "Quarto ocupado";
    }
$connect->close();

?>