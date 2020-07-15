<!-- <section class="breadcrumbs_custom">
    <div class="container breadcrumbs_custom">
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="<?php echo base_url();?>">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Profil</li>
            <li class="breadcrumb-item active" aria-current="page">Prestasi</li>
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
                <h4><?php echo $daftar[0]->nama; ?></h4>
                <br/>
                <p class="text_justify">
                    <?php echo $daftar[0]->thumb; ?>
                </p>
                <p class="text_justify">
                    <?php echo $daftar[0]->deskripsi; ?>
                </p>
               
            </div>
        </div>
    </div>
</section> -->
<section class="breadcrumbs_custom">
    <div class="container breadcrumbs_custom">
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="<?php echo base_url();?>">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Galeri</li>
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
                <ul class="nav nav-tabs" id="myTab" role="tablist" style="margin-bottom:10px;">
                <li class="nav-item">
                    <a class="nav-link active" id="image-tab" data-toggle="tab" href="#image" role="tab" aria-controls="image" aria-selected="true">Foto</a>
                </li>
                </ul>
                    <div class="row">
                            <?php 
                                foreach($daftar as $list){ ?>
                                    <!-- <div class="col-lg-3 col-md-4 col-xs-12">
                                        <a href="#" class="d-block mb-4 h-100">
                                            <img class="img-fluid img-thumbnail" src="<?php echo base_url()?>/assets/galeri/<?php echo $list->thumb;?>" alt="">
                                        </a>
                                    </div> -->
                                    <?php
                                        $getformat = explode('.', $list->thumb);
                                        if($getformat[1] == 'png' || $getformat[1] == 'jpg' || $getformat[1] == 'jpeg'){
                                            ?>         
                                                <div class="col-lg-3 col-md-4 col-xs-12 image_container" style="cursor:pointer !important;" >
                                                    <div class="card image_galeri_container" style="cursor:pointer;">
                                                        <a  href="<?php echo base_url()?>assets/profil/thumb//<?php echo $list->thumb;?>" data-toggle="lightbox">
                                                            <img  style="cursor:pointer;" class="img-fluid" src="<?php echo base_url()?>assets/profil/thumb/<?php echo $list->thumb;?>" alt="/<?php echo $list->thumb;?>">
                                                        </a>
                                                    </div>
                                                </div>
                                            <?php 
                                        }
                                    ?>
                                <?php }
                            ?>
                    </div>
            </div>
        </div>
    </div>
</section>
