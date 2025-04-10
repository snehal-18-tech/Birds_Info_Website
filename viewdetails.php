<?php require_once "database.php"; ?>
<!DOCTYPE html>
<html>

<head>
	<!-- Load Bootstrap -->

	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta charset="utf-8">
	
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
	<script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.slim.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
	<link rel="stylesheet" href="style.css">
	<script src="./javascript.js"></script>
	<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
	<script src="https://code.jquery.com/jquery-3.3.1.js"></script>
	<script type="text/javascript">
	$(window).on('scroll',function(){
		if($(window).scrollTop()){
			$('nav').addClass('black');
		}
		else{
			$('nav').removeClass('black');
		}
	})
			$(document).ready(function(){
			$('.menu h4').click(function(){
				$("nav ul").toggleClass("active")
		})
		})
	</script>
</head>

<body>
	
	<div>
		
		<div class="row" >
			<div class="container" style="padding-top: 100px;">
				<h1 class="text-success">
					<?php 
						$id=$_GET['id'];
					$sql = "SELECT * FROM birds WHERE id='$id'"; 
					$data = $conn->query($sql);
					while($row = $data->fetch_assoc()) 
					{
					$bname=$row['bird_name'];
					$sname=$row['scientific_name'];
					$bird_size=$row['bird_size'];
					$number_of_species=$row['number_of_species'];
					$habitat=$row['habitat'];
					$diet_and_hunting=$row['diet_and_hunting'];
					$characteristics=$row['characteristics'];
					$birdImageFilePath = "assets/birds_images/" . $row["bird_image"];
					$birdVoiceFilePath = "assets/birds_voice/" . $row["bird_voice"];
					}

					
					?>
					Name : <?php echo $bname;?>
				</h1>
				<h3>Scientific name : Aquila chrysaetos</h3>

				<div class="card w-60">
					<img src='<?php echo $birdImageFilePath ;?>'  height="600" class="card-img-top">
					<div class="card-body">
						<h5 class="card-title">SIZE</h5>
						<p class="card-text">IN INDIA SPOTTED EAGLE IS
							ABOUT 60 CM IN LENGTH AND
							HAS A WINGSPAN OF 150 CM
						</p>
					</div>
					<div class="card-body">
						<h5 class="card-title">NUMBER OF SPECIES</h5>
						<p class="card-text">THERE ARE OVER 24 SPECIES
							OF EAGLES IN INDIA
						</p>
					</div><div class="card-body">
						<h5 class="card-title">HABITAT</h5>
						<p class="card-text">EAGLES CAN BE FOUND IN WIDERANGE OF HABITATS,
							INCLUDING FORESTS,MOUNTAINS,
							GRASSLANDS AND COASTEL
							AREA.THEIR DISTRIBUTION IS GLOBAL
						</p>
					</div><div class="card-body">
						<h5 class="card-title">DIET AND HUNTING</h5>
						<p class="card-text">EAGLES ARE CARNIVOROUS
							BIRDS AND PRIMARILY FEED
							ON SMALL MEDIUM SIZED
							ANIMALS .TYPICAL DIECONSISTS OF FISH SMALL MAMMALS BIRDS REPTILES ETC .EAGLES ARE SKILLED HUNTERS USING THEIR SHARP TALONS TO CATCH AND KILL THEIR PREY
						</p>
					</div>
					<div class="card-body">
						<h5 class="card-title">CHARACTERISTICS																																																																																																																																													
						</h5>
						<p class="card-text">EAGLES ARE KNOWN FOR THEIR POWERFUL FLIGHT OFTEN SOARING AT GREAT HEIGHTS
							THEY HAVE EXCELLENT EYESIGHTWHICH ALLOWS THEM TO SPOT PREY FROM LARGE DISTANCE ALSO.THEY ARE LARGE SIZE ,SHARP BEAKS ,STRONG TALONS AND BROAD WINGSPAN
						</p>
					</div>
					<div class="card-body text-center">
						<audio controls> <source src='<?php echo $birdVoiceFilePath ;?>' type="audio/mpeg" > </audio>
					</div>
				</div>
			</div>
		</div>

	</div>
</body>

</html>