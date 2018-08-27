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
              <div class="panel-title ">Siswa</div>
            
            <div class="panel-options">
              <a href="#" data-rel="collapse"><i class="glyphicon glyphicon-refresh"></i></a>
              <a href="#" data-rel="reload"><i class="glyphicon glyphicon-cog"></i></a>
            </div>
            </div>
            <div class="content-box-large box-with-header">
              <a class="btn btn-info btn-sm" href="<?php echo base_url('siswa/add'); ?>">Add (+)</a>
              <br><br>
              <table class="table table-bordered">
                
                <tr bgcolor="lightblue">
                  <th>No</th>
                  <th>Username</th>
                  <th>Password</th>
                  <th>Nama Siswa</th>
                  <th>NISN</th>
                  <th>Tempat Lahir</th>
                  <th>Tanggal Lahir</th>
                  <th>Jenis Kelamin</th>
                  <th>Agama</th>
                  <th>Status</th>
                  <th>Alamat</th>
                  <th width="100">Action</th>

                </tr>
                <?php 
                $no=0;
                foreach ($siswas as $siswa){ 
                $no++;
                ?>
                <tr>
                  <td><?php echo $no ?></td>
                  <td><?php echo $siswa['username']; ?></td>
                  <td><?php echo $siswa['password']; ?></td>
                  <td><?php echo $siswa['nama']; ?></td>
                  <td><?php echo $siswa['nisn']; ?></td>
                  <td><?php echo $siswa['tempat_lahir']; ?></td>
                  <td><?php echo $siswa['tgl_lahir']; ?></td>
                  <td><?php echo $siswa['kelamin']; ?></td>
                  <td><?php echo $siswa['agama']; ?></td>
                  <td><?php echo $siswa['status']; ?></td>
                  <td><?php echo $siswa['alamat_siswa']; ?></td>
                  
                  <td>
                    <a class="glyphicon glyphicon-share btn-detail-siswa" id="<?php echo $siswa['id']; ?>"></a>
                    -
                    <a class="glyphicon glyphicon-pencil" href="<?php echo base_url('siswa/editData/'.$siswa['id']); ?>"></a>
                    -
                    <a onclick="return confirm('Are you sure this delete data?')" class="glyphicon glyphicon-trash" href="<?php echo base_url('siswa/deleteData/'.$siswa['id']); ?>"></a>
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

    <!-- Modal -->
<div id="modal-detail-siswa" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Detail Siswa</h4>
      </div>
      <div class="modal-body">
        <div class="row">
          <div class="col-md-12">
            <div class="form-group">
              <label>Pekerjaan Ayah</label>
              <input type="text" readonly id="detail-pekerjaanayah" class="form-control">
            </div>
          </div>

          <div class="col-md-12">
            <div class="form-group">
              <label>Pekerjaan Ibu</label>
              <input type="text" readonly id="detail-pekerjaanibu" class="form-control">
            </div>
          </div>

          <div class="col-md-12">
            <div class="form-group">
              <label>Wali</label>
              <input type="text" readonly id="detail-wali" class="form-control">
            </div>
          </div>

          <div class="col-md-12">
            <div class="form-group">
              <label>Alamat Wali</label>
              <input type="text" readonly id="detail-alamatwali" class="form-control">
            </div>
          </div>

          <div class="col-md-12">
            <div class="form-group">
              <label>Hp Wali</label>
              <input type="text" readonly id="detail-hpwali" class="form-control">
            </div>
          </div>

          <div class="col-md-12">
            <div class="form-group">
              <label>Pekerjaan Wali</label>
              <input type="text" readonly id="detail-pekerjaanwali" class="form-control">
            </div>
          </div>

          <div class="col-md-12">
            <div class="form-group">
              <label>Kelas</label>
              <input type="text" readonly id="detail-kelas" class="form-control">
            </div>
          </div>

          <div class="col-md-12">
            <div class="form-group">
              <label>Ayah</label>
              <input type="text" readonly id="detail-ayah" class="form-control">
            </div>
          </div>

          <div class="col-md-12">
            <div class="form-group">
              <label>Ibu</label>
              <input type="text" readonly id="detail-ibu" class="form-control">
            </div>
          </div>

          <div class="col-md-12">
            <div class="form-group">
              <label>Alamat Ortu</label>
              <input type="text" readonly id="detail-alamatortu" class="form-control">
            </div>
          </div>

          <div class="col-md-12">
            <div class="form-group">
              <label>Hp Ortu</label>
              <input type="text" readonly id="detail-hportu" class="form-control">
            </div>
          </div>

        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>
<!-- End modal -->

    <!-- footer -->
    <?php $this->load->view('Menu/footer') ?>
    <!-- end footer -->

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://code.jquery.com/jquery.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="<?php echo base_url('asset/') ?>bootstrap/js/bootstrap.min.js"></script>
    <script src="<?php echo base_url('asset/') ?>js/custom.js"></script>


    <script type="text/javascript">
      $(document).ready(function(){
        $('.btn-detail-siswa').on('click',function(){
          var id = this.id;

          $.ajax({
            url:'<?php echo base_url('Siswa/detailData'); ?>',
            dataType:'JSON',
            type:'POST',
            data:{id:id},
            success: function(a){
              console.log(a);
              $('#modal-detail-siswa').modal('show');
              $('#modal-detail-siswa #detail-pekerjaanayah').val(a.pekerjaanayah);
              $('#modal-detail-siswa #detail-pekerjaanibu').val(a.pekerjaanibu);
              $('#modal-detail-siswa #detail-wali').val(a.wali);
              $('#modal-detail-siswa #detail-alamatwali').val(a.alamatwali);
              $('#modal-detail-siswa #detail-hpwali').val(a.hpwali);
              $('#modal-detail-siswa #detail-pekerjaanwali').val(a.pekerjaanwali);
              $('#modal-detail-siswa #detail-kelas').val(a.kelas);
              $('#modal-detail-siswa #detail-ayah').val(a.ayah);
              $('#modal-detail-siswa #detail-ibu').val(a.ibu);
              $('#modal-detail-siswa #detail-alamatortu').val(a.alamatortu);
              $('#modal-detail-siswa #detail-hportu').val(a.hportu);

            }
          });


        });
      });
    </script>

  </body>
</html>