<!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
<div class="col-xs-12 col-sm-3 col-md-2 clear-md fixed-top">
    <div class="collapse navbar-collapse navbar-ex1-collapse">
        <ul class="nav side-nav">
            <div class="logo2">    
                <a href="<?= base_url();?>dashboard"><img src="<?= base_url(); ?>assets/images/logo2.png" width="160px"></a>
            </div>
            <?php if ($this->session->level == 1 || $this->session->level == 2) {?>
            <li>
                <a class="nav-link" href="<?= base_url(); ?>"><i class="fa fa-home icon-menu"></i> Home Site</a>
            </li>
            <li>
                <a class="nav-link" href="<?= base_url('kelas'); ?>"><i class="fa fa-calendar icon-menu" aria-hidden="true"></i> Kelas Kursus</a>
            </li>  
            <li>
                <a class="nav-link" href="<?= base_url('operator'); ?>"><i class="icon-menu fa fa-users" aria-hidden="true"></i> Operator</a>
            </li>
            <li>
                <a class="nav-link" href="<?= base_url('pengajar'); ?>"><span class="icon-menu fa fa-users" aria-hidden="true"></span> Pengajar</a>
            </li>   
            <li>
                <a class="nav-link" href="<?= base_url('siswa'); ?>"><span class="icon-menu fa fa-users" aria-hidden="true"></span> Siswa</a>
            </li>  
            <li>
                <a class="nav-link" href="<?= base_url('siswa'); ?>"><span class="icon-menu fa fa-info-circle" aria-hidden="true"></span> Pengumuman</a>
            </li> 
            <li>
                <a class="nav-link" href="<?= base_url(); ?>"><span class="icon-menu fa fa-certificate" aria-hidden="true"></span> Sertifikat</a>
            </li> 
            <?php }?>  
            <?php if ($this->session->level == 4) {?>
            <li>
                <a class="nav-link" href="<?= base_url('siswa'); ?>"><span class="icon-menu fa fa-info-circle" aria-hidden="true"></span> Pengumuman</a>
            </li> 
            <li>
                <a class="nav-link" href="<?= base_url(); ?>"><span class="icon-menu fa fa-calendar" aria-hidden="true"></span> Jadwal Kursus</a>
            </li>
            <?php }?>
            <li>
                <a class="nav-link" href="<?= base_url('home/logout'); ?>"><span class="icon-menu fa fa-power-off" aria-hidden="true"></span> Logout</a>
            </li>    
        </ul>
    </div>
    <!-- /.navbar-collapse -->
</div>