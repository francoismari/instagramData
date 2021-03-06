<?php
include('session.php');
$string = file_get_contents($_SESSION['URL']."/comments.json");
$json = json_decode($string, true);
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Comments - Instagram Data</title>
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
			<p class="lead">You need to upload the file "comments.json" in the json folder to see the comments below.</p>
			<h4><strong>Comments (order by date)</strong></h4>
			<br>

<?php
foreach ($json as $key => $value) {
	if (!is_array($value)) {
		echo $key . '=>' . $value . '<br />';
	} else {
		foreach ($value as $key => $val) {
			echo 'N<sup>o</sup>'.$key.' - To '.$val[2].' : ' . $val[1] . '<br>Date : '.$val[0].'<br><hr>';
		}
	}
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
