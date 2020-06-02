<section class="breadcrumbs_custom">
    <div class="container breadcrumbs_custom">
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="<?php echo base_url();?>">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Kontak</li>
          </ol>
        </nav>  
    </div>
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
                                    if(!isset($contact_banner)){ ?>
                                        <div class="carousel-item active">
                                            <div class="carousel-caption">
                                            </div>
                                            <img class="d-block w-100" style="height:100%;" src="<?php echo base_url(); ?>assets/banners/<?php echo $list->image_name;?>" alt="First slide">
                                        </div>
                                    <?php }else{
                                        $i=0;
                                        foreach($contact_banner as $list){
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
<section class="section_four_two">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <?php
                    if($this->session->flashdata('message')){ ?>
                        <div class="alert alert-success alert-dismissible"><?php echo $this->session->flashdata('message') ?>
                        <a href="<?php echo base_url(); ?>kontak">refresh page</a><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                        </div>
                    <?php   }
                ?>
            </div>
        </div>
        <form method="POST" action="<?php echo base_url();?>kontak/submit_kontak">
            <div class="row">

                <div class="col-lg-6 col-md-6 col-xs-12">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Nama *</label>
                        <input name="nama" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukkan nama anda" required>
                        <!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Subject * </label>
                        <input name="subject" type="text" class="form-control" id="exampleInputPassword1" placeholder="Masukkan subject pesan" required>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-xs-12">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Email *</label>
                        <input name="email" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukkan email anda" required>
                        <!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Telephone *</label>
                        <input name="telepon" type="text" class="form-control" id="exampleInputPassword1" placeholder="Masukkan telepon anda" required>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6 col-md-6 col-xs-12">
                    <div class="form-group">
                        <label for="exampleFormControlTextarea1">Isi Pesan</label>
                        <textarea name="pesan" class="form-control" id="exampleFormControlTextarea1" rows="5" placeholder="Isi Pesan"></textarea>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-xs-12">
                    <div class="form-group">
                        <label for="exampleFormControlTextarea1">Kritik dan Saran</label>
                        <textarea name="kritiksaran" class="form-control" id="exampleFormControlTextarea1" rows="5" placeholder="Berikan Kritik dan Saran"></textarea>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12 col-md-12 col-xs-12">
                    <div class="form-group">
                        <input type="submit" class="btn btn-primary" value="Submit">
                    </div>
                </div>
            </div>
        </form>
        <br/>
        <div class="row">
            <div class="col-lg-12 col-md-12 col-xs-12">
                <div style="border-radius:5px;" class="mapouter"><div class="gmap_canvas"><iframe width="100%" height="302" id="gmap_canvas" src="https://maps.google.com/maps?q=%20Jln.%20H.M%20Saleh%20No%202%20KM%207%2C%20Palembang%20Sukarami%2C%20Sumatera%20Selatan%2C%20Indonesia%2030153&t=&z=15&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe></div><style>.mapouter{position:relative;text-align:right;height:402px;width:100%;}.gmap_canvas {overflow:hidden;background:none!important;height:502px;width:100%;}</style></div>
            </div>
        </div>
    </div>
</section>