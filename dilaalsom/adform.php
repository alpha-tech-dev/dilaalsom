  <?php
	require 'header.php';

	?>

  <style>
  	.ss {
  		margin: auto;
  		width: 50%;
  		padding: 10px;
  	}
  </style>



  <head>
  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>
  	<script type="text/javascript" src="http://www.expertphp.in/js/jquery.form.js"></script>
  	<script type="text/javascript" src="jquery.js"></script>
  	<script type="text/javascript" src="jquery.form.js"></script>
  	<script>
  		function preview_images() {
  			var total_file = document.getElementById("mainpicture").files.length;
  			for (var i = 0; i < total_file; i++) {
  				$('#image_preview').append("<img src='" + URL.createObjectURL(event.target.files[i]) + "'></div>");
  			}
  		}
  	</script>
  </head>



  <div class="">

  	<div class="ss">
  		<b>
  			<h5>Post a new Advert</h5>
  		</b>
  		<div class="col s12 m6">

  			<div class="card-panel  lighten-3">
  				<form action="process.php" method="post" id="adform" enctype="multipart/form-data">

  					<label>
  						<h6> <b>Select a category *</b> </h6>
  					</label>
  					<div class="input-field">
  						<select name="id_category" required="required">
  							<option value="">Choose category...</option>
  							<?php
								echo displayCategories("");
								?>
  						</select>
  					</div>


  					<label>
  						<h6> <b>Where is the advertisment located ?</b> </h6>
  						<h6> <b>State *</b> </h6>
  					</label>
  					<div class="input-field">

  						<select name="district" required="required">
  							<option value="">Choose state...</option>
  							<?php
								echo displayCounties("");
								?>
  						</select>
  					</div>
  					<label>
  						<h6> <b>District *</b> </h6>
  					</label>
  					<div class="input-field">

  						<select name="state" required="required">
  							<option value="">Choose district...</option>
  							<?php
								echo displayCounties("");
								?>
  						</select>
  					</div>

  					<label>
  						<h6> <b>What is the type of advert ? ( Are you buying or selling etc)</b> </h6>
  						<h6> <b>Ad type *</b> </h6>
  					</label>
  					<div class="input-field">

  						<select name="type" required="required">
  							<option value="">Choose Ad type...</option>
  							<option value="S">SELL</option>
  							<option value="B">BUY</option>

  						</select>
  					</div>
  			</div>


  			<div class="card-panel  lighten-3">
  				<input type="hidden" name="formname" value="adform" readonly="readonly" />
  				<label>
  					<h6> <b>Advert Title *</b> (e.g Samsung S9 , Lexus Jeep , 3 bedroom flat house,etc) </h6>
  				</label>
  				<div class="input-field">
  					<input type="text" name="title" maxlength="20" required="required" />
  				</div>
  				<label>
  					<h6> <b>Price *</b> (in US-Dollars Only) </h6>
  				</label>

  				<div class="input-field">
  					<input type="number" name="price" required="required" />
  				</div>



  			</div>



  			<div class="card-panel  lighten-3">

  				<label>
  					<h6> <b>Contact method *</b> </h6>
  				</label>
  				<div class="input-field">

  					<p>
  						<label>
  							<input type="checkbox" class="filled-in" name="contact_byphone" value="1" />
  							<span>Phone</span>
  						</label>
  					</p>
  					<p>
  						<label>
  							<input type="checkbox" class="filled-in" name="message_center" value="1" />
  							<span>Email</span>
  						</label>
  					</p>
  				</div>
  				<label>
  					<h6> <b>Description *</b>(Breif description of what you are advertising) </h6>
  				</label> <textarea name="description" required="required" class="materialize-textarea"> </textarea>
  				<label>
  					<h6> <b>Add image *</b> (please take a clear image, advisable to upload more than one images) </h6>
  				</label>

  				<div class="file-field input-field">

  					<div class="btn">
  						<span>File</span>
  						<input type="file" class="form-control" id="mainpicture" name="mainpicture[]" onchange="preview_images();" multiple />
  					</div>
  					<div class="file-path-wrapper">
  						<input class="file-path validate" type="text" placeholder="Upload file">
  					</div>
  					<br />
  					<div id="image_preview"></div>
  				</div>
  				<center> <button type="submit" class="btn">Place Ad</button> </center>
  				</form>
  			</div>
  		</div>
  	</div>
  </div>
  <?php
	include 'footer.php';
	?>