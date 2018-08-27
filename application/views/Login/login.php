<!DOCTYPE html>
<html>
  <head>
    <?php $this->load->view('Layout/title'); ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap -->
    <link href="<?php echo base_url('asset/') ?>bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- styles -->
    <link href="<?php echo base_url('asset/') ?>css/styles.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
  </head>
  <body class="login-bg">
  	<div class="header">
	     <div class="container">
	        <div class="row">
	           <div class="col-md-12">
	              <!-- Logo -->
	              <div class="logo">
	                 <font style="font-family: Goudy Stout;color:white;font-size: 30px"><?php echo $judul; ?></font>
	              </div>
	           </div>
	        </div>
	     </div>
	</div>

	<div class="page-content container">
		<div class="row">
			<div class="col-md-4 col-md-offset-4">
				<div class="login-wrapper">
			        <div class="box">
			            <div class="content-wrap">
			                <h6>Sign In</h6>
			                <form method="POST" action="<?php echo base_url('login/validate_login'); ?>">
			                <input class="form-control" type="text" placeholder="Username" name="username" id="username" autofocus required>
			                <input class="form-control" type="password" placeholder="Password" id="password" name="password" required>
			                <div>
			                	<p align="center" style="color:red;font-weight: bold"><?php echo $this->session->flashdata('msg'); ?></p>
			                </div>
			                <div class="action">
			                    <button type="submit" class="btn btn-primary">Login</button>
			                </div>
			                </form>                
			            </div>
			        </div>

			        <!-- <div class="already">
			            <p>Don't have an account yet?</p>
			            <a href="signup.html">Sign Up</a>
			        </div> -->
			    </div>
			</div>
		</div>
	</div>



    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://code.jquery.com/jquery.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="<?php echo base_url('asset/') ?>bootstrap/js/bootstrap.min.js"></script>
    <script src="<?php echo base_url('asset/') ?>js/custom.js"></script>
  </body>
</html>