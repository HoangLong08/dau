<?php 
include './Components/Commom/Header.php' ;
include './Constant/variableConst.php';
include './Components/Commom/Sidebar.php'
?>



<div class="content">
	<div class="d-sm-flex align-items-center justify-content-between mb-4">
		<h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
		<!-- <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm">
			<i class="fas fa-download fa-sm text-white-50"></i> 
			Generate Report
		</a> -->
	</div>
	<div class="row">
		<div class="col-md-6">
			<div id="columnchart_values" ></div>
		</div>
		<div class="col-md-6">
			<div id="piechart_3d" style="width: 900px; height: 500px;"></div>
		</div>
	</div>
	<div class="row">
		<div class="col-md-12">
			<div id="chart_div" style="width: 100%; height: 500px;"></div>
		</div>
	</div>
</div>

<script src="/AreaAdminDau/Asset/Js/main.js"></script>

<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
<script type="text/javascript">
	var arrayNumber = [] ;
	$.ajax({
		url:"./Php/Process/proccessChartStudent.php",
		type: "GET",
		success:function(res){	
			res = JSON.parse(res);
			res.forEach(element => arrayNumber.push(element));
			google.charts.load("current", {packages:['corechart']});
			google.charts.setOnLoadCallback(drawChart);
			function drawChart() {
				var data = new google.visualization.DataTable();
				data.addColumn('string', 'Khoa');
				data.addColumn('number', 'Số lượng sinh viên');
				data.addRows(res.length);
				for (i = 0; i < res.length; i++) {
					var tmp = res[i];
					var name = tmp['faculty_name'];
					data.setCell(i, 0, name);
					data.setCell(i, 1,  tmp['number_student']);
				}
			var view = new google.visualization.DataView(data);
			var options = {
				title: "Biểu đồ số lượng sinh viên các khoa",
				width: 600,
				height: 500,
				bar: {groupWidth: "95%"},
				legend: { position: "none" },
			};
			var chart = new google.visualization.ColumnChart(document.getElementById("columnchart_values"));
			chart.draw(view, options);
			}

		}
	});
</script>
<script type="text/javascript">
	$.ajax({
		url:"./Php/Process/proccessChartPost.php",
		type: "GET",
		success:function(res){
			res = JSON.parse(res);
			google.charts.load("current", {packages:["corechart"]});
			google.charts.setOnLoadCallback(drawChart);
			function drawChart() {
				var data = new google.visualization.DataTable();
				data.addColumn('string', 'Khoa');
				data.addColumn('number', 'Số lượng sinh viên');
				data.addRows(res.length);
				for (i = 0; i < res.length; i++) {
					var tmp = res[i];
					var name = tmp['faculty_name'];
					data.setCell(i, 0, name);
					data.setCell(i, 1,  tmp['number_post']);
				}

				var options = {
				title: 'BÀI VIẾT CỦA KHOA TRÊN HỆ THỐNG',
				is3D: true,
				};

				var chart = new google.visualization.PieChart(document.getElementById('piechart_3d'));
				chart.draw(data, options);
			}
		}
	});
</script>
<script type="text/javascript">
	$.ajax({
		url:"./Php/Process/proccessChartClub.php",
		type: "GET",
		success:function(res){
			res = JSON.parse(res);
			google.charts.load("current", {packages:["corechart"]});
			google.charts.setOnLoadCallback(drawChart);

			function drawChart() {
				var data = new google.visualization.DataTable();
				data.addColumn('string', 'year');
				data.addColumn('number', 'videos');
				data.addColumn('number', 'even - newfeed');
				data.addRows((res.length)+1);
					data.setCell(0, 0, '2020');
					data.setCell(0, 1, 1);
					data.setCell(0, 2, 0);
				for (i = 0; i < res.length; i++) {
					var tmp = res[i];
					console.log(tmp)
					data.setCell(i+1, 0, tmp['year']);
					data.setCell(i+1, 1, tmp['video']);
					data.setCell(i+1, 2,  tmp['even']);
				}
				var options = {
				title: 'TRUNG TÂM HỌC TẬP - GẮN KẾT CỘNG ĐỒNG (CEL)',
				};
				var chart = new google.visualization.AreaChart(document.getElementById('chart_div'));
				chart.draw(data, options);
			}
		}
	});
</script>