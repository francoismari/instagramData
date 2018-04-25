<?php
session_start();
if(isset($_POST['access']))
{
	if(isset($_POST['urlAccess']) AND !empty($_POST['urlAccess']))
	{
		$urlAccess = htmlspecialchars($_POST['urlAccess']);
		
		if (filter_var($urlAccess, FILTER_VALIDATE_URL) === FALSE) {
			$error = "<strong>Please enter a valid URL</strong>";
		}
		else
		{
			header('Location: config.php?accessUrl='.$urlAccess.'');
		}
	}
	else
	{
		$error = "<strong>Please enter an URL</strong>";
	}
}
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Instagram Data</title>
		<?php
		include('includes/head.php');
		?>
	</head>
	
	<body>
		<div class="container">
			<br>
			<br>
			<br>
			<br>
			<br>
			<br>
			<br>
			<h1><strong><span class="fa fa-instagram"></span>&nbspWelcome on Instagram Data</strong></h1>
			<br>
			<form action="" method="post">
			<div class="form-group">
			    <input class="form-control form-control-lg" type="text" placeholder="Put the URL here..." name="urlAccess">
			    <br>
			    <button type="submit" class="btn btn-primary float-right" name="access">Access &nbsp<span class="fa fa-arrow-right"></span></button>
			    <br>
			    <br>
			</div>
			</form>
			<p class="lead">
				<?php
				if(isset($error))
				{
					echo $error."<br>";
				}	
				?>
				Please put all the files and folders inside on a secure server (do not move everything from the root folder!). Then retrieve the URL and put it there (without the / and the end), example : www.example.com/json
			</p>
		</div>
		
		<footer>
			<div class="container">
			<p class="lead">© @frrancois_ 2018 - Not affiliated with Instagram. <a href="//twitter.com/frrancois_" target="_blank" style="text-decoration: none"><span class="fa fa-twitter"></span> @frrancois_</a></p>
			</div>
		</footer>
	</body>
