<div class="dashboard-wrapper">
	        <div class="dashboard-influence">
	            <div class="container-fluid dashboard-content">
	                <!-- ============================================================== -->
	                <!-- pageheader  -->
	                <!-- ============================================================== -->
	                <div class="row">
	                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
	                        <div class="page-header">
	                            <h3 class="mb-2">Kelola Kontak</h3>
	                            <div class="page-breadcrumb">
	                                <nav aria-label="breadcrumb">
	                                    <ol class="breadcrumb">
	                                        <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Dashboard</a></li>
	                                        <li class="breadcrumb-item active" aria-current="page">Kelola Kontak</li>
	                                    </ol>
	                                </nav>
	                            </div>
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
                                    <h5 class="mb-0">Daftar Kontak</h5>
                                </div>
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table id="kontak" class="table table-striped table-bordered second" style="width:100%">
                                            <thead>
                                                <tr>
                                                    <th>No</th>
                                                    <th>Nama</th>
                                                    <th>Email</th>
                                                    <th>Telepon</th>
                                                    <th>Subject</th>
                                                    <th>Pesan</th>
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
                                                        foreach($kontak as $list){
                                                            $i = $i + 1;
                                                            ?>
                                                        <tr>
                                                            <td><?php echo $i; ?></td>
                                                            <td><?php echo $list->nama; ?></td>
                                                            <td><?php echo $list->email; ?></td>
                                                            <td><?php echo $list->telepon; ?></td>
                                                            <td><?php echo $list->subject; ?></td>
                                                            <td><?php echo $list->pesan; ?></td>
                                                            <td><a href="<?php echo base_url()?>kontak/delete/<?php echo $list->id; ?>" class="btn btn-danger btn-xs">Delete</a></td>
                                                        </tr>
                                                    <?php }
                                                ?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- ============================================================== -->
                        <!-- end data table  -->
                        <!-- ============================================================== -->
                    </div>
                    <div class="row">
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                            <div class="card">
                                <!-- format uploads/uploads/#namapath/#namatable -->
                                <?php echo form_open_multipart('uploads/multiple/banners_promosi/contact_banner/contact'); ?>
                                    <h5 class="card-header">Upload Banner Promosi</h5>
                                    <div class="card-body">
                                            <div class="row">
                                                    <div class="col-lg-1 col-md-1 col-xs-6">
                                                    <img style="object-fit:cover;border-radius:10px;position:relative;top:6px;" width="50" height="50" id="img_thumb" src="<?php echo base_url() ?>assets/backview/images/image_default.png">
                                                    </div>
                                                    <div class="col-lg-11 col-md-11 col-xs-6 upload_component">
                                                        <div class="form-group">
                                                            <label for="exampleFormControlFile1">Upload multiple images* (best fit 1338px  * 371px)</label>
                                                            <input type="file" class="form-control" id="upload_thumb" name="berkas[]" multiple required>
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
                        <!-- ============================================================== -->
                        <!-- data table  -->
                        <!-- ============================================================== -->
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h5 class="mb-0">Banner List</h5>
                                </div>
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table id="example" class="table table-striped table-bordered second" style="width:100%">
                                            <thead>
                                                <tr>
                                                    <th>No</th>
                                                    <th>Nama foto</th>
                                                    <th>Image</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
                                                        $i = 0; 
                                                        foreach($contact_banner as $list){
                                                            $i = $i + 1;
                                                            ?>
                                                        <tr>
                                                            <td><?php echo $i; ?></td>
                                                            <td><?php echo $list->image_name; ?></td>
                                                            <td><img style="height:50px;border-radius:4px;" src="<?php echo base_url()?>/assets/banners_karir/<?php echo $list->image_name;?>"></td>
                                                            <th><a href="<?php echo base_url()?>uploads/delete/<?php echo $list->id; ?>/karir" class="btn btn-danger btn-xs">Delete</a></th>
                                                        </tr>
                                                    <?php }
                                                ?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- ============================================================== -->
                        <!-- end data table  -->
                        <!-- ============================================================== -->
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
            </div>
            <!-- ============================================================== -->
            <!-- end wrapper  -->
            <!-- ============================================================== -->
</div>

<script>
        $('#kontak').DataTable({
                "dom": 'Bfrtip',
                "buttons": [
                  {
                      extend: 'pdfHtml5',
                      title : 'Rumah Sakit Islam Ar-Rasyid',
                      filename : 'Daftar Kontak',
                      orientation: 'landscape',
                      autowidth: 'true',
                      pageSize : 'A4',
                      exportOptions: {
                        columns: [0,1,2,3,4,5]
                      },
                      customize: function ( doc ) {
                          // Splice the image in after the header, but before the tabl
                        //   doc.content[1].table.widths = Array(doc.content[1].table.body[0].length + 1).join('*').split(''),
                          doc.defaultStyle.fontSize = 10,
                          doc.styles.tableHeader.fontSize = 10,
                          doc.styles.title.fontSize = 14,
                          doc.content[0].text = doc.content[0].text.trim(),
                          // doc.content.splice( 1, 0, 
                          //     {
                          //       margin: [ 0, 0, 0, 2  ],
                          //       alignment: 'center',
                          //       text : 'Dinas Pendidikan'
                          //     }
                          // ),
                          // doc.content.splice( 2, 0, 
                          //     { 
                          //       margin: [ 0, 0, 0, 2  ],
                          //       alignment: 'center',
                          //       text : 'SD Negeri Berkat 3'
                          //     }
                          // ),
                          // doc.content.splice( 3, 0, 
                          //     {
                          //       margin: [ 0, 0, 0, 20  ],
                          //       alignment: 'center',
                          //       text : 'Alamat : Jalan Raya Desa Penyandingan Kec. SP. Padang, Kode pos : 30652'
                          //     }
                          // ),
                          doc.content.splice(1, 0, 
                              {
                                margin: [ 0, 0, 0, 11  ],
                                alignment: 'center',
                                text : 'Daftar Kontak'
                              }
                          )
                          // Data URL generated by http://dataurl.net/#dataurlmaker
                      }

                  }
                ],
                "pagingType": "full_numbers",
                "paging": true,
                "lengthMenu": [10, 25, 50, 75, 100],
              });  
</script>