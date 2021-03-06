

<?PHP  require_once('header.php') ;
       include('./database/admin.php');
       ob_start();
?>
	<!-- start: Header -->
	
		<div class="container-fluid-full">
		<div class="row-fluid">
				
			<!-- start: Main Menu -->
			<?PHP include('sidebar.php') ?>
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
				<li><a href="#">Dashboard</a></li>
			</ul>

				

			
			
					
						
		<div class="box span12">
					<div class="box-header" data-original-title>
						<h2><i class="halflings-icon edit"></i><span class="break"></span>Form Elements</h2>
						<div class="box-icon">
							<a href="#" class="btn-setting"><i class="halflings-icon wrench"></i></a>
							<a href="#" class="btn-minimize"><i class="halflings-icon chevron-up"></i></a>
							<a href="#" class="btn-close"><i class="halflings-icon remove"></i></a>
						</div>
					</div>
                    
                    
                                            <?PHP 
                                            
                                            $manufacturer_id=$_GET['id'];
                                            $manufacturer_info=new Admin();
                                            $manufacturer_data=$manufacturer_info->view_manufacturer_by_id($manufacturer_id);
                                            $row=  mysqli_fetch_array($manufacturer_data);
                                            
                                            if($_SERVER['REQUEST_METHOD']=='POST'){
                                                extract($_POST);
                                               // print_r($_POST);
                                                
                                               // $edit_manufacturer=new Admin();
                                                $edit=$manufacturer_info->update_manufacturer($name, $desc, $publication_status,$manufacturer_id);
                                                
                                                if($edit){
                                                   // ob_end_flush();
                                                    $message="Update Manufacturer Date";  
                                                    }
                                               // }
                                                else{
                                                    $message="Error To Update";
                                                }
                                                
                                            }
                                            
                                            ?>
					<div class="box-content">
                                            <form class="form-horizontal" method="post" name="update_manufacturer">
						  <fieldset>
                                                      <h2 style="color: green"><?PHP if (isset($message)) echo $message; ?></h2>
							<div class="control-group">
							  <label class="control-label" for="typeahead">Manufacturer Name </label>
							  <div class="controls">
                                                              <input type="text" class="span6 typeahead" name="name" value="<?PHP  echo $row['manufacturer_name']?>">
								
							  </div>
							</div>
							
							<div class="control-group hidden-phone"
							  <label class="control-label" for="textarea2">Manufacturer Description</label>
							  <div class="controls">
                                                              <textarea name="desc" id="textarea2" rows="3"  ><?PHP echo $row['manufacturer_desc'] ?></textarea>
							  </div>
							</div>
                                                      
                                                      
                                                      <!--using javascript-->
                                                      <div class="control-group">
							  <label class="control-label" for="date01">Status</label>
							  <div class="controls">
                                                              <select name="publication_status">
                                                                  <option>Select Status</option>
                                                                  <option value="1">Published</option>
                                                                  <option value="0">Unpublished</option>
                                                              </select>
							  </div>
							</div>

							       
							
							<div class="form-actions">
							  <button type="submit" class="btn btn-primary">Save changes</button>
							  <button type="reset" class="btn">Cancel</button>
							</div>
						  </fieldset>
						</form>   

					</div>
				</div>	
			
		
			
		
			
       

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
	
        
        <script>
        document.forms['update_manufacturer'].elements['publication_status'].value='<?PHP echo $row['publication_status'] ?>'
        </script>
</body>
</html>
