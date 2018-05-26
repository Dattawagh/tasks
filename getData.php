<?php
$conn = mysqli_connect("localhost", "root", "root", "task_countries");

$salect_query = "select * from user_selected_countries";
$result = mysqli_query($conn, $salect_query);
$arrResult = [];
while($row = mysqli_fetch_object($result)){
		$arrResult[] = $row;
}
echo json_encode($arrResult);
?>