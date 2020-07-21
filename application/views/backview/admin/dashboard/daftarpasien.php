<div class="dashboard-wrapper">
	        <div class="dashboard-influence">
	            <div class="container-fluid dashboard-content">
	                <!-- ============================================================== -->
	                <!-- pageheader  -->
	                <!-- ============================================================== -->
	                <div class="row">
	                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
	                        <div class="page-header">
	                            <h3 class="mb-2">Kelola Pasien</h3>
	                            <div class="page-breadcrumb">
	                                <nav aria-label="breadcrumb">
	                                    <ol class="breadcrumb">
	                                        <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Dashboard</a></li>
	                                        <li class="breadcrumb-item active" aria-current="page">Kelola Pasien</li>
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
                                    <h5 class="mb-0">Daftar Pasien</h5>
                                </div>
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table id="daftar_pasien" class="table table-striped table-bordered second" style="width:100%">
                                            <thead>
                                                <tr>
                                                    <th>No</th>
                                                    <th>Nama</th>
                                                    <th>NIK</th>
                                                    <th>Kontak</th>
                                                    <th>BPJS</th>
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
                                                        foreach($daftarpasien as $list){
                                                            $i = $i + 1;
                                                            ?>
                                                        <tr>
                                                            <td><?php echo $i; ?></td>
                                                            <td><?php echo $list->nik; ?></td>
                                                            <td><?php echo $list->nama; ?></td>
                                                            <td><?php echo $list->no_telepon; ?></td>
                                                            <td><?php echo $list->bpjs; ?></td>
                                                            <td><a href="<?php echo base_url()?>pasien/delete/<?php echo $list->id; ?>" class="btn btn-danger btn-xs">Delete</a></td>
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
        $('#daftar_pasien').DataTable({
                "dom": 'Bfrtip',
                "buttons": [
                  {
                      extend: 'pdfHtml5',
                      title : 'Rumah Sakit Islam Ar-Rasyid',
                      filename : 'Daftar Pasien',
                      orientation: 'landscape',
                      autowidth: 'true',
                      pageSize : 'A4',
                      exportOptions: {
                        columns: [0,1,2,3,4]
                      },
                      styles: {overflow: 'linebreak', columnWidth: 'wrap'},
                      customize: function ( doc ) {
                          // Splice the image in after the header, but before the tabl
                          doc.defaultStyle.fontSize = 10,
                          doc.content[1].table.widths = Array(doc.content[1].table.body[0].length + 1).join('*').split(''),
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
                                margin: [ 0, 0, 0, 25  ],
                                alignment: 'center',
                                text : 'Daftar Pasien'
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