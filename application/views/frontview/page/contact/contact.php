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
                <div class="col-lg-12 col-md-12 col-xs-12">
                    <div class="form-group">
                        <label for="exampleFormControlTextarea1">Isi Pesan *</label>
                        <textarea name="pesan" class="form-control" id="exampleFormControlTextarea1" rows="5" placeholder="Isi Pesan"></textarea>
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
    </div>
</section>