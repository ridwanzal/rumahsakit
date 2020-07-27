<div class="dashboard-wrapper">
	        <div class="dashboard-influence">
	            <div class="container-fluid dashboard-content">
	                <div class="row">
	                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
	                        <div class="page-header">
	                            <h3 class="mb-2">Kelola Fasilitas Layanan Penunjang</h3>
	                            <div class="page-breadcrumb">
	                                <nav aria-label="breadcrumb">
	                                    <ol class="breadcrumb">
	                                        <li class="breadcrumb-item"><a href="<?php echo base_url()?>/admin" class="breadcrumb-link">Dashboard</a></li>
                                            <li class="breadcrumb-item" aria-current="page"><a href="<?php echo base_url()?>/admin/layanan" class="breadcrumb-link">Kelola Fasilitas Layanan Penunjang</a></li>
                                            <li class="breadcrumb-item" aria-current="page"><?php echo $daftar_layanan_penunjang[0]->nama;?></li>
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
                                            <h5 class="card-header">Edit Layanan Penunjang Baru</h5>
                                            <div class="card-body">
                                                    <div class="row">
                                                            <div class="col-lg-1 col-md-1 col-xs-6">
                                                                <img style="object-fit:cover;border-radius:10px;position:relative;top:6px;margin-bottom:10px;" width="50" height="50" id="img_thumb" src="<?php echo base_url() ?>assets/layananpenunjang/thumb/<?php echo $daftar_layanan_penunjang[0]->thumb;?>">
                                                                <img style="object-fit:cover;border-radius:10px;position:relative;top:6px;margin-bottom:10px;display:none;" width="50" height="50" id="img_thumb_edit" src="<?php echo base_url() ?>assets/backview/images/image_default.png">
                                                            </div>
                                                            <br/>
                                                            <div class="col-lg-11 col-md-11 col-xs-12 upload_component">
                                                                <div class="form-group" >
                                                                    <div>
                                                                        <p>Ganti Logo &nbsp;<input type="checkbox" id="check_images"></p>
                                                                        <?php echo form_open_multipart('uploads/update/'.$daftar_layanan_penunjang[0]->id.'/penunjang/layanan_penunjang/penunjang'); ?>
                                                                            <div id="form_upload_edit" style="display:none;">
                                                                                <input type="file" placeholder="Pilih Gambar" id="upload_thumb_edit" name="berkas" required>&nbsp;
                                                                                <input type="submit" class="btn btn-success btn-xs"   name="upload_thumb_edit" value="Ganti Thumb">
                                                                            </div>
                                                                        <?php echo form_close(); ?>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                    </div>
                                                    <?php echo form_open_multipart('layananpenunjang/edit_layananpenunjang'); ?>
                                                        <input type="hidden" value="<?php echo $daftar_layanan_penunjang[0]->id;?>" name="id">
                                                        <div class="form-group">
                                                            <label for="inputText3" class="col-form-label">Judul</label>
                                                            <input id="inputText3" name="nama" tyspe="text" class="form-control" value="<?php echo $daftar_layanan_penunjang[0]->nama; ?>" required>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="exampleFormControlTextarea1">Content</label>
                                                            <textarea class="form-control" id="editor" rows="3" name="deskripsi" ><?php echo $daftar_layanan_penunjang[0]->deskripsi; ?></textarea>
                                                        </div>
                                                        <input style="padding-left:20px;padding-right:20px;" type="submit" value="Tambah" class="btn btn-sm btn-success" name="submit_layanan" id="submit blog"/> 
                                                    <?php echo form_close();?>
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
<script>
    $('document').ready(function(){
        $('#check_images').on('click', function(){
            let cek = $('#check_images').is(':checked');
            if(cek){
                $('#img_thumb').hide()
                $('#img_thumb_edit').show();
                $('#form_upload_edit').show();
            }else{
                $('#img_thumb').show()
                $('#img_thumb_edit').hide();
                $('#form_upload_edit').hide();
            }
        });

        $('#upload_thumb_edit').on('change', function(){
            var input = this;
            var url = $(this).val();
            var ext = url.substring(url.lastIndexOf('.') + 1).toLowerCase();
            if (input.files && input.files[0]&& (ext == "gif" || ext == "png" || ext == "jpeg" || ext == "jpg")) 
            {
                var reader = new FileReader();
                reader.onload = function (e) {
                $('#img_thumb_edit').attr('src', e.target.result);
                }
            reader.readAsDataURL(input.files[0]);
            }
            else
            {
            $('#img_thumb_edit').attr('src', '/assets/no_preview.png');
            }
        });
    });
</script>