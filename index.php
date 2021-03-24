
<?php include("game.php"); ?>



<!DOCTYPE html>
<html>
<head>
	<title>RPS Game</title>
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
	
</head>
<body>
	<header>
		<h1 style="text-align: center;">Rock Paper Scissors</h1>
	</header>
	<section>

		


	<?php  
	for ($i=1; $i <51 ; $i++) { 
		?>
<div class="d-flex justify-content-center">
			<p> Iteration <?php echo $i; ?> </p>
		</div>

		<?php
		 echo rps();
	?>

	
		
			<div class="d-flex justify-content-center">
			<p>Result </p>
		</div>

	

	<?php 

echo result();
} 

	?>
	
	
	</section>
</body>
<script type="text/javascript" src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js"></script>
<script
  src="https://code.jquery.com/jquery-3.6.0.min.js"
  integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="
  crossorigin="anonymous"></script>
</html>
