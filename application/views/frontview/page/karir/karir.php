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
<section>
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-xs-12">
                <h4>Berkembang bersama kami</h4>
                <br/>
                <p class="text_justify">
                    Kami menawarkan pengalaman menarik dan jenjang karir untuk mengembangkan karir Anda. <b>RS AR-RASYID</b> telah menjadi Pusat Studi Banding Pelayanan BPJS lebih dari 400 Rumah Sakit di Indonesia di Era JKN dan BPJS. Dimana tempat bekerja (Lahan Ibadah) kami penuh dengan beragam pegawai yang ingin maju, semangat kerja keras, kreatif dan kemauan berkembang meng-upgrade diri dalam tiap tetes kontribusi yang di berikan. Di <b>RS AR-RASYID</b>, kami percaya bahwa setiap orang membawa talenta yang bernilai dalam memberikan pelayanan kepada setiap manusia. Jadi, apa yang Anda tunggu?
                </p>
            </div>
        </div>
    </div>
</section>
<br/>
<section class="section_four_two">
    <div class="container">
        <div class="row">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                <h5 class="mb-0">Open Vacancy</h5>
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
                                                                                                        <tr>
                                                        <td>1</td>
                                                        <td>Perawat</td>
                                                        <td>2020-04-26 03:39:03</td>
                                                        <td>open</td>
                                                        <td><a href="" class="btn btn-primary">Lihat Detail</a></td>
                                                    </tr>
                                                                                                            <tr>
                                                        <td>2</td>
                                                        <td>Perawat Pria</td>
                                                        <td>2020-04-26 04:34:32</td>
                                                        <td>open</td>
                                                        <td><a href="" class="btn btn-primary">Lihat Detail</a></td>
                                                    </tr>
                                                                                                </tbody>
                                    </table>
                                </div>
                    </div>
        </div>
    </div>
</section>