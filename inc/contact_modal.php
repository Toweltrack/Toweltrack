<div class="modal fade" id="getInfo" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Tell us how to reach you</h4>
      </div>
      
      <form id="get-info" role="form" method="post" action="contact.php" data-toggle="validator">
	      <div class="modal-body">
		      
		      <div id="form-messages"></div>
		      
	      	<div class="form-group">
						<label for="name">Name <span class="text-danger">*</span></label>
						<input type="text" class="form-control" id="name" name="name" placeholder="First & Last Name" maxlength="100" data-minlength="2" required>
						<div class="help-block with-errors"></div>
					</div><!-- end .form-group -->
					
					<div class="form-group">
						<label for="phone">Phone <span class="text-danger">*</span></label>
						<input type="tel" class="form-control" id="phone" name="phone" placeholder="Phone" data-minlength="3" maxlength="20" required>
						<div class="help-block with-errors"></div>
					</div><!-- end .form-group -->
					
					<div class="form-group">
						<label for="phone">Email <span class="text-danger">*</span></label>
						<input type="email" class="form-control" id="email" name="email" placeholder="Email" required>
						<div class="help-block with-errors"></div>
					</div><!-- end .form-group -->
					
					<div class="form-group">
						<label for="phone">Resort Name <span class="text-danger">*</span></label>
						<input type="text" class="form-control" id="resort_name" name="resort_name" placeholder="Resort Name" data-minlength="3" maxlength="500" required>
						<div class="help-block with-errors"></div>
					</div><!-- end .form-group -->
					
	      </div><!-- end .modal-body -->
	      
	      <div class="modal-footer">
		      <input id="submit" name="submit" type="submit" value="Submit" class="btn btn-rounded btn-primary">
	      </div><!-- end .modal-footer -->
      </form>
      
      
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->