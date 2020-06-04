<section class="breadcrumbs_custom">
    <div class="container breadcrumbs_custom">
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="<?php echo base_url();?>">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Rekanan</li>
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
                    <a class="nav-link active" id="image-tab" data-toggle="tab" href="#image" role="tab" aria-controls="image" aria-selected="true">Daftar Rekanan</a>
                </li>
                </ul>
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="image" role="tabpanel" aria-labelledby="image-tab">
                            <div class="row">
                                    <?php 
                                        foreach($rekanan as $list){ ?>
                                            <!-- <div class="col-lg-3 col-md-4 col-xs-12">
                                                <a href="#" class="d-block mb-4 h-100">
                                                    <img class="img-fluid img-thumbnail" src="<?php echo base_url()?>/assets/galeri/<?php echo $list->image_name;?>" alt="">
                                                </a>
                                            </div> -->
                                            <div class="col-lg-2 col-md-2 col-xs-6 image_container" style="cursor:pointer !important;padding-bottom:30px;" >
                                                <div class="card" style="width:100%;height:250px;backround-size:cover;padding:10px;" margin-bottom:30px; cursor:pointer;">
                                                    <a  href="<?php echo $list->link;?>" target="_blank">
                                                        <img  style="cursor:pointer;width:100%;background-size:cover;" src="<?php echo base_url()?>assets/rekanan/<?php echo $list->image_name;?>" alt="/<?php echo $list->image_name;?>">
                                                    </a>
                                                    <div class="card-body" style="position:absolute;bottom:10px;">
                                                        <p class="card-text" style="font-size:13px;"><?php echo $list->caption;?></p>
                                                    </div>
                                                </div>
                                            </div>
                                        <?php }
                                    ?>
                            </div>
                    </div>
                </div>
                </di>
        </div>
    </div>
</section>