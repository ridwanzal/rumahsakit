<div class="splash-container">
    <center><a href="<?php echo base_url();?>"><img width="60%;" src="<?php echo base_url();?>assets/frontview/img/logo4.svg" alt=""></a></center>
    <br/>
    <div class="card ">
        <div class="card-header text-center">
            <a href="../index.html"></a><span class="splash-description"><label style="font-weight:bold; font-size:25px;">Login</label></span></div>
        <div class="card-body">
            <?php
                if($this->session->flashdata('message')){ ?>
                    <div class="alert alert-danger alert-dismissible"><?php echo $this->session->flashdata('message') ?>
                        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                    </div>
                <?php   }
            ?>
            <form method="POST" action="<?php echo base_url();?>login/login">
                <div class="form-group">
                    <input class="form-control form-control-lg" name="username" id="username" type="text" placeholder="Username" autocomplete="off" required>
                </div>
                <div class="form-group">
                    <input class="form-control form-control-lg" name="password" id="password" type="password" placeholder="Password" autocomplete="off" required>
                </div>
                <input type="submit" class="btn btn-primary btn-lg btn-block" value="Login">
            </form>
        </div>
        <div class="card-footer bg-white p-0  ">
            <div class="card-footer-item card-footer-item-bordered">
            </div>
        </div>
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