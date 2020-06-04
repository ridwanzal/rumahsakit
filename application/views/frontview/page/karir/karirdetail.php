<section class="breadcrumbs_custom">
    <div class="container breadcrumbs_custom">
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="<?php echo base_url();?>">Home</a></li>
            <li class="breadcrumb-item"><a href="<?php echo base_url();?>karir">Karir</a></li>
            <li class="breadcrumb-item active" aria-current="page">Lowongan kerja sebagai <?php echo $karir_open[0]->posisi; ?> </li>
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
                <h4>Lowongan Kerja sebagai '<?php echo $karir_open[0]->posisi; ?>'</h4>
                <br/>
                <div class="card">
                    <div class="card-body">
                            <?php echo $karir_open[0]->deskripsi; ?>
                    </div>
                </div>
            </div>
        </div>
        <br/>
        <div class="row">
            <div class="col-lg-6 col-md-6 col-xs-6">
                <?php
                    if($karir_open[0]->attachment != ''){
                        ?>
                            <img src="https://image.flaticon.com/icons/svg/2810/2810383.svg" style="height:19px;position:relative;top:-2px;">&nbsp;<a style="margin-left:10px;" download href="<?php echo base_url();?>assets/karir/attachment/<?php echo $karir_open[0]->attachment; ?>">Unduh brief lowongan pekerjaan</a>
                        <?php
                    }
                ?>
            </div>
            <div class="col-lg-6 col-md-6 col-xs-12">
                 <?php
                    if($karir_open[0]->type == 'manual'){
                        ?>
                            <button id="kliklamar" class="btn btn-primary btn-sm" style="float:right;">Lamar</button>
                        <?php
                    }else{
                        ?>
                            <a target="_blank" href="<?php echo $karir_open[0]->link?>"><button class="btn btn-success btn-sm" style="float:right;">Lamar via Google Form</button></a>
                        <?php
                    }
                 ?>
            </div>
        </div>
        <section id="lamar" style="display:none;margin-top:25px;">
            <form method="POST" action="<?php echo base_url();?>main/submit_lamaran">
                <div class="row">

                    <div class="col-lg-4 col-md-4 col-xs-12">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Nama *</label>
                            <input type="hidden" name="id_karir_open" value="<?php echo $karir_open[0]->id ?>">
                            <input name="nama" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukkan nama anda" required>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Email * </label>
                            <input name="email" type="email" class="form-control" id="exampleInputPassword1" placeholder="Masukkan email anda" required>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">CV (Curriculum Vitae) * </label>
                            <input name="berkas" type="file" class="form-control" id="exampleInputPassword1" placeholder="Masukkan subject pesan" required>
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