<body>
<div class="container">
    <div class="row" id="navcontainer" style="padding-bottom:6px;">
        <div class="col-lg-12 col-md-12 col-xs-12">
            <a href="<?php echo base_url();?>"><img src="<?php echo base_url()?>assets/frontview/img/logo3.svg"  class="logo_main"></a>
            <div class="float-right infobar" >
                <span><i class="lnr lnr-phone-handset"></i>&nbsp;&nbsp;<span>Phone : (0711) 5610503</span></span>
                <span><i class="lnr lnr-envelope"></i>&nbsp;&nbsp;<span> rs.ar.plm@gmail.com </span></span>
                <a  href="https://api.whatsapp.com/send?phone=++6281928529335&text=Assalamu'alaikum Wr Wb" target="_blank"><span id="wa_navbar"><img src="https://image.flaticon.com/icons/svg/220/220236.svg" style="color:#ffffff;height:15px;top:-2px;position: relative;">&nbsp;&nbsp;WhatsApp</span></a>
            </div>
        </div>
    </div>
</div>
<section class="nav_container">
    <div class="container">
        <nav class="navbar navbar-expand-lg navbar-light bg-light navbar_custom">
          <a href="<?php echo base_url();?>"><span id="logo_mobile">RS. AR-Rasyid</span></a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
        
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto navmain">
              <li class="nav-item active">
                <a class="nav-link" href="<?php echo base_url();?>">Home <span class="sr-only">(current)</span></a>    
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  Profil
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <a class="dropdown-item" href="<?php echo base_url();?>profil/sejarah">Sejarah</a>
                  <a class="dropdown-item" href="<?php echo base_url();?>profil/direksi">Direksi</a>
                  <a class="dropdown-item" href="<?php echo base_url();?>profil/visimisi">Visi Misi</a>
                  <a class="dropdown-item" href="<?php echo base_url();?>profil/pmkp">PMKP</a>
                  <a class="dropdown-item" href="<?php echo base_url();?>profil/rekanan">Rekanan</a>
                  <a class="dropdown-item" href="<?php echo base_url();?>profil/prestasi">Prestasi</a>
                </div>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Fasilitas
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <a class="dropdown-item" href="<?php echo base_url();?>fasilitas/layanan">Layanan Medis</a>
                  <!-- <a class="dropdown-item" href="<?php echo base_url();?>fasilitas/penunjang">Fasilitas Penunjang</a> -->
                </div>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="<?php echo base_url();?>galeri">Galeri <span class="sr-only"></span></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="<?php echo base_url();?>artikel">Artikel <span class="sr-only"></span></a>
              </li>
              <!-- <li class="nav-item">
                <a class="nav-link" href="<?php echo base_url();?>jadwaldokter">Jadwal Dokter <span class="sr-only"></span></a>
              </li> -->
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Informasi
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <a class="dropdown-item" href="<?php echo base_url();?>jadwaldokter">Jadwal Dokter </a>
                  <a class="dropdown-item" href="<?php echo base_url();?>daftarpasien">Daftar Pasien</a>
                </div>
              </li> 
              <li class="nav-item">
                <a class="nav-link" href="<?php echo base_url();?>karir">Karir <span class="sr-only"></span></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="<?php echo base_url();?>kontak">Kontak <span class="sr-only"></span></a>
              </li>
              
            </ul>
            <form method="GET" action="<?php echo base_url(); ?>/blog/blog_content_list_search">
                <div style:display:flex; class="searchings">
                  <input name="keyword" style="padding-left:5px;" class="search_inputs" type="text" id="search_input" placeholder="Cari Informasi">
                  <input  class="search_btn" type="submit" value="Cari">
                </div>
            </form>
          </div>
        </nav>
    </div>
</section>