<section class="breadcrumbs_custom">
    <div class="container breadcrumbs_custom">
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="<?php echo base_url();?>">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Pendaftaran Pasien</li>
          </ol>
    </div>
</nav>  
</section>
<br/>
<br/>
<section style="margin-bottom:50px;">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-xs-12">
                <h4>Pendaftaran Pasien</h4>
            </div>
        </div>
        <section id="pasien" style="margin-top:25px;">
            <form method="POST" action="<?php echo base_url();?>main/submit_pasien">
                <div class="row">

                    <div class="col-lg-4 col-md-4 col-xs-12">
                        <?php   
                            if($this->session->flashdata('message')){ ?>
                                <div class="alert alert-success alert-dismissible"><?php echo $this->session->flashdata('message') ?>
                                <a href="" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                                </div>
                            <?php   }
                        ?>
                        <div class="form-group">
                            <label for="exampleInputEmail1">NIK *</label>
                            <input name="nik" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="" placeholder="Masukkan nama anda" required>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Nama *</label>
                            <input name="nama" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukkan nama anda" required>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Telepon * </label>
                            <input name="telepon" type="number" class="form-control" id="exampleInputPassword1" placeholder="Masukkan no.telepon anda" required>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">No. Kartu BPJS * </label>
                            <input name="bpjs" type="text" class="form-control" id="exampleInputPassword1" placeholder="Masukkan no.kartu BPJS anda" required>
                        </div>
                        <div class="form-group">
                            <input type="submit" class="btn btn-success btn-sm" value="Submit">
                        </div>
                    </div>
                </div>
            </form>
        </section>
    </div>
</section>
<br/>