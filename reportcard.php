<?php 
	$pageTitle = "Web Dev Report Card";
	$section = "report";
	$description = "Badges I've earned at teamtreehouse.com.";
	include('includes/header.php');
?>
	<!-- Badges Container -->
	<div class="badge-container">
	  
	  <!-- Title Markup -->
	  <h1 id="treehouse-count"></h1>
	  </br>
	  <!-- ul tag where badge li's are appended -->
	  <ul id="badges"></ul>
	</div>

<?php
	include('includes/footer.php');
?>