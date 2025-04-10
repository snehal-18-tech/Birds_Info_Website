<?php require_once "database.php"; ?>
<?php require_once "header.php"; ?>
<?php
	$sql = "SELECT * FROM birds WHERE id = '" . $_GET["id"] . "'";
?>
<section class="sec1"></section>
      
        <section class="content">
		<button onclick="history.back()">  Back </button> <br><br>
         <?php
		 
			$sql = "SELECT * FROM birds WHERE id = '" . $_GET["id"] . "'";

			if ($result = $conn->query($sql)) {
				while ($row = $result->fetch_row()) {
					$birdImageFilePath = "assets/birds_images/" . $row[8];
					$birdVoiceFilePath = "assets/birds_voice/" . $row[9];

					$birdName = $row[1];
					$scientificName = $row[2];
					$birdSize = $row[3];
					$numberOfSpecies = $row[4];
					$habitat = $row[5];
					$dietAndHunting = $row[6];
					$characteristics = $row[7];

					echo "<b>Bird name:</b> " . $birdName . "<br><br>";
					echo "<b>Scientific name:</b> " . $scientificName . "<br><br>";
					echo "<b>Bird size:</b> " . $birdSize . "<br><br>";
					echo "<b>Number of species:</b> " . $numberOfSpecies . "<br><br>";
					echo "<b>Habitat:</b> " . $habitat . "<br><br>";
					echo "<b>Diet and hunting:</b> " . $dietAndHunting . "<br><br>";
					echo "<b>Characteristics:</b>" . $characteristics . "<br><br>";
					echo "<b>Bird Image:</b><img src='" .
						$birdImageFilePath .
						"' alt='" .
						$birdName .
						"' title='" .
						$birdName .
						"' width='300' height='300'><br><br>";
					echo "<b>Bird Sound:</b><audio controls><source src='" .
						$birdVoiceFilePath .
						"' type='audio/mpeg'>
				Your browser does not support the audio element.</audio><br><br>";
				}
				$result->free_result();
			}

			$conn->close();
			?>
        </section>
	</body>
</body>
</html>