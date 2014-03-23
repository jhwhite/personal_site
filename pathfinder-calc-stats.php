<?php 
$pageTitle = "Pathfinder Ability Calculator Stats";
$section = "stats";
$description = "Line chart for pathfinder ability score calculator statistics";
include('includes/header.php'); ?>
    <div class="container">

		<canvas id="canvas" height="600" width="1000"></canvas>


	<script>

		var lineChartData = {
			labels : ["2/20/2014","2/21/2014","2/22/2014","2/23/2014","2/24/2014","2/25/2014","2/26/2014","2/27/2014","2/28/2014","3/1/2014","3/2/2014","3/3/2014","3/4/2014","3/5/2014","3/6/2014","3/7/2014","3/8/2014","3/9/2014","3/10/2014","3/11/2014","3/12/2014","3/13/2014","3/14/2014","3/15/2014","3/16/2014","3/17/2014","3/18/2014","3/19/2014","3/20/2014","3/21/2014","3/22/2014"],
			datasets : [
				{
					fillColor : "rgba(0, 0, 0, 0)",
					strokeColor : "rgba(225,31,55,1)",
					pointColor : "rgba(225,31,55,1)",
					pointStrokeColor : "#fff",
					data : [206,215,204,226,188,188,226,184,164,188,191,183,213,223,145,207,218,191,201,216,188,155,190,190,184,152,207,169,183,231,155]
				},
				{
					fillColor : "rgba(0, 0, 0, 0)",
					strokeColor : "rgba(46,84,155,1)",
					pointColor : "rgba(46,84,155,1)",
					pointStrokeColor : "#fff",
					data : [156,176,155,171,141,145,176,148,114,153,194,156,166,141,137,174,174,168,170,167,126,160,134,154,156,125,129,113,142,170,174]
				},
				{
					fillColor : "rgba(0, 0, 0, 0)",
					strokeColor : "rgba(84,187,229,1)",
					pointColor : "rgba(84,187,229,1)",
					pointStrokeColor : "#fff",
					data : [56,75,59,80,57,51,66,63,37,50,73,43,78,47,54,72,71,57,66,80,58,82,74,69,59,53,70,79,115,59,61]
				},
				{
					fillColor : "rgba(0, 0, 0, 0)",
					strokeColor : "rgba(41,165,169,1)",
					pointColor : "rgba(41,165,169,1)",
					pointStrokeColor : "#fff",
					data : [121,109,118,139,108,124,146,99,102,101,146,96,118,134,102,98,139,142,178,178,109,131,113,102,132,116,122,53,53,129,131]

				},
				{
					fillColor : "rgba(0, 0, 0, 0)",
					strokeColor : "rgba(255,217,99,1)",
					pointColor : "rgba(255,217,99,1)",
					pointStrokeColor : "#fff",
					data : [30,46,46,45,31,28,42,38,23,30,65,40,30,48,23,37,42,54,31,53,26,35,35,29,22,23,34,18,28,43,52]
				}
			]
			
		}

	var myLine = new Chart(document.getElementById("canvas").getContext("2d")).Line(lineChartData);
	
	</script>
<?php include('includes/footer.php'); ?>