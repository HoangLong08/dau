<?php 
include './Components/Commom/Header.php' ;
include './Constant/variableConst.php';
include './Components/Commom/Sidebar.php'
?>



<div class="content">
	<div class="d-sm-flex align-items-center justify-content-between mb-4">
		<h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
		<a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm">
			<i class="fas fa-download fa-sm text-white-50"></i> 
			Generate Report
		</a>
	</div>
	<div class="row">
		<div class="col-md-6">
		<div id="columnchart_values" ></div>
		</div>
		<div class="col-md-6">
		</div>
	</div>
</div>

<script src="/AreaAdminDau/Asset/Js/main.js"></script>

<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
<script type="text/javascript">
	var arrayNumber =[] ;
	$.ajax({
		url:"./Php/Process/proccessChartStudent.php",
		type: "GET",
		success:function(resp){
			resp = JSON.parse(resp);
			Object.keys(resp).map((item, key) => {
			 	arrayNumber.push(resp[item]);
			})
		}
	});
	console.log("arrayNumber: ", Object.keys(arrayNumber))

	google.charts.load("current", {packages:['corechart']});
	google.charts.setOnLoadCallback(drawChart);
	function drawChart() {
	var data = google.visualization.arrayToDataTable([
		["Element", "Density", { role: "style" } ],
		["Copper", 8.94, "#b87333"],
		["Silver", 10.49, "silver"],
		["Gold", 19.30, "gold"],
		["Platinum", 21.45, "color: #e5e4e2"]
	]);

	var view = new google.visualization.DataView(data);
	view.setColumns([0, 1,
							{ calc: "stringify",
								sourceColumn: 1,
								type: "string",
								role: "annotation" },
							2]);

	var options = {
		title: "Biểu đồ số lượng sinh viên ",
		width: 600,
		height: 400,
		bar: {groupWidth: "95%"},
		legend: { position: "none" },
	};
	var chart = new google.visualization.ColumnChart(document.getElementById("columnchart_values"));
	chart.draw(view, options);
}
</script>
