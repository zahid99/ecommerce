

<?PHP  include('header.php') ;
       include('./database/admin.php');
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

				

			
			
					
						
		<div class="row-fluid sortable">
				<div class="box span12">
					<div class="box-header" data-original-title>
						<h2><i class="halflings-icon edit"></i><span class="break"></span>Form Elements</h2>
						<div class="box-icon">
							<a href="#" class="btn-setting"><i class="halflings-icon wrench"></i></a>
							<a href="#" class="btn-minimize"><i class="halflings-icon chevron-up"></i></a>
							<a href="#" class="btn-close"><i class="halflings-icon remove"></i></a>
						</div>
					</div>
					<div class="box-content">
                                            
                                            <?PHP 
                                            $product_info=new Admin();
                                            $category_info=$product_info->view_category();
                                            $manufacturer_info=$product_info->view_manufacturer();
                                            
                                            if($_SERVER['REQUEST_METHOD']=='POST'){
                                                extract($_POST);
                                                extract($_FILES);
                                                print_r($_POST);
                                                
                                                $imgFile=$_FILES['product_pic']['name'];
                                                $tmp_dir=$_FILES['product_pic']['tmp_name'];
                                                $imgSize=$_FILES['product_pic']['size'];
                                                
                                                if(empty($imgFile)){
                                                    $message="Please Select image File";
                                                }
                                                else{
                                                    
                                                     $upload_dir = "product_image/"; // upload directory
 
                                               $imgExt = strtolower(pathinfo($imgFile,PATHINFO_EXTENSION)); // get image extension
  
                                                 // valid image extensions
                                               $valid_extensions = array('jpeg', 'jpg', 'png', 'gif'); // valid extensions
  
                                           // rename uploading image
                                         $userpic = rand(1000,1000000).".".$imgExt;
    
                                              // allow valid image file formats
                                                if(in_array($imgExt, $valid_extensions)){   
                                                 // Check file size '5MB'
                                              if($imgSize < 5000000)    {
                                               move_uploaded_file($tmp_dir,$upload_dir.$userpic);
                                                  }
                                                  else{
                                                 $errMSG = "Sorry, your file is too large.";
                                                 }
                                             }
                                                    else{
                                                   $errMSG = "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";  
                                                   }
                                                }
                                                
                                                $insert=$product_info->add_product($product_name, $category, $manufacturer, $product_price, $product_quantity, $re_order_lever, $featured_product, $short_desc, $long_desc, $userpic, $publication_status);
                                                if($insert){
                                                    echo "SUccessFully";
                                                }
                                                
                                            }
                                            ?>
                                            
                                            
                                            <form class="form-horizontal" method="post" enctype="multipart/form-data">
						  <fieldset>
							<div class="control-group">
							  <label class="control-label" for="typeahead">Product Name </label>
							  <div class="controls">
                                                              <input type="text" class="span6 typeahead" name="product_name" >
								
							  </div>
							</div>
							 <div class="control-group">
							  <label class="control-label" for="">Category Name</label>
							  <div class="controls">
                                                              <select name="category"> 
                                                                  <option>Select Category</option>
                                                                  

                                                                  <?PHP 
                                                                 
                                                                   while($row=  mysqli_fetch_array($category_info)){
                                                                   
                                                                  // echo $row[''];
                                                                  ?>
                                                                  
                                                                  <option value="<?PHP echo $row['category_id'] ?>"><?PHP echo $row['category_name'] ?></option>
                                                                      <?PHP }?>
                                                              </select>
							  </div>
							</div>
                                                      
                                                      
                                                        <div class="control-group">
							  <label class="control-label" for="">Manufacturer Name</label>
							  <div class="controls">
                                                              <select name="manufacturer">
                                                                  <option>Select Manufacturer</option>
                                                                  <?PHP 
                                                                  while($data=  mysqli_fetch_array($manufacturer_info)){
                                                                  ?>
                                                                  
                                                                  <option value="<?PHP echo $data['manufacturer_id'] ?>"><?PHP echo $data['manufacturer_name'] ?></option>
                                                                  <?PHP } ?>
                                                                  
                                                              </select>
							  </div>
							</div>
                                                      
                                                      <div class="control-group">
							  <label class="control-label" for="typeahead">Product price </label>
							  <div class="controls">
                                                              <input type="text" class="span6 typeahead" name="product_price" >
								
							  </div>
							</div>
                                                      
                                                      <div class="control-group">
							  <label class="control-label" for="typeahead">Product quantity </label>
							  <div class="controls">
                                                              <input type="text" class="span6 typeahead" name="product_quantity" >
								
							  </div>
							</div>
                                                      
                                                    
                                                      <div class="control-group">
							  <label class="control-label" for="typeahead">Re-order level </label>
							  <div class="controls">
                                                              <input type="text" class="span6 typeahead" name="re_order_lever" >
								
							  </div>
							</div>
                                                      
                                                      
                                                      <div class="control-group">
							  <label class="control-label" for="">Featured Product </label>
							  <div class="controls">
                                                              <input type="checkbox" class="span6 typeahead" name="featured_product" value="1" >
								
							  </div>
							</div>
                                                      
                                                      

							      
							<div class="control-group hidden-phone">
							  <label class="control-label" for="textarea2">Product Short Description</label>
							  <div class="controls">
                                                              <textarea class="cleditor" id="textarea2" rows="3" name="short_desc"></textarea>
							  </div>
							</div>
                                                      
                                                      <div class="control-group hidden-phone">
							  <label class="control-label" for="textarea3">Product Long Description</label>
							  <div class="controls">
                                                              <textarea class="cleditor" id="textarea2" rows="3" name="long_desc"></textarea>
							  </div>
							</div>
                                                      
                                                      <div class="control-group">
							  <label class="control-label" for="fileInput">Product Image</label>
							  <div class="controls">
                                                              <input class="input-file uniform_on" id="fileInput" type="file" name="product_pic">
							  </div>
                                                          
							</div>  
                                                      
                                                       <div class="control-group">
							  <label class="control-label" for=""> Publication Status</label>
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
