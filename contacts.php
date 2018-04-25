<?php
include('session.php');
$url = $_SESSION['URL'].'/contacts.json'; // path to your JSON file
$data = file_get_contents($url); // put the contents of the file into a variable
$characters = json_decode($data); // decode the JSON feed
?>
<html>
	<head>
		<title>Contacts - Instagram Data</title>
		<?php
		include('includes/head.php');
		?>
	</head>
	
	<body>
		
		<div class="container">
			<br>
			<br>
			<br>
			<div align="center">
			<h1><strong><span class="fa fa-instagram"></span> Discover more of your Instagram</strong></h1>
			<p class="lead">Check all the data that Instagram has from you</p>
			<br>
			<hr>
			</div>
			<a href="data.php" class="btn btn-primary"><span class="fa fa-chevron-left"></span> Back home</a><br><br>
			<p class="lead">You need to upload the file "contacts.json" in the json folder to see the comments below.</p>
			<h4><strong>Contacts (order by date)</strong></h4>
			<br>

			<?php
			  foreach ($characters as $character) {
				echo $character->first_name . ' '.$character->last_name.' ('.$character->contact.')<br><hr>';
			  }
			?>

		</div>
		
		<footer>
			<?php
			include('include/footer.php');	
			?>
		</footer>
		
	</body>
	
</html>
