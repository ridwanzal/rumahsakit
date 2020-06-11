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
                                            <li class="breadcrumb-item" aria-current="page">Kelola Blog</li>
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
                                        <?php echo form_open_multipart('blog/edit_blog'); ?>
                                            <h5 class="card-header">Edit Post</h5>
                                            <div class="card-body">
                                                    <!-- <div class="row">
                                                            <div class="col-lg-1 col-md-1 col-xs-6">
                                                            <img style="object-fit:cover;border-radius:10px;position:relative;top:6px;" width="50" height="50" id="img_thumb" src="<?php echo base_url() ?>assets/backview/images/image_default.png">
                                                            </div>
                                                            <div class="col-lg-11 col-md-11 col-xs-12 upload_component">
                                                            <div class="form-group">
                                                                <label for="exampleFormControlFile1">Thumbnails</label>
                                                                <input type="file" class="form-control" id="upload_thumb" name="upload_thumb" required>
                                                            </div>
                                                            </div>
                                                    </div> -->
                                                    <div class="form-group">
                                                        <label for="inputText3" class="col-form-label">Judul</label>
                                                        <input  name="blog_id" type="hidden" class="form-control" value="<?php echo $blog[0]->blog_id;?>">
                                                        <input id="inputText3" name="blog_title" type="text" class="form-control" value="<?php echo $blog[0]->title;?>" required>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="input-select">Kategori</label>
                                                        <select class="form-control" id="kategoriid" name="blog_category" value="<?php echo $blog[0]->category;?>" select >
                                                            <option value="">Pilih Kategori</option>
                                                            <option value="1">Artikel</option>
                                                            <option value="2">Berita</option>   
                                                            <option value="3">Kegiatan</option>
                                                        </select>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="exampleFormControlTextarea1">Content</label>
                                                        <textarea class="form-control" id="editor" rows="3" name="blog_content"><?php echo $blog[0]->content;?></textarea>
                                                    </div>
                                                    <!-- <input type="submit" value="Simpan sebagai Draft" class="btn btn-sm btn-primar y" name="submit_draft_blog" id="submit blog"/>  -->
                                                    <input style="padding-left:20px;padding-right:20px;" type="submit" value="Post Edit" class="btn btn-sm btn-success" name="submit_blog" id="submit blog"/> 
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

<script>
        document.getElementById("kategoriid").value = "<?php echo $blog[0]->category;?>";
</script>   