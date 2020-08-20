<div class="dashboard-wrapper">
	        <div class="dashboard-influence">
	            <div class="container-fluid dashboard-content">
	                <!-- ============================================================== -->
	                <!-- pageheader  -->
	                <!-- ============================================================== -->
	                <div class="row">
	                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
	                        <div class="page-header">
	                            <h3 class="mb-2">Kelola Rekanan</h3>
	                            <div class="page-breadcrumb">
	                                <nav aria-label="breadcrumb">
	                                    <ol class="breadcrumb">
	                                        <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Dashboard</a></li>
	                                        <li class="breadcrumb-item active" aria-current="page">Kelola Rekanan</li>
	                                    </ol>
	                                </nav>
	                            </div>
	                        </div>
	                    </div>
                    </div>
                    <div class="row">
                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                <div class="card">

                                        <!-- format uploads/uploads/#namapath/#namatable -->
                                        <?php echo form_open_multipart('uploads/singlewithlink/rekanan/rekanan/rekanan'); ?>
                                            <h5 class="card-header">Upload Image</h5>
                                            <div class="card-body">
                                                    <div class="row">
                                                            <div class="col-lg-1 col-md-1 col-xs-6">
                                                            <img style="object-fit:cover;border-radius:10px;position:relative;top:6px;" width="50" height="50" id="img_thumb" src="<?php echo base_url() ?>assets/backview/images/image_default.png">
                                                            </div>
                                                            <div class="col-lg-11 col-md-11 col-xs-6" style="position: relative;left: -57px;">
                                                                <div class="form-group">
                                                                    <label for="exampleFormControlFile1">Upload images*</label>
                                                                    <input type="file" class="form-control" id="upload_thumb" name="berkas" required>
                                                                </div>
                                                                <div class="form-group"> 
                                                                    <input type="text" placeholder="Caption Image" class="form-control" id="caption" name="caption"  required>
                                                                </div>
                                                                <div class="form-group"> 
                                                                    <input type="text" placeholder="Link Web" class="form-control" id="link" name="link"  required>
                                                                </div>
                                                                <div class="form-group">
                                                                    <input type="submit" value="Upload" class="btn btn-sm btn-success"/> 
                                                                </div>
                                                            </div>
                                                    </div>
                                            </div>
                                        <?php echo form_close();?>
                                </div>
                            </div>
                        </div> 
                        <div class="row">
                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h5 class="mb-0">Daftar Image</h5>
                                    </div>
                                    <div class="card-body">
                                        <div class="table-responsive">
                                            <table id="example" class="table table-striped table-bordered second" style="width:100%">
                                                <thead>
                                                    <tr>
                                                        <th>No</th>
                                                        <th>Nama foto</th>
                                                        <th>Image</th>
                                                        <th>Caption</th>
                                                        <th style="display:none;">Link</th>
                                                        <th>Action</th>
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
                                                            foreach($rekanan as $list){
                                                                $i = $i + 1;
                                                                ?>
                                                            <tr>
                                                                <td><?php echo $i; ?></td>
                                                                <td><?php echo $list->image_name; ?></td>
                                                                <td><img style="height:50px;border-radius:4px;" src="<?php echo base_url()?>/assets/rekanan/<?php echo $list->image_name;?>"></td>
                                                                <td><?php echo $list->caption;?></td>
                                                                <td width="20%" style="display:none;overflow: hidden;text-overflow: ellipsis;"><?php echo $list->link;?></td>
                                                                <th><a href="<?php echo base_url()?>uploads/delete/<?php echo $list->id; ?>/rekanan" class="btn btn-danger btn-xs">Delete</a></th>
                                                            </tr>
                                                        <?php }
                                                    ?>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                </div>
                <!-- ============================================================== -->
                <!-- footer -->
                <!-- ============================================================== -->
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
                <!-- ============================================================== -->
                <!-- end footer -->
                <!-- ============================================================== -->
            </d>
            <!-- ============================================================== -->
            <!-- end wrapper  -->
            <!-- ============================================================== -->
</div>