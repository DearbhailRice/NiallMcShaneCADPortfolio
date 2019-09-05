<! DOCTYPE HTML>
	
	
	<HTML>
	<head>	
		<?php
			include('conn.php');
			$id=$_GET['row'];
			$sql="SELECT * FROM `niall_cad` Inner Join niall_projects On niall_cad.projectID = niall_projects.projectID WHERE niall_cad.projectId=$id ";
			$result= $conn->query($sql);
			
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
						<div class='row'>
									
									<div class='col s12 '>
									
										<div class='carousel'>
					
					<?PHP 
					
						while($row=$result->fetch_assoc()){
							$Title=$row['cadTitle'];
							$description =$row['cadDesc'];
							$imgPath=$row['CADImg'];
							$rowid=$row['cadID'];
							$fullDesc= $row['projectDesc'];
					
							echo "
							
											<a class='carousel-item' href='#$cadTitle'onclick='myFunction()'><img class='materialboxed ' width='650' src='$imgPath'><span class='card-title grey-text text-darken-2'>$Title<br> $description </span></a>
											
										</div>
									</div>
									<div class='col s12 '>
									  <div class='card'id= 'ProjectInfoCard'>
										<div class='card-content grey-text'>
										  <span class='card-title'>$Title</span>
										  <p> $fullDesc </p>
										</div>
										
									  </div>
									</div>
								 </div>
								
							
							";
						}					
						/*<div class='card-image'>
										<a href='view.php?row=$rowid'>
										  <img src=$imgPath >
										  </a>
										  <span class='card-title'>$Title</span>
										  
										</div>*/
						  ?>
						</div>
					</div>
				
					
				</div>
				
			<?php
			include('footer.php');
			?>
			
			
		
		<script src='jsView.js'></script>
		
		</div>
    </body>
  </html>
  <!--<img class='materialboxed ' width='650' src=$imgPath>-->