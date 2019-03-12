<!doctype html>

<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title> Project X </title>
<link rel="stylesheet" href="stilark.css">
</head>
<body>

<?php
$tjener = "localhost";
$brukernavn = "root";
$passord = "";
$database = "avstemming";

$kobling = new mysqli($tjener,$brukernavn,$passord,$database);

if ($kobling->connect_error) {
	die ("noe gikk galt: " . $kobling->connect_error);
	
}



?>

<div class="top"> 
		<div class="top1">
		<p>årets spiller</p>
		</div>
		<div class="top2">	
		</div>
		<div class="top3">
		</div>
	</div>


<div class="innpakning">	
	
		
	
		<div class="innpakning2">
			
			
			<div class="boks1">
			
			</div>
			
			<div class="boks1"> 
				
			</div>
			
			<div class="boks1"> 
				
			</div>
			
			<div class="boks1"> 
				
			</div>
	
			<div class="boks1"> 
				
			</div>
			
			<div class="boks1"> 
				
			</div>
			
			<div class="boks1"> 
				
			</div>
			
			<div class="boks1"> 
				
			</div>
			
			<div class="boks1"> 
				
			</div>
			
	
		</div> <!-- innpakning2 -->	
	
	<div class="footer">  </div>
	

</div> <!-- innpakning -->


</body>

</html>
