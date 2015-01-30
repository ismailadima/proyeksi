<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <!-- <title><?php// echo"$tampil[nama_toko] | $tampil[website]"; ?></title> -->
    <title> Futsal Booking </title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">	
<!-- styles -->
    <link rel="stylesheet" href="<?= base_url().'bootstrap/css/navbar.css';?>" type="text/css" media="all" />
	<link rel="stylesheet" href="<?= base_url().'bootstrap/css/shopping.css" type="text/css';?>" media="all" />
	<link rel="stylesheet/less" type="text/css" href="<?= base_url().'themes/less/bootstrap.less';?>">
	<script type="text/javascript" src="<?= base_url().'themes/js/swfobject/swfobject.js';?>"></script>
	<script src="<?= base_url().'themes/js/less/less.js'?>" type="text/javascript"></script>
    <script type="text/javascript" src="<?= base_url().'themes/js/swfobject/jquery.min.js';?>"></script>
    <script type="text/javascript" src="<?= base_url().'themes/js/swfobject/flexpaper.js';?>"></script>
  </head>

<body>
  <!-- Facebook script -->
	<div id="fb-root"></div>

<!-- HEADER  -->
 <header class="header">
 	<div class="container">
	<div class="row">
		<div class="offset6 span6 right-align loginArea">
			<a href="#login" role="button" data-toggle="modal"><span class="btn btn-mini"> Login  </span></a> 
			<a href="<?php echo base_url();?>index.php/futsal_page/reg_opt"><span class="btn btn-mini"> Register  </span></a> 
		</div>
	</div>
	

	<!-- Login Block -->
	<div id="login" class="modal hide fade in" tabindex="-1" role="dialog" aria-labelledby="login" aria-hidden="false" >
	  <div class="modal-header">
		<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
		<h3>Please Login</h3>
	  </div>
	  <div class="modal-body">

		<form class="form-horizontal loginFrm" action="<?php echo base_url();?>index.php/login">
		  <div class="control-group">								
			<input type="text" id="username" name="username" placeholder="Username">
		  </div>
		  <div class="control-group">
			<input type="password" id="password" name="password" placeholder="Password">
		  </div>
		  <!-- <div class="control-group">
			<label class="checkbox">
			<input type="checkbox"> Remember me
			</label>
		  </div> -->
				
		<button type="submit" class="btn btn-success" name="submit" id="submit">Sign in</button>
		<button class="btn" data-dismiss="modal" aria-hidden="true">Close</button>
		</form>
	  </div>
	</div>
	</div>


	<!-- LOGO -->
	<div class="navbar">
	<div class="navbar-inner">
		<a class="brand" href="index.php"><img src="<?= base_url().'themes/images/new_logo.png';?>" alt="Bootsshop"></a>
	</div>
	</div>

</div>
</header>
</body>