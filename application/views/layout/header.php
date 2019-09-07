<br>
<nav class="navbar navbar-inverse navbar-cls-top " role="navigation" style="margin-bottom:0;
background-color:#1E90FF; border-color: #1E90FF;">
<img src="<?php echo base_url('assets\images\logo2.png');?> " width=1120px height=120px >
 <!--<marquee behavior="scroll" direction="left" style="color:white; 
 font-size:15pt"><b>Pusat Penelitian dan Penerbitan UIN Sunan Gunung Djati Bandung</b></marquee>!-->
        </nav>
   <nav class="navbar navbar-default">
      <div class="container">
        <div class="navbar-header">
		
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
        </div>
		
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-left">
            <li><a href="<?php echo base_url('dasbor') ?>"><b> Beranda</b></a></li>
			 <li><a href="<?php echo base_url('user') ?>"><b>Admin</b></a></li>
			<li><a href="<?php echo base_url('pengajuan') ?>"><b> Proposal Pengajuan</b></a></li>
			<li><a href="<?php echo base_url('peneliti_antara') ?>"><b> Laporan Antara</b></a></li>
			<li><a href="<?php echo base_url('peneliti_lapakhir') ?>"><b> Laporan Akhir</b></a></li>
			<li><a href="<?php echo base_url('peneliti_progres') ?>"><b> Progres Penelitian</b></a></li>
			</ul>
		   <ul class="nav navbar-nav navbar-right">
            <li><a href="<?php echo base_url('login/logout') ?>"><b><i title="Logout"></i> Keluar</b></a> </li>
			<li><a href="<?php echo base_url('#') ?>"><i class="" title=""></i></a> </li>
              </ul> 
		</div>
	  </div>
	</nav>
    
    <!-- Start Article -->
    <article>
    <div class="navbar">
    <div class="jumbotron">
      <h2><?php echo $title ?></h2>