<!DOCTYPE html>
	
	
	<html>
	<head>	
		<?php
			include('conn.php');
			$id=$_GET['row'];
			$sql="SELECT * FROM `niall_cad` Inner Join niall_projects On niall_cad.projectID = niall_projects.projectID WHERE niall_cad.projectId=$id ";
			$result= $conn->query($sql);
			
			$sql2="SELECT * FROM `niall_projects` where projectId=$id;";
			$result2= $conn->query($sql2);
			
			$sql3="SELECT * FROM `niall_projects` where projectId=$id;";
			$result3= $conn->query($sql3);
			
			include ('head.php');
		?>
	</head>
    <body>
		
		<div class="container">
			<?php
				include ('navBar.php');
			?>
				<div class= "row">
					<div class= "col s12">
					<?php	
							while($row=$result2->fetch_assoc()){
							$Title=$row['projectTitle'];
							$fullDesc =$row['projectDesc'];
							$rowid=$row['projectId'];
					
							echo "
							<div class='card-panel teal darken-4'>
						   <span class='grey-text text-lighten-5'>
							$Title <br>
							Click through images below:
						   </span>
						   
						  
						</div>";
							}
					?>
						<div class='row'>
									
							<div class='col s12 '>
									
								<div class='carousel large'>
					
									<?php
									
										while($row=$result->fetch_assoc()){
											$Title=$row['cadTitle'];
											$description =$row['cadDesc'];
											$imgPath=$row['cadImg'];
											$rowid=$row['cadID'];
											$fullDesc= $row['projectDesc'];
									
											echo "
												<a class='carousel-item' href='#$Title' onclick='myFunction()'> <img class='materialboxed ' width='650' src='$imgPath'><span class='card-title grey-text text-darken-2'> $Title<br> $description </span></a>
											";
											}		
											?>
								</div>
							</div>
						</div>
						
						
						</div>
					</div>
					<?php
							while($row=$result3->fetch_assoc()){
							$Title=$row['projectTitle'];
							$fullDesc =$row['projectDesc'];
							$rowid=$row['projectId'];
					
							echo "
							<div class='card 'id='ProjectInfoCard'>
						   <span class='card content grey-text '>
							$Title <br>
							<p>$fullDesc</p>
						   </span>
						   
						  
						</div>";
							
				}
					
				?>
				
			<?php
			include('footer.php');
			?>
					
		</div>

		<script src='jsView.js'></script>
		
	</body>
  </html>
