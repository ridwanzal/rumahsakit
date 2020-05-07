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
            <div class="col-lg-12 col-md-12 col-6">
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
                                            <div class="col-lg-3 col-md-4 col-xs-12">
                                                <div class="card" style="width: 17rem; cursor:pointer;">
                                                    <img class="card-img-top"src="<?php echo base_url()?>/assets/galeri/<?php echo $list->image_name;?>" alt="/<?php echo $list->image_name;?>">
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
                                        <!-- <div class="col-lg-3 col-md-4 col-xs-12">
                                            <a href="#" class="d-block mb-4 h-100">
                                                <img class="img-fluid img-thumbnail" src="<?php echo base_url()?>/assets/galeri/<?php echo $list->image_name;?>" alt="">
                                            </a>
                                        </div> -->
                                        <div class="col-lg-3 col-md-4 col-xs-12">
                                            <iframe style="height:inherit" src="<?php echo $list->link;?>">
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