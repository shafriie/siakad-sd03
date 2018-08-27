<?php 

$controller = $this->uri->segment(1);
$status = $this->session->userdata('status');

$url = $this->uri->segment(1);

 ?>


<?php if ($status == 1): ?>
<div class="sidebar content-box" style="display: block;">
                <ul class="nav">
                    <!-- Main menu -->
                    <li class="current"><a href="<?php echo base_url('Dashboard') ?>"><i class="glyphicon glyphicon-home"></i> Dashboard</a></li>

                    <li class="<?php echo ($url == 'Guru' || $url == 'guru')?'current':'' ?>"><a href="<?php echo base_url('Guru') ?>"><i class="glyphicon glyphicon-user"></i> Guru</a></li>
                    
                    <li class="current"><a href="
                    <?php echo base_url('Siswa')?>"><i class="glyphicon glyphicon-user"></i> Siswa</a></li>
                    
                    <li class="<?php echo ($controller == 'Nilai' || $controller == 'nilai' )?'current':'' ?>"><a href="
                    <?php echo base_url('Nilai')?>"><i class="glyphicon glyphicon-list-alt"></i> Nilai</a></li>

                    <li class="<?php echo ($controller == 'Mapel' || $controller == 'mapel' )?'current':'' ?>"><a href="
                    <?php echo base_url('Mapel')?>"><i class="glyphicon glyphicon-tasks"></i> Mata Pelajaran</a></li>   

                    <li class="<?php echo ($controller == 'Jadwal' || $controller == 'jadwal' )?'current':'' ?>"><a href="
                    <?php echo base_url('Jadwal')?>"><i class="glyphicon glyphicon-eye-open"></i> Jadwal Pelajaran</a></li>   

                    <li class="<?php echo ($controller == 'Kelas' || $controller == 'kelas' )?'current':'' ?>"><a href="
                    <?php echo base_url('Kelas')?>"><i class="glyphicon glyphicon-hdd"></i> Kelas </a></li>   
                    

                    <li class="<?php echo ($controller == 'AbsenGuru' || $controller == 'absenguru' )?'current':'' ?>"><a href="
                    <?php echo base_url('AbsenGuru')?>"><i class="glyphicon glyphicon-folder-open"></i> Absen Guru</a></li>   
                    
                    <li class="<?php echo ($controller == 'AbsenSiswa' || $controller == 'absensiswa' )?'current':'' ?>"><a href="
                    <?php echo base_url('AbsenSiswa')?>"><i class="glyphicon glyphicon-folder-close"></i> Absen Siswa </a></li>   

                    <li class="<?php echo ($controller == 'Sekolah' || $controller == 'sekolah' )?'current':'' ?>"><a href="
                    <?php echo base_url('Sekolah')?>"><i class="glyphicon glyphicon-leaf"></i> Tentang Sekolah</a></li>





                </ul>
             </div>    
<?php endif ?>

<?php if ($status == 2): ?>
<div class="sidebar content-box" style="display: block;">
                <ul class="nav">
                    <!-- Main menu -->
                    <li class="<?php echo ($controller == 'Dashboard' || $controller == 'dashboard')?'current':'' ?>"><a href="<?php echo base_url('Dashboard') ?>"><i class="glyphicon glyphicon-home"></i> Dashboard</a></li>

                    <li style="display: none" class="<?php echo ($controller == 'Guru' || $controller == 'guru' )?'current':'' ?>"><a href="<?php echo base_url('Guru') ?>"><i class="glyphicon glyphicon-user"></i> Guru</a></li>
                    
                    <li style="display: none" class="<?php echo ($controller == 'Siswa' || $controller == 'siswa' )?'current':'' ?>"><a href="
                    <?php echo base_url('Siswa')?>"><i class="glyphicon glyphicon-user"></i> Siswa</a></li>
                    
                    <li class="<?php echo ($controller == 'Nilai' || $controller == 'nilai' )?'current':'' ?>"><a href="
                    <?php echo base_url('Nilai')?>"><i class="glyphicon glyphicon-list-alt"></i> Nilai</a></li>

                    <li class="<?php echo ($controller == 'Mapel' || $controller == 'mapel' )?'current':'' ?>"><a href="
                    <?php echo base_url('Mapel')?>"><i class="glyphicon glyphicon-tasks"></i> Mata Pelajaran</a></li>   

                    <li class="<?php echo ($controller == 'Jadwal' || $controller == 'jadwal' )?'current':'' ?>"><a href="
                    <?php echo base_url('Jadwal')?>"><i class="glyphicon glyphicon-eye-open"></i> Jadwal Pelajaran</a></li>   

                    <li class="<?php echo ($controller == 'Kelas' || $controller == 'kelas' )?'current':'' ?>"><a href="
                    <?php echo base_url('Kelas')?>"><i class="glyphicon glyphicon-hdd"></i> Kelas </a></li>   
                    

                    <li style="display: none" class="<?php echo ($controller == 'AbsenGuru' || $controller == 'absenguru' )?'current':'' ?>"><a href="
                    <?php echo base_url('AbsenGuru')?>"><i class="glyphicon glyphicon-folder-open"></i> Absen Guru</a></li>   
                    
                    <li style="display: none" class="<?php echo ($controller == 'AbsenSiswa' || $controller == 'absensiswa' )?'current':'' ?>"><a href="
                    <?php echo base_url('AbsenSiswa')?>"><i class="glyphicon glyphicon-folder-close"></i> Absen Siswa </a></li>   

                    <li style="display: none" class="<?php echo ($controller == 'Sekolah' || $controller == 'sekolah' )?'current':'' ?>"><a href="
                    <?php echo base_url('Sekolah')?>"><i class="glyphicon glyphicon-leaf"></i> Tentang Sekolah</a></li>





                </ul>
             </div>    
<?php endif ?>
