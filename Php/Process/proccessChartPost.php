<?php 
require '../connect.php';
require '../executeQuery.php';
if(!isset($_SESSION)) { 
	session_start(); 
} 

$result = executeQuery($conn, "CALL procedureChartPost()");
$myArray = [];
$tmp = "[";
$count = mysqli_num_rows($result);
$countMain = 0;
while ($row = mysqli_fetch_array($result)) {
	$countMain++;
	$tmp .= "{";
	$tmp .= '"id": "' . $row['id'] . '",';
	$tmp .= '"faculty_name": "' . base64_decode($row['faculty_name']) . '",';
	$tmp .= '"number_post": "' . $row['COUNT(faculty_newfeeds.faculty_id)']. '"';
	// array_push($myArray, (object)[
	// 	'id' => $row['faculty_id'],
	// 	'faculty_name' => $row['faculty_name'],
	// 	'number_student' => $row['sum(number_student)'],
	// ]);
	if($count === $countMain){
		$tmp .= "}";
	}else{

		$tmp .= "},";
	}
}
$tmp .= "]";

print_r ($tmp);	

?>