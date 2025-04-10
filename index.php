<?php require_once "database.php"; ?>
<?php require_once "header.php"; ?>        
        <?php require_once "search.php"; ?>
<body>
        <section class="content">
			
         <?php
			// This is action to search result
			if ($_SERVER["REQUEST_METHOD"] == "POST") {
				
				$searchKeyword = trim($_POST["search_keyword"]);
				$sql = "SELECT * FROM birds WHERE bird_name LIKE '%" . $searchKeyword . "%'";
				$result = $conn->query($sql);
				
				?><div class="container"><?php
				// Check result exists
				if ($result->num_rows > 0) {
					
					echo "<table class='table table-bordered ' style='margin-top: 6rem!important;margin-bottom: 6rem!important;'>
							
						<thead>
							<th>Number</th>
							<th>Bird name</th>
							<th>Scientific name</th>
							<th>Action </th>

						</thead>
					";

					// output data of each row
					$count=1;
					while ($row = $result->fetch_assoc()) {
						$id= $row["id"];
						$name= $row["bird_name"];
						$sname= $row["scientific_name"];
						$birdImageFilePath = "assets/birds_images/" . $row["bird_image"];
						$birdVoiceFilePath = "assets/birds_voice/" . $row["bird_voice"];
						$birdDetailspage = "details.php?id=" . $row["id"];
						echo "<tbody> 
									<tr>
										<td>$count</td>
										<td>$name</td>	
										<td>$sname</td>	
										<td><a href='viewdetails.php?id=$id' type='button' class='btn btn-warning'>View</a></td>	
									</tr>
							   </tbody>";
							   $count++;
							
					}
				} else {
					echo "<script>alert('Result not fund')</script>";
				}
			}?>
			</div><?php
			$conn->close();
			?>
        </section>
	
</body>
</html>