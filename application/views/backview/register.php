<div class="splash-container">
    <center><a href="<?php echo base_url();?>"><img src="<?php echo base_url();?>assets/frontview/img/logo2.png" alt=""></a></center>
    <br/>
    <div class="card">
        <div class="card-header">
            <h3 class="mb-1">Form Pendaftaran Akun</h3>
            <p>Mohon masukkan informasi akun anda.</p>
        </div>
        <div class="card-body">
            <?php
                if($this->session->flashdata('message')){ ?>
                    <div class="alert alert-success alert-dismissible"><?php echo $this->session->flashdata('message') ?>
                    <a href="<?php echo base_url()?>login   ">click</a><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                    </div>
                <?php   }

            ?>

            <form method="POST" action="<?php echo base_url('register/register'); ?>">
                <div class="form-group">
                    <input class="form-control form-control-lg" type="text" name="nama" required="" placeholder="Fullname" autocomplete="off" required>
                </div>
                <div class="form-group">
                    <input class="form-control form-control-lg" type="text" name="username" required="" placeholder="Username" autocomplete="off" required>
                </div>
                <div class="form-group">
                    <input class="form-control form-control-lg" type="email" name="email" required="" placeholder="E-mail" autocomplete="off" required>
                </div>
                <div class="form-group">
                    <input class="form-control form-control-lg" type="password" name="password" autocomplete="off" placeholder="Password" required>
                </div>
                <div class="form-group pt-2">
                    <input type="submit" class="btn btn-block btn-primary" value="Daftar"/>
                    <!-- <button class="btn btn-block btn-primary" type="submit">Register My Account</button> -->
                </div>
            </form>


            <div class="form-group">
                    <span class="">Dengan mendaftarkan, anda setuju dengan <a href="#">semua kebijakan</a>
            </div>
        </div>
        <div class="card-footer bg-white">
            <p>Sudah punya akun ? <a href="<?php echo base_url();?>login" class="text-secondary"> Login disini.</a></p>
        </div>
    </div>
<style>
    html,
    body {
        height: 100%;
    }

    body {
        display: -ms-flexbox;
        display: flex;
        -ms-flex-align: center;
        align-items: center;
        padding-top: 40px;
        padding-bottom: 40px;
    }
</style>