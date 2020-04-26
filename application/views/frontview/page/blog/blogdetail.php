<section class="breadcrumbs_custom">
    <div class="container breadcrumbs_custom">
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Artikel</li>
            <?php 
                foreach ($datapost->result() as $row){ ?>
                    <li class="breadcrumb-item active" aria-current="page"><?php echo $row->title; ?></li>
                <?php }            
            ?>
          </ol>
        </nav>  
    </div>
</section>
<br/>
<br/>
<section class="section_four_two">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-xs-12">
                <?php 
                    foreach ($datapost->result() as $row){ ?>
                        <h2><?php echo $row->title; ?></h2>
                        <p style="margin-bottom:30px;" class="text-muted"><span style="font-weight:500;">Posted by : Admin&nbsp; - &nbsp;</span><?php echo $row->date_created; ?></p>
                        <?php
                            if($row->image_path == '' || $row->image_path == NULL){ ?>
                                <img src="<?php echo base_url()?>assets/blog/thumb_img_default/thumb.png" style="width:inherit;margin-bottom:30px;border-radius:10px;">
                            <?php }else{ ?>
                                <img src="<?php echo base_url()?>assets/blog/thumb_img/<?php echo $row->image_path;?>" style="width:inherit;margin-bottom:30px;border-radius:10px;">
                            <?php }
                        ?>
                        <div>
                            <?php
                            echo $row->content; 
                            ?>
                        </div>
                    <?php }            
                ?>
            </div>
        </div>
    </div>
</section>