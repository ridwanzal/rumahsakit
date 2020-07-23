<!-- <section class="breadcrumbs_custom">
    <div class="container breadcrumbs_custom">
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="<?php echo base_url();?>">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Profil</li>
            <li class="breadcrumb-item active" aria-current="page">Visi & Misi</li>
          </ol>
    </div>
</nav>  
</section>
<br/>
<br/>
<section class="section_four_two">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-xs-12">
                <h4>Visi dan Misi</h4>
                <br/>
                <br/>
                <h4>Visi</h4>
                <p class="text_justify">
                Menjadi rumah sakit kebanggan umat islam yang memberikan pelayanan secara islami, modern, profesional, yang berlandaskan semangat fastabikul khoirot untuk mengamalkan perintah Allah ta’awanu’alal birri wattaqwa dalam bidang kesehatan.
                </p>
                <br/>
                <h4>Misi</h4>
                <ol style="left:-22px;position:relative;">
                    <li>
                    Memberikan pelayanan kesehatan dan menyediakan tenaga medis yang islami kompeten dalam bidangnya sesuai dengan standar pelayanan dan dapat dijangkau oleh seluruh lapisan masyarakat dengan tidak membedakan status sosial
                    </li>
                    <li>
                    Mengutamakan keselamatan pasien dan menciptakan lingkungan yang aman, bersih dan sehat
                    </li>
                    <li>
                    Menyediakan peralatan yang modern, canggih dan komputerized
                    </li>
                    <li>
                    Meningkatkan kemampuan Sumber Daya Manusia (SDM) sehingga dapat berperan dalam pengembangan dan kemajuan rumah sakit
                    </li>
                </ol>
                
            </div>
        </div>
    </div>
</section> -->

<section class="breadcrumbs_custom">
    <div class="container breadcrumbs_custom">
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="<?php echo base_url();?>">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Profil</li>
            <li class="breadcrumb-item active" aria-current="page">Visi dan Misi</li>
          </ol>
    </div>
</nav>  
</section>
<br/>
<br/>
<?php
    if(sizeof($daftar) > 0){
        ?>
            <section class="section_four_two">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-xs-12">
                            <h4><?php echo $daftar[0]->nama; ?></h4>
                            <br/>
                            <p class="text_justify">
                                <?php echo $daftar[0]->deskripsi; ?>
                            </p>
                        </div>
                    </div>
                </div>
            </section>
        <?php
    }

?>
