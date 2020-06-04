<section class="breadcrumbs_custom">
    <div class="container breadcrumbs_custom">
        <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="<?php echo base_url();?>">Home</a></li>
            <li class="breadcrumb-item active"><a href="<?php echo base_url();?>fasilitas/layanan">Layanan</a></li>
            <?php 
                foreach ($layanandetail->result() as $row){ ?>
                    <li class="breadcrumb-item active" aria-current="page"><?php echo $row->nama; ?></li>
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
            <div class="col-lg-8 col-md-8 col-xs-12">
                <?php 
                    foreach ($layanandetail->result() as $row){ ?>
                        <h2 style="font-family: 'Roboto Slab', serif; "><?php echo $row->nama; ?></h2>
                        <br/>
                        <?php
                            if($row->thumb == '' || $row->thumb == NULL){ ?>
                                <img src="<?php echo base_url()?>assets/layanan/thumb.png" style="width:inherit;margin-bottom:0px;border-radius:10px;">
                                <?php }else{ ?>
                                    <img src="<?php echo base_url()?>assets/layanan/thumb/<?php echo $row->thumb;?>" style="width:200px;margin-bottom:0px;border-radius:10px;">
                                    <?php }
                        ?>
                        <div class="content" style="margin-top:30px;">
                            <?php
                            echo $row->deskripsi; 
                            ?>
                        </div>
                    <?php }            
                ?>
            </div>
            <div class="col-lg-4 col-md-4 col-xs-12">
                <img src="<?php echo base_url()?>assets/frontview/img/flyerblog.png" style="width:inherit;margin-bottom:30px;border-radius:10px;">
            </div>
        </div>
    </div>
</section>