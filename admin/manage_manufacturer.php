<?PHP include('./header.php') ?>
	<!-- start: Header -->
	
		<div class="container-fluid-full">
		<div class="row-fluid">
				
			<!-- start: Main Menu -->
			<?PHP include('./sidebar.php') ?>
			<!-- end: Main Menu -->
			
			<noscript>
				<div class="alert alert-block span10">
					<h4 class="alert-heading">Warning!</h4>
					<p>You need to have <a href="http://en.wikipedia.org/wiki/JavaScript" target="_blank">JavaScript</a> enabled to use this site.</p>
				</div>
			</noscript>
			
			<!-- start: Content -->
			<div id="content" class="span10">
			
			
			<ul class="breadcrumb">
				<li>
					<i class="icon-home"></i>
					<a href="index.html">Home</a> 
					<i class="icon-angle-right"></i>
				</li>
				<li><a href="#">Tables</a></li>
			</ul>

			<div class="row-fluid sortable">		
				<div class="box span12">
					<div class="box-header" data-original-title>
						<h2><i class="halflings-icon user"></i><span class="break"></span>Members</h2>
						<div class="box-icon">
							<a href="#" class="btn-setting"><i class="halflings-icon wrench"></i></a>
							<a href="#" class="btn-minimize"><i class="halflings-icon chevron-up"></i></a>
							<a href="#" class="btn-close"><i class="halflings-icon remove"></i></a>
						</div>
					</div>
					<div class="box-content">
						<table class="table table-striped table-bordered bootstrap-datatable datatable">
						  <thead>
							  <tr>
								  <th>Category Name</th>
								  <th>Category Description</th>
								  
								  <th>Status</th>
								  <th>Actions</th>
							  </tr>
						  </thead>   
                                                  
                                                  <?PHP 
                                                  include('./database/admin.php');
                                                  $manufacturer_info=new Admin();
                                                  $data=$manufacturer_info->view_manufacturer();
                                                  
                                                  while($row=  mysqli_fetch_array($data)){
                                                  
                                                  ?>
                                                  
						  <tbody>
							<tr>
								<td> <?PHP echo $row['manufacturer_name'] ?></td>
								<td class="center"><?PHP echo $row['manufacturer_desc'] ?></td>
								
								<td class="center">
                                                                    <?PHP if($row['publication_status']==1) { ?>
									<span class="label label-success">Published</span>
                                                                    <?PHP } 
                                                                    else{  ?>
                                                                        
                                                                        <span class="label label-important">Unpublished</span>
                                             
                                                                    <?PHP } ?>
								</td>
								<td class="center">
									
                                                                            <?PHP if($row['publication_status']==1){ ?>
                                                                    <a class="btn btn-success" href="update_manufacturer_status.php?id=<?PHP echo $row['manufacturer_id'] ?>">
										<i class="halflings-icon white thumbs-up"></i> 
                                                                            <?PHP } else { ?>
									</a>
                                                                    <a class="btn btn-danger" href="update_manufacturer_status.php?id=<?PHP echo $row['manufacturer_id'] ?>">
										<i class="halflings-icon white thumbs-down"></i> 
                                                                            <?PHP }  ?>
									</a>
                                                                    
                                                                    <a class="btn btn-info" href="update_manufacturer.php?id=<?PHP echo $row['manufacturer_id'] ?>">
										<i class="halflings-icon white edit"></i>  
									</a>
									<a class="btn btn-danger" href="delete_manufacturer.php?id=<?PHP echo $row['manufacturer_id'] ?>" onclick="return confirm('Are you sure you want to delete this item?')" >
										<i class="halflings-icon white trash"></i> 
									</a>
								</td>
							</tr>
							
							
							
							
						  </tbody>
                                                  
                                                  <?PHP } ?>
					  </table>            
					</div>
				</div><!--/span-->
			
			</div><!--/row-->

			
			
			
    

	</div><!--/.fluid-container-->
	
			<!-- end: Content -->
		</div><!--/#content.span10-->
		</div><!--/fluid-row-->
		
	<div class="modal hide fade" id="myModal">
		<div class="modal-header">
			<button type="button" class="close" data-dismiss="modal">×</button>
			<h3>Settings</h3>
		</div>
		<div class="modal-body">
			<p>Here settings can be configured...</p>
		</div>
		<div class="modal-footer">
			<a href="#" class="btn" data-dismiss="modal">Close</a>
			<a href="#" class="btn btn-primary">Save changes</a>
		</div>
	</div>
	
	<div class="clearfix"></div>
	
	<footer>

		<p>
			<span style="text-align:left;float:left">&copy; 2013 <a href="http://jiji262.github.io/Bootstrap_Metro_Dashboard/" alt="Bootstrap_Metro_Dashboard">Bootstrap Metro Dashboard</a></span>
			
		</p>

	</footer>
	
	<!-- start: JavaScript-->

		<script src="js/jquery-1.9.1.min.js"></script>
	<script src="js/jquery-migrate-1.0.0.min.js"></script>
	
		<script src="js/jquery-ui-1.10.0.custom.min.js"></script>
	
		<script src="js/jquery.ui.touch-punch.js"></script>
	
		<script src="js/modernizr.js"></script>
	
		<script src="js/bootstrap.min.js"></script>
	
		<script src="js/jquery.cookie.js"></script>
	
		<script src='js/fullcalendar.min.js'></script>
	
		<script src='js/jquery.dataTables.min.js'></script>

		<script src="js/excanvas.js"></script>
	<script src="js/jquery.flot.js"></script>
	<script src="js/jquery.flot.pie.js"></script>
	<script src="js/jquery.flot.stack.js"></script>
	<script src="js/jquery.flot.resize.min.js"></script>
	
		<script src="js/jquery.chosen.min.js"></script>
	
		<script src="js/jquery.uniform.min.js"></script>
		
		<script src="js/jquery.cleditor.min.js"></script>
	
		<script src="js/jquery.noty.js"></script>
	
		<script src="js/jquery.elfinder.min.js"></script>
	
		<script src="js/jquery.raty.min.js"></script>
	
		<script src="js/jquery.iphone.toggle.js"></script>
	
		<script src="js/jquery.uploadify-3.1.min.js"></script>
	
		<script src="js/jquery.gritter.min.js"></script>
	
		<script src="js/jquery.imagesloaded.js"></script>
	
		<script src="js/jquery.masonry.min.js"></script>
	
		<script src="js/jquery.knob.modified.js"></script>
	
		<script src="js/jquery.sparkline.min.js"></script>
	
		<script src="js/counter.js"></script>
	
		<script src="js/retina.js"></script>

		<script src="js/custom.js"></script>
	<!-- end: JavaScript-->
	
</body>
</html>
