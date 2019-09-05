<?php
		include('conn.php');
		$sql="SELECT * FROM `niall_projects` order BY projectDate DESC;";
		$result= $conn->query($sql);
		
	
	?>

<?php
while($row=$result->fetch_assoc()){
							$Title=$row['projectTitle'];
							$description =$row['projectSummary'];
							$imgPath=$row['projectImg'];
							$rowid=$row['projectId'];
					
							echo "
								<div class='row'>
								 
									 <div class='col s2 '> 
									 </div>
									 
									 <div class='col s7 '>
									 
									  <div class='card'>
										<div class='card-image'>
										<a href='view.php?row=$rowid'>
										  <img src='$imgPath' >
										  </a>
										  <span class='card-title grey-text'>$Title</span>
										  
										</div>
										<div class='card-content'>
										  <p>$description</p>
										</div>
										<div class='card-action'>
										  <a href='view.php?row=$rowid'>View</a>
										</div>
									  </div>
									   <div class='col s2 m2'> 
										</div>
																	
																	 
									</div>
								</div>
            
							
							";
					}
					
?>