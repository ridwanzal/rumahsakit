<div class="dashboard-wrapper">
	        <div class="dashboard-influence">
	            <div class="container-fluid dashboard-content">
	                <div class="row">
	                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
	                        <div class="page-header">
	                            <h3 class="mb-2">Edit <?php echo $konteks?></h3>
	                            <div class="page-breadcrumb">
	                                <nav aria-label="breadcrumb">
	                                    <ol class="breadcrumb">
	                                        <li class="breadcrumb-item"><a href="<?php echo base_url()?>/admin" class="breadcrumb-link">Dashboard</a></li>
                                            <li class="breadcrumb-item" aria-current="page"><a href="<?php echo base_url()?>/admin/profil" class="breadcrumb-link">Edit <?php echo $konteks;?></a></li>
                                            <li class="breadcrumb-item" aria-current="page"><?php echo $daftar[0]->nama;?></li>
                                            <li class="breadcrumb-item active" aria-current="page">Edit</li>
	                                    </ol>
	                                </nav>
	                            </div>
	                        </div>
	                    </div>
                    </div>
                    <div class="row">
                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                <div class="card">
                                        <?php echo form_open_multipart('profil/edit_profil'); ?>
                                            <input type="hidden" value="<?php echo $daftar[0]->id;?>" name="id">
                                            <h5 class="card-header">Edit <?php echo $konteks; ?></h5>
                                            <div class="card-body">
                                                    <!-- <div class="row">
                                                            <div class="col-lg-1 col-md-1 col-xs-6">
                                                            <img style="object-fit:cover;border-radius:10px;position:relative;top:6px;margin-bottom:10px;" width="50" height="50" id="img_thumb" src="<?php echo base_url() ?>assets/layananpenunjang/thumb/<?php echo $daftar[0]->thumb;?>">
                                                            </div>
                                                            <br/>
                                                            <div class="col-lg-11 col-md-11 col-xs-12 upload_component">
                                                            <div class="form-group">
                                                                <label for="exampleFormControlFile1">Thumbnails</label>
                                                                <input type="file" class="form-control" id="upload_thumb" name="upload_thumb" value="" required>
                                                            </div>
                                                            </div>
                                                    </div> -->
                                                    <div class="form-group">
                                                        <input type="hidden" name="konteks" value="<?php echo $konteks; ?>">
                                                        <label for="inputText3" class="col-form-label">Judul</label>
                                                        <input id="inputText3" name="nama" tyspe="text" class="form-control" value="<?php echo $daftar[0]->nama; ?>" required>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="exampleFormControlTextarea1">Content</label>
                                                        <textarea class="form-control" id="editor" rows="3" name="deskripsi" ><?php echo $daftar[0]->deskripsi; ?></textarea>
                                                    </div>
                                                    <input style="padding-left:20px;padding-right:20px;" type="submit" value="Tambah" class="btn btn-sm btn-success" name="submit_profil" id="submit blog"/> 
                                            </div>
                                        <?php echo form_close();?>
                                </div>
                            </div>
                        </div> 
                </div>
            </div>
    <div class="footer">
        <div class="container-fluid">
            <div class="row">
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                    Copyright © 2018 Concept. All rights reserved.
                </div>
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                    <div class="text-md-right footer-links d-none d-sm-block">
                        <a href="javascript: void(0);">About</a>
                        <a href="javascript: void(0);">Support</a>
                        <a href="javascript: void(0);">Contact Us</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>