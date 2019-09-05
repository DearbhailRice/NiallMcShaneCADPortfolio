<! DOCTYPE HTML>
	
	
	<HTML>
	<head>	
	<?php
		include ('head.php');
	?>
	<?php
		include('conn.php');
	?>
	</head>
    <body>
		
		<div class="container">
			<?php
				include ('navBar.php');
			?>
				<div class= "row">
					<div class= "col s12">
						<div class="card-panel teal darken-4">
						   <span class="grey-text text-lighten-5">
							Welcome 
						   </span>
						  
						</div>
					</div>
				</div>
				
				<div class= "row">
					<div class="col s12" id='bio'>
					
								<img src="img/niallPort.jpeg" align="right" id='niallPhoto'> 
								
								 <p class="flow-text">
								 I am a hardworking, driven and creative engineer seeking a new opportunity to further develop my engineering experience in both design and manufacture with the goal of achieving the level of chartered engineer.
								<br>You can view my CAD portfolio below and please do not hesitate to contact me if you wish to further discuss my work.
								<br><br>
								<br>Sincerely
								<br><span class="signature">Niall McShane</span>
								 </p>
						
					</div>
				</div>
				
				
				
				<div class= "row">
					<div class="col s12">
						<div class="card-panel teal darken-4">
						   <span class="grey-text text-lighten-5">
							CAD Portfolio
						   </span>
						  
						</div>
					</div>
				
				</div>
			
			 	<?php
					include('cadDrawings.php');
			?>
				
			<?php
			include('footer.php');
			?>
			
			
		
		
		
		</div>
    </body>
  </html>