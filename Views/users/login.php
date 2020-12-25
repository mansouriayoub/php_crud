	<?php
	set_include_path($_SERVER['DOCUMENT_ROOT'].'/PHP_courses/inventory');
	include 'Controllers/users_func.php'; 

	if ($_GET['']) {
		# code...
	}
	?>
	<!-- Modal -->
	<div class="modal-header">
    	<h5 class="modal-title">User form</h5>
	    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
	      <span aria-hidden="true">&times;</span>
	    </button>
  	</div>
  	<div class="modal-body">
  		<!-- Modal-content -->
    	<form action="form.php" method="post" autocomplete="off" id="FormUser">
    		<input type="hidden" value="" name="id">
		  <div class="form-group">
		    <label for="">Ffirst Name:</label>
		    <input type="text" class="form-control" name="firstName" placeholder="Enter Your First Name" required value="">
		  </div>
		  <!-- <div class="form-group">
		    <label for="">Password:</label>
		    <input type="password" class="form-control" name="password" placeholder="Enter Your Password" required value="">
		  </div> -->
		  <div class="form-group">
		    <label for="">Last Name:</label>
		    <input type="text" class="form-control" name="lastName" placeholder="Enter First Name" required value="<?php echo ( isset($row['lastName']) ) ? $row['lastName'] : ''; ?>">
		  </div>
		</form>
		<!-- Modal-content -->
  	</div>
  	<div class="modal-footer">
	    <button type="submit" class="btn btn-primary" name="submit_btn" form="FormUser">Login</button>
	    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
  	</div>
  	<!-- Modal -->