<?php

//add dbconnect

include('../../class/dbconnect.php');

$id = $_POST['nbo_id'];

$current_booking = $_POST['nbo_current_booking'];

$booking_id = $_POST['nbo_booking_id'];

$payment_status = $_POST['nbo_payment_status'];

$order_history_id = $_POST['nbo_order_history_id'];

//create query

$query = "INSERT INTO booking(id ,current_booking,booking_id, payment_status,order_history_id) VALUES('$id' , '$current_booking', '$booking_id', '$payment_status', '$order_history_id')";

if(mysqli_query($conn ,$query)){
	header("location:../index.php");
}
else{
	echo "error in query" . mysqli_error($conn);
}
mysqli_close($conn);
?>