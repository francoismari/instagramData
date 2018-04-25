<?php
include('session.php');	
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Instagram Data 1.0 by @frrancois_</title>
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
			<p class="lead">Check all the data that Instagram has from you on a clear interface</p>
			<br>
			<hr>
			</div>
			<br>
			<p class="lead">Your folder URL : <strong><?= $_SESSION['URL'] ?></strong> (<a href="index.php">edit</a>)</p>
			<h4><strong>Main informations</strong></h4>
			<br>
			<div class="row">
				
				<div class="col-sm">
				<div class="card" style="width:200px">
    <div class="card-body">
      <h4 class="card-title"><strong><span class="fa fa-commenting"></span> &nbspComments</strong></h4>
      <p class="card-text">Check all the comments that you post</p>
      <a href="comments.php" class="btn btn-primary">Check</a>
    </div>
  </div>
				</div>
				
								<div class="col-sm">
				<div class="card" style="width:200px">
    <div class="card-body">
      <h4 class="card-title"><strong><span class="fa fa-users"></span> &nbspContacts</strong></h4>
      <p class="card-text">Check all the contacts that Instagram have saved</p>
      <a href="contacts.php" class="btn btn-primary">Check</a>
    </div>
  </div>
				</div>
				
				
								<div class="col-sm">
				<div class="card" style="width:200px">
    <div class="card-body">
      <h4 class="card-title"><strong><span class="fa fa-heart"></span> &nbspLikes</strong></h4>
      <p class="card-text">Check all the likes that you put on a post</p>
      <a href="likes.php" class="btn btn-primary">Check</a>
    </div>
  </div>
				</div>
				
								<div class="col-sm">
				<div class="card" style="width:200px">
    <div class="card-body">
      <h4 class="card-title"><strong><span class="fa fa-comments"></span> &nbspMessages</strong></h4>
      <p class="card-text">Check all the messages that you sent</p>
      <a href="messages.php" class="btn btn-primary">Check</a>
    </div>
  </div>
				</div>
				
				
				
				


			</div>
			<br>
			<br>
						<div class="row">
				
				<div class="col-sm">
				<div class="card" style="width:200px">
    <div class="card-body">
      <h4 class="card-title"><strong><span class="fa fa-search"></span> &nbspSearches</strong></h4>
      <p class="card-text">Check all the searches that you've done</p>
      <a href="searches.php" class="btn btn-primary">Check</a>
    </div>
  </div>
				</div>
				
			
		</div>
		
		<br>
		<p class="lead">More information of your account are coming soon !</p>
		
		<h4><strong>Your profil</strong></h4>
		<br>
		<p class="lead">This feature can only be used if you have installed Instagram Data on your server.</p>
<?php
 $dir = $_SESSION['URL']."/profile/*";
 foreach(glob($dir) as $file)  
 {  
	 $dir2 = $file."/*.jpg";

	  foreach(glob($dir2) as $file2)  
	  {
		  echo "<img src='".$file2."' height='200' width='200' class='rounded-circle'/>";
	  }
 }
 ?>
		<br>
		<br>
				<h4><strong>Stories (they are not deleted after 24 hours!)</strong></h4>
		<br>
		<p class="lead">This feature can only be used if you have installed Instagram Data on your server.</p>
<?php
 $dir = $_SESSION['URL']."/stories/*";
 foreach(glob($dir) as $file)  
 {  
	 $dir2 = $file."/*.jpg";

	  foreach(glob($dir2) as $file2)  
	  {
		  echo "<img src='".$file2."' height='340' width='200' class='rounded'/>&nbsp&nbsp&nbsp&nbsp&nbsp";
	  }
 }
 ?>

		<footer>
			<?php
			include('includes/footer.php');	
			?>
		</footer>
		
	</body>
	
</html>
