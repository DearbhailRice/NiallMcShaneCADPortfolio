<! DOCTYPE HTML>
	
	
	<HTML>
	<head>	
	<?php
		include ('head.php');
	?>
	<?php
		include('conn.php');
		$sql="SELECT * FROM `Niall_CAD` ORDER BY `Year` DESC";
		$result= $conn->query($sql);
		
	
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
							Experience
						   </span>
						  
						</div>
					</div>
				</div>
				
				<div class= "row">
					<div class="col s1">
					</div>
					<div class="col s10 " >
						<div class="card-panel teal darken-2">
						   <span class="grey-text text-lighten-3">
							CDEnviro CustomCare Support Engineer (Nov 2018 to Present)
						   </span>
						  
						</div>
								
							
								 <p class="flow-text">
								 Organised the allocation of labour and resources to customers both in England and foreign sites while utilizing internal departments to deliver solutions tailored to customer needs.
								 <br>
								 <ul style="list-style-type:disc;" >
									<li> • Reviewed technical drawings, gaining in depth knowledge of customer plants, allowing for effective communication of issues and proposed solutions to meet client-specific needs.</li>
									<li> • Implemented knowledge and experience of customers’ bespoke plants and mechanical engineering principles to detect issues optimal solutions.</li>
									<li> • Built rapport and liaised with customers to facilitate continuity of service consistent with business brand.</li>
									<li> • Planned job specific training for site engineers and equipment maintenance.</li>
									<li> • Arranged appropriate and timely machine hire for company projects.</li>
									<li> • Organised maintenance inspections visits, including completion of post maintenance documentation and quotes along with any subsequent work required with the customer.</li>
									<li> • Generated Risk assessments and method statements (RAMS) for individual projects and standardised the format to increase efficiency and accuracy.</li>
								</ul>
							
								 </p>
								 
						<div class="card-panel teal darken-2">
						   <span class="grey-text text-lighten-3">
							aPriori Quality Assurance Engineer (Sep 2017 – Oct 2018)
						   </span>
						  
						</div>
						
						
								<p class="flow-text">
								 Applied manufacturing engineering principles in an agile software development environment in order to quality test software for projecting manufacturing costs, ensuring product excellence.
								 <br>
								 <ul style="list-style-type:disc;" >
									<li> • Used CAD and created test parts using plastic moulding and other manufacturing processes to demonstrate structures which would be difficult to manufacture</li>
									<li> • Working in an agile management environment</li>
									<li> • Learned quickly on the job in areas such as cloud computing with AWS, and quality assurance. Quickly adapted and learned new technologies and documentation systems.</li>
									<li> • Communicated dynamically with colleagues from a variety of professional backgrounds in international teams to work towards a common goal</li>
									<li> •Appropriately communicated and documented identified bugs and reproducing steps, succinctly to software developers and verified resolutions</li>
									
								</ul>
							
								 </p>
								 
								 <div class="card-panel teal darken-2">
						   <span class="grey-text text-lighten-3">
							CDEnviro CustomCare Placement Engineer (Jun 2015 - Aug 2016)
						   </span>
						  
						</div>
							<p class="flow-text">	 
								 
								Worked as part of CDEnviro’s CustomCare team to deliver high quality customer service to minimize downtime and add
								value to both the customers sites and the department.
								<br>
								<ul style="list-style-type:disc;" >
									<li>• Identified the root cause of customer issues, coordinated with other departments to order the parts and work required</li>
									<li>• Fostered relationships with suppliers and customers to encourage repeat business</li>
									<li>• Used technical drawings to inform own knowledge of plant allowing succinct and accurate communication of the issue and proposed solution to customers.</li>
									<li>• Redesigned the format of preventive maintenance inspection (PMI) reports and completed appropriate for each site.</li>
									<li>• Researched and developed solutions for ongoing problems for both the CustomCare department and customers</li>
									<li>• Researched potential growth markets for future sales</li>
								</ul>									
						
					</div>
					<div class="col s1">
					</div>
				</div>
				
				
			 
				
			<?php
			include('footer.php');
			?>
			
			
		
		
		
		</div>
    </body>
  </html>