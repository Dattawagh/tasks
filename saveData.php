<?php
//error_reporting(E_ALL);
//ini_set("display_errors","on");
$data = json_decode(file_get_contents("php://input"));

$country_id = $data->id;
$country_name = $data->name;
$threat_level = $data->threatLevel;
$threat_text = $data->threatText;
$date = date("Y-m-d");

$conn = mysqli_connect("localhost", "root", "root", "task_countries");


$insert_query = "insert into user_selected_countries(id, country_id, name, threat_level, threat_text, created_at) values('','".$country_id."','".$country_name."','".$threat_level."','".$threat_text."','".$date."')";
mysqli_query($conn, $insert_query);
echo json_encode(["status"=>"Done"]);
?>