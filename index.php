<!DOCTYPE html>
<html>
<head>
	
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
		
	<meta property="og:type" content="website"/>
	<meta property="og:title" content="TowelTrack - The future of resort towel management."/>
	<meta property="og:url" content="http://www.toweltrack.com/"/>
	<meta property="og:description" content="TowelTrack - The future of resort towel management."/>
	<meta property="og:site_name" content="TowelTrack"/>
	<meta name="description" content="TowelTrack - The future of resort towel management."/>
	<title>TowelTrack | The Future of Resort Towel Management</title>
	
	<!-- Bootstrap -->
	<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
	
	<!-- Google Fonts -->
	<link href="https://fonts.googleapis.com/css?family=BioRhyme:400,800|Open+Sans" rel="stylesheet">
	
	<!-- Custom Styles -->
	<link rel="stylesheet" type="text/css" href="assets/css/style.css">
	
</head>
<body>


<div class="container text-center">
	<h1>Toweltrack.</h1>
	<h3>The future of resort towel management.</h3>
	
	<div class="get-info">
		<a href="#" class="btn btn-rounded btn-primary" data-toggle="modal" data-target="#getInfo">Get Info</a>
	</div><!-- end .get-info -->
	
	<div class="towel-image">
		<img src="assets/images/towel-bg.jpg" class="img-responsive" alt="Toweltrack." />
	</div><!-- end .towel-image -->
	
</div><!-- end .container -->
	

<!-- Modal -->
<div class="modal fade" id="getInfo" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Get More Info!</h4>
      </div>
      
      
      <form role="form" method="post" action="contact.php">
	      <div class="modal-body">
		      
	      	<div class="form-group">
						<label for="name">Name <span class="text-danger">*</span></label>
						<input type="text" class="form-control" id="name" name="name" placeholder="First & Last Name" value="">
					</div><!-- end .form-group -->
					
					<div class="form-group">
						<label for="phone">Phone <span class="text-danger">*</span></label>
						<input type="tel" class="form-control" id="phone" name="phone" placeholder="Phone" value="">
					</div><!-- end .form-group -->
					
					<div class="form-group">
						<label for="phone">Email <span class="text-danger">*</span></label>
						<input type="email" class="form-control" id="email" name="email" placeholder="Email" value="">
					</div><!-- end .form-group -->
					
					<div class="form-group">
						<label for="phone">Resort Name <span class="text-danger">*</span></label>
						<input type="text" class="form-control" id="resort-name" name="resort-name" placeholder="Resort Name" value="">
					</div><!-- end .form-group -->
					
	      </div><!-- end .modal-body -->
	      
	      <div class="modal-footer">
		      <input id="submit" name="submit" type="submit" value="Submit" class="btn btn-rounded btn-primary">
	      </div><!-- end .modal-footer -->
      </form>
      
      
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->




<!-- Scripts -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script src="assets/js/custom.js"></script>

</body>
</html>