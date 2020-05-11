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
                <li class="nav-item">
                    <a class="nav-link" id="video-tab" data-toggle="tab" href="#video" role="tab" aria-controls="video" aria-selected="false">Video</a>
                </li>
                </ul>
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="image" role="tabpanel" aria-labelledby="image-tab">
                            <div class="row">
                                    <?php 
                                        foreach($galeri as $list){ ?>
                                            <!-- <div class="col-lg-3 col-md-4 col-xs-12">
                                                <a href="#" class="d-block mb-4 h-100">
                                                    <img class="img-fluid img-thumbnail" src="<?php echo base_url()?>/assets/galeri/<?php echo $list->image_name;?>" alt="">
                                                </a>
                                            </div> -->
                                            <div class="col-lg-3 col-md-4 col-xs-12 image_container" style="cursor:pointer !important;" >
                                                <div class="card image_galeri_container" style="cursor:pointer;">
                                                    <a  href="<?php echo base_url()?>assets/galeri/<?php echo $list->image_name;?>" data-toggle="lightbox">
                                                        <img  style="cursor:pointer;" class="img-fluid" src="<?php echo base_url()?>assets/galeri/<?php echo $list->image_name;?>" alt="/<?php echo $list->image_name;?>">
                                                    </a>
                                                    <div class="card-body">
                                                        <p class="card-text"><?php echo $list->caption;?></p>
                                                    </div>
                                                </div>
                                            </div>
                                        <?php }
                                    ?>
                            </div>
                    </div>
                    <div class="tab-pane fade" id="video" role="tabpanel" aria-labelledby="video-tab">
                        <div class="row">
                                <?php 
                                    foreach($galeri_video as $list){ ?>
                                        <!-- <div class="col-lg-6 col-md-6 col-xs-12">
                                            <a href="#" class="d-block mb-4 h-100">
                                                <img class="img-fluid img-thumbnail" src="<?php echo base_url()?>/assets/galeri/<?php echo $list->image_name;?>" alt="">
                                            </a>
                                        </div> -->
                                        <div class="col-lg-6 col-md-6 col-xs-12">
                                            <iframe style="width:100%;height:300px;" src="<?php echo $list->link;?>">
                                            </iframe>
                                        </div>
                                    <?php }
                                ?>
                        </div>
                    </div>
                </div>
                </div>
        </div>
    </div>
</section>