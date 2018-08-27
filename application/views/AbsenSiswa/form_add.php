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
  <body>
  	
  	<?php $this->load->view('Menu/header') ?>

    <div class="page-content">
    	<div class="row">
		  <div class="col-md-2">
		  	<?php $this->load->view('Menu/sidebar'); ?>
		  </div>
		  <div class="col-md-10">
		  	

		  	<div class="row">
		  		<div class="col-md-12 panel-warning">
		  			<div class="content-box-header panel-heading">
	  					<div class="panel-title ">Absen Murid</div>
						
						<div class="panel-options">
							<a href="#" data-rel="collapse"><i class="glyphicon glyphicon-refresh"></i></a>
							<a href="#" data-rel="reload"><i class="glyphicon glyphicon-cog"></i></a>
						</div>
		  			</div>
		  			<div class="content-box-large box-with-header">
              <form method="POST" action="<?php echo base_url('AbsenSiswa/insert_data'); ?>" enctype="multipart/form-data">
              <div class="row"> 

                <div class="col-md-12">
                  <p align="center" style="color:red;font-weight: bold"><?php echo $this->session->flashdata('msg'); ?></p>
                </div>

                <div class="col-md-12">
                  <div class="form-group">
                    <label for="">Bulan</label>
                    <select name="bulan" id="bulan" class="form-control" required autofocus>
                      <option value="">-- Select --</option>
                    <?php 
                    $array_bulan = ['','Januari','Februari','Maret','April','Mei','Juni','Juli','Agustus','September','Oktober','November','Desember']; 
                    for ($i=1; $i < count($array_bulan) ; $i++) { 
                     ?> 
                     <option value="<?php echo $array_bulan[$i] ?>"><?php echo $array_bulan[$i]; ?></option>
                    <?php } ?>
                    </select>
                  </div>
                </div>


                <div class="col-md-12">
                  <div class="form-group">
                    <label for="">Tahun</label>
                    <input min="2015" max="2018" placeholder="Tahun" type="number" name="tahun" id="tahun" required class="form-control" >
                  </div>
                </div>


                <div class="col-md-12">
                  <div class="form-group">
                    <label for="">Dokumen</label>
                    <input type="file" name="dokumen" id="dokumen" accept=".xlsx, .docx">
                  </div>
                </div>


                <div class="col-md-12">
                  <div class="form-group">
                    <label for="">Catatan</label>
                    <textarea required class="form-control" rows="5" name="catatan" id="catatan" placeholder="Catatan"></textarea>
                  </div>
                </div>

                <div class="col-md-12">
                  <div class="form-group">
                    <button type="submit" class="btn btn-danger">Submit</button>
                    <button type="reset" class="btn btn-primary">Clear</button>
                  </div>
                </div>
              </div>
              </form>

					</div>
		  		</div>
		  	</div>
		  </div>
		</div>
    </div>

    <!-- footer -->
    <?php $this->load->view('Menu/footer') ?>
    <!-- end footer -->

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://code.jquery.com/jquery.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="<?php echo base_url('asset/') ?>bootstrap/js/bootstrap.min.js"></script>
    <script src="<?php echo base_url('asset/') ?>js/custom.js"></script>
  </body>
</html>