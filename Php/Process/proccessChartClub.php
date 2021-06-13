<?php 
require '../connect.php';
require '../executeQuery.php';
if(!isset($_SESSION)) { 
	session_start(); 
} 

$result = executeQuery($conn, "CALL procedureChartClub()");
$myArray = [];
$tmp = "[";
$count = mysqli_num_rows($result);
$countMain = 0;
while ($row = mysqli_fetch_array($result)) {
	$countMain++;
	$tmp .= "{";
	$tmp .= '"year": "' . $row['year(club_videos.create_at)'] . '",';
	$tmp .= '"video": "' . $row['COUNT(club_videos.id)'] . '",';
	$tmp .= '"even": "' . $row['COUNT(club_even_newfeeds.id)']. '"';
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