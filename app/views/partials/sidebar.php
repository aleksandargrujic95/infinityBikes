

<div id="sidebar">
				<div id="sidebarTop">
					<h3>Brends</h3>
					<ul>
						<?php 				
						foreach($brends as $row){						
						 ?>
					    <li alt=""><div class="brend">
					    		<a href="?brend=<?php echo $row->id?>"><?php echo $row->name ?></a><img src="public/images/<?php echo $row->image?>">
					    	</div>
						</li><br>
					    <?php 
						}
					     ?>
					    
					</ul>
				</div>
				
				
			</div>