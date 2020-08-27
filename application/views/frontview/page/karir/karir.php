<section class="breadcrumbs_custom">
    <div class="container breadcrumbs_custom">
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="<?php echo base_url();?>">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Karir</li>
          </ol>
    </div>
</nav>  
</section>
<br/>
<br/>
<section>
    <div class="container">
        <div class="row">
                <div class="col-lg-12 col-md-12 col-xs-12">
                        <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                            <div class="carousel-inner">
                                <!-- <div class="carousel-item active">
                                    <div class="carousel-caption">
                                        <div class="carousel_content">
                                            <h1>RS. AR-Rasyid</h1>
                                            <p>Dengan pelayanan yang prima serta di dukung oleh tenaga medis yang berpengalaman, peralatan yang modern dan canggih.</p>
                                        </div>
                                    </div>
                                <img class="d-block w-100 imgslider" src="<?php echo base_url(); ?>assets/frontview/img/hospital.jpg" alt="First slide">
                                </div> -->
                                <?php   
                                    if($this->session->flashdata('message')){ ?>
                                        <div class="alert alert-success alert-dismissible"><?php echo $this->session->flashdata('message') ?>
                                        <a href="" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                                        </div>
                                    <?php   }
                                ?>
                                <?php
                                    if(!isset($banner_karir)){ ?>
                                        <div class="carousel-item active">
                                            <div class="carousel-caption">
                                            </div>
                                            <img class="d-block w-100" style="height:100%;" src="<?php echo base_url(); ?>assets/banners/<?php echo $list->image_name;?>" alt="First slide">
                                        </div>
                                    <?php }else{
                                        $i=0;
                                        foreach($banner_karir as $list){
                                            ++$i;
                                            ?>
                                            <div class="carousel-item <?php if($i  == 1 ) echo 'active' ?>">
                                                <div class="carousel-caption">
                                                </div>
                                                <img class="d-block w-100" style="height:100%;"  src="<?php echo base_url(); ?>assets/banners_karir/<?php echo $list->image_name;?>" alt="First slide">
                                            </div>
                                        <?php }
                                    }
                                ?>
                            </div>
                        <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                        </div>
                </div>
            </div>
    </div>
</section>
<br/>
<br/>
<section>
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-xs-12">
                <h4>Informasi Lowongan Kerja</h4>
            </div>
        </div>
    </div>
</section>
<br/>
<section class="section_four_two">
    <div class="container">
        <div class="row">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                <br/>
                                <div class="table-responsive">
                                    <table id="example" class="table table-striped table-bordered second" style="width:100%">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Posisi</th>
                                                <th>Tanggal Terbit</th>
                                                <th>Status</th>
                                                <th>Tindakan</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                                <?php
                                                        function check_empty($value){
                                                            if($value == '' || $value == '0'){
                                                                echo '-';
                                                            }else{
                                                                echo $value;
                                                            }
                                                        }
    
                                                        $i = 0; 
                                                        foreach($karir_open as $list){
                                                            $i = $i + 1;
                                                            ?>
                                                        <tr>
                                                            <td><?php echo $i; ?></td>
                                                            <td><?php echo $list->posisi; ?></td>
                                                            <td><?php echo $list->date_created; ?></td>
                                                            <td><?php echo $list->status; ?></td>
                                                            <td>
                                                                <a href="<?php echo base_url(); ?>karir/post/<?php echo $list->id; ?>" class="btn btn-primary btn-sm">Lihat Detail</a>
                                                            </td>
                                                        </tr>
                                                    <?php }
                                                ?>
                                        </tbody>    
                                    </table>
                                </div>
                    </div>
        </div>
    </div>
</section>