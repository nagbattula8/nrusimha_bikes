<?php 
//iclude dbconnection
include('../../class/dbconnect.php');

$id = $_GET['nbo_id'];

$current_booking = $_GET['nbo_current_booking'];

$booking_id = $_GET['nbo_booking_id'];

$payment_status = $_GET['nbo_payment_status'];

$order_history_id = $_GET['nbo_order_history_id'];

//create query
$query = "UPDATE booking SET current_booking='$current_booking' ,booking_id='$booking_id' ,payment_status='$payment_status' ,order_history_id='$order_history_id' WHERE id ='$id'";

if(mysqli_query($conn ,$query)){
	header("location:../index.php");
	
} else {
	echo "error in your query" . mysqli_error($conn);
}
mysqli_close($conn);
?>