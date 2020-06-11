<div class="dashboard-wrapper">
	        <div class="dashboard-influence">
	            <div class="container-fluid dashboard-content">
	                <!-- ============================================================== -->
	                <!-- pageheader  -->
	                <!-- ============================================================== -->
	                <div class="row">
	                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
	                        <div class="page-header">
	                            <h3 class="mb-2">Kelola Blog</h3>
	                            <div class="page-breadcrumb">
	                                <nav aria-label="breadcrumb">
	                                    <ol class="breadcrumb">
	                                        <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Dashboard</a></li>
	                                        <li class="breadcrumb-item active" aria-current="page">Kelola Blog</li>
	                                    </ol>
	                                </nav>
	                            </div>
	                        </div>
	                    </div>
                    </div>
                    <div class="row">
                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                <div class="card">
                                        <?php echo form_open_multipart('blog/submit_blog'); ?>
                                            <h5 class="card-header">Input Post Baru</h5>
                                            <div class="card-body">
                                                    <div class="row">
                                                            <div class="col-lg-1 col-md-1 col-xs-6">
                                                            <img style="object-fit:cover;border-radius:10px;position:relative;top:6px;" width="50" height="50" id="img_thumb" src="<?php echo base_url() ?>assets/backview/images/image_default.png">
                                                            </div>
                                                            <div class="col-lg-11 col-md-11 col-xs-12 upload_component">
                                                            <div class="form-group">
                                                                <label for="exampleFormControlFile1">Thumbnails</label>
                                                                <input type="file" class="form-control" id="upload_thumb" name="upload_thumb" required>
                                                            </div>
                                                            </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="inputText3" class="col-form-label">Judul</label>
                                                        <input id="inputText3" name="blog_title" type="text" class="form-control" required>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="input-select">Kategori</label>
                                                        <select class="form-control" id="input-select" name="blog_category"  required>
                                                            <option value="">Pilih Kategori</option>
                                                            <option value="1">Artikel</option>
                                                            <option value="2">Berita</option>
                                                            <option value="3">Kegiatan</option>
                                                        </select>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="exampleFormControlTextarea1">Content</label>
                                                        <textarea class="form-control" id="editor" rows="3" name="blog_content"></textarea>
                                                    </div>
                                                    <!-- <input type="submit" value="Simpan sebagai Draft" class="btn btn-sm btn-primar y" name="submit_draft_blog" id="submit blog"/>  -->
                                                    <input style="padding-left:20px;padding-right:20px;" type="submit" value="Post" class="btn btn-sm btn-success" name="submit_blog" id="submit blog"/> 
                                            </div>
                                        <?php echo form_close();?>
                                </div>
                            </div>
                        </div> 
                        <div class="row">
                            <!-- ============================================================== -->
                            <!-- data table  -->
                            <!-- ============================================================== -->
                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h5 class="mb-0">Daftar Post</h5>
                                    </div>
                                    <div class="card-body">
                                        <div class="table-responsive">
                                            <table id="example" class="table table-striped table-bordered second" style="width:100%">
                                                <thead>
                                                    <tr>
                                                        <th>No</th>
                                                        <th>Id</th>
                                                        <th>Title</th>
                                                        <th>Author Id</th>
                                                        <th>Date Created</th>
                                                        <th>Category</th>
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
                                                            foreach($blog as $list){
                                                                $i = $i + 1;
                                                                ?>
                                                            <tr>
                                                                <td><?php echo $i; ?></td>
                                                                <td><?php echo $list->blog_id;; ?></td>
                                                                <td><?php echo $list->title; ?></td>
                                                                <td><?php echo $list->author_id; ?></td>
                                                                <td><?php echo $list->date_created; ?></td>
                                                                <td><?php echo $list->category; ?></td>
                                                                <td><a href="<?php echo base_url()?>blog/edit/<?php echo $list->blog_id; ?>" class="btn btn-primary btn-xs">Edit</a>&nbsp;<a href="<?php echo base_url()?>blog/deletepost/<?php echo $list->blog_id; ?>" class="btn btn-danger btn-xs">Delete</a></td>
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