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
              <div class="panel-title ">Absen Siswa</div>
            
            <div class="panel-options">
              <a href="#" data-rel="collapse"><i class="glyphicon glyphicon-refresh"></i></a>
              <a href="#" data-rel="reload"><i class="glyphicon glyphicon-cog"></i></a>
            </div>
            </div>
            <div class="content-box-large box-with-header">
              <a class="btn btn-info btn-sm" href="<?php echo base_url('AbsenSiswa/add'); ?>">Add (+)</a>
              <br><br>
              <table class="table table-bordered">
                
                <tr bgcolor="lightblue">
                  <th>No</th>
                  <th>Bulan</th>
                  <th>Tahun</th>
                  <th>Dokumen</th>
                  <th>Catatan</th>
                  <th>Action</th>
                </tr>
                <?php 
                $no=0;
                foreach ($absens as $absen){ 
                $no++;
                ?>
                <tr>
                  <td><?php echo $no ?></td>
                  <td><?php echo $absen['bulan']; ?></td>
                  <td><?php echo $absen['tahun']; ?></td>
                  <td><?php echo $absen['dokumen']; ?></td>
                  <td><?php echo $absen['catatan']; ?></td>
                  <td>
                    <a class="glyphicon glyphicon-download" href="<?php echo base_url('asset/upload/files/'.$absen['dokumen']); ?>"></a>
                    -
                    <a onclick="return confirm('Are you sure this delete data?')" class="glyphicon glyphicon-trash" href="<?php echo base_url('AbsenSiswa/deleteData/'.$absen['id']."-".$absen['dokumen']); ?>"></a>
                  </td>
                </tr>  
                <?php } ?>
              </table>

            <br /><br />
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