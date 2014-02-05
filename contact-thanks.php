<?php

$pageTitle = "Contact Jody";
$section = "contact";
$description = "Thank you page for contact me form";
include('includes/header.php');
?>
    <div class="container">
<div class="row">
	<div class="span4">
	</div>

	<div class="span4">
		<legend>Email me:</legend>
		<div class="well">
			<p>Thanks for the email!</p>
		</div>
	</div>
</div>
<script type="text/javascript">
	mixpanel.track("Contact form submitted!")
</script>
<?php include('includes/footer.php'); ?>