
<section class="section_footer">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                <h5>Informasi</h5>
                <ul class="list-unstyled text-small">
                    <li class="text-muted">
                    Jln. H.M Saleh No 2 KM 7, Palembang - Jambi
                    </li>
                    <li class="text-muted">
                     Telp : (0711) 5610503
                    </li>
                    <li class="text-muted">
                     Fax : (0711) 5610503
                    </li>
                </ul>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                <h5>Layanan</h5>
                <ul class="list-unstyled text-small listfooters">
                    <li><a class="text-muted" href="#">IGD</a></li>
                    <li><a class="text-muted" href="#">Radiologi</a></li>
                    <li><a class="text-muted" href="#">Laboratorium</a></li>
                    <li><a class="text-muted" href="#">Poliklinik</a></li>
                </ul>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                <h5>Informasi</h5>
                <ul class="list-unstyled text-small listfooters">
                    <li><a class="text-muted" href="#">Pengunjung</a></li>
                    <li><a class="text-muted" href="#">H & K Pasien</a></li>
                    <li><a class="text-muted" href="#">PMKP</a></li>
                </ul>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
            <h5>Social</h5>
                <div style="display:flex;float:left;margin-top:2px;" id="footer_rights2">
                        <a href="https://www.facebook.com/Rumah-Sakit-Islam-Ar-rasyid-114286013618366"><img src="https://image.flaticon.com/icons/svg/145/145802.svg" style="width:40px;"></a>
                        <a href="https://instagram.com/rs_islam_arrasyid"><img src="https://image.flaticon.com/icons/svg/145/145805.svg" style="width:40px;"></a>
                        <!-- <a href="#"><img src="https://image.flaticon.com/icons/svg/145/145812.svg" style="width:40px;"></a> -->
                        <!-- <a href="#"><img src="https://image.flaticon.com/icons/svg/1384/1384060.svg" style="width:40px;"></a> -->
                </div>
            </div>
        </div>
    </div>
</section>
<section class="footer_last">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-6 col-xs-12">
                <p class="text-muted">Copyright © 2020. All Right Reserved. Affiliation with <a style="" href='http://marcodigitalpartner.com/'>Marco Digital Partner.</a>
                <div class="">
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-xs-12">
                <div style="display:flex;float:right;" id="footer_rights">
                    <a href="<?php base_url();?>">Home</a>
                    <a href="<?php base_url();?>galeri">Galeri</a>
                    <a href="<?php base_url();?>karir">Karir</a>
                    <a href="<?php base_url();?>kontak">Kontak</a>
                    <a href="<?php base_url();?>kontak">Promosi</a>
                </div>
            </div>
        </div>
    </div>
</section>
<a id="wafloats" href="https://api.whatsapp.com/send?phone=++6281928529335&text=Assalamu'alaikum Wr Wb" class="floatwa" target="_blank"><i class="fa fa-whatsapp my-floatwa"></i></a>

<!-- Js Plugins -->
<script src="<?php echo base_url();?>/assets/frontview/js/jquery-3.3.1.min.js"></script>
<script src="<?php echo base_url();?>/assets/frontview/js/bootstrap.min.js"></script>
<script src="<?php echo base_url();?>/assets/frontview/js/jquery.magnific-popup.min.js"></script>
<script src="<?php echo base_url();?>/assets/frontview/js/jquery-ui.min.js"></script>
<script src="<?php echo base_url();?>/assets/frontview/js/jquery.nice-select.min.js"></script>
<script src="<?php echo base_url();?>/assets/frontview/js/jquery.slicknav.js"></script>
<script src="<?php echo base_url();?>/assets/frontview/js/owl.carousel.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/ekko-lightbox/5.3.0/ekko-lightbox.js"></script>
<script src="<?php echo base_url();?>/assets/frontview/js/main.js"></script>
<script>
    $(document).ready(function(){
        $('#containerblog').hide();
        $('.loaderse').fadeIn(100);
        imgviewer();
        fetchblog();
        fetchlayanan();
        fetchlayanan_penunjang();
        lamar();
        $('#search_submit').on('click', function(){
            let keyword = $('#search_input').val();

        });

    });


    function lamar(){
        $('#kliklamar').on('click', function(){
            $('#lamar').toggle();
        });
    }

    function shorten_text(text){
       let result = jQuery.trim(text).substring(0, 150)
        .split(" ").slice(0, -1).join(" ") + "...";
        return result;
    }

    function imgviewer(){
        $('.image_container').on('click', '[data-toggle="lightbox"]', function(event) {
            event.preventDefault();
            $(this).ekkoLightbox();
        });
    }

    function fetchblog_search(keyword){
        $.ajax({
            method: 'get',
            url: "<?php echo base_url(); ?>blog/blog_content_list_search?keyword="+keyword+"", 
            success: function(result){
                    console.log(result);
                    let decode_result = JSON.parse(result);
                    let result_url;
                    let url_link = "<?php echo base_url() ?>";
                    let slug = decode_result
                    console.log(decode_result);
                    let image_path = "";
                    let i = 0;
                    for(i; i < decode_result.length; i++){
                    let cols = i + 1;
                    result_url = url_link +'artikel/'+  decode_result[i].slug;
                    if(decode_result[i].image_path == ""){
                        image_path = "<?php echo base_url();?>assets/blog/thumb_img_default/thumb.png";
                    }else{
                        image_path = "<?php echo base_url() ?>assets/blog/thumb_img/" + decode_result[i].image_path ;
                    }
                    let adapter = `
                        <div class="col-md-4">
                            <div class="card mb-4 box-shadow">
                                <a href=`+result_url+`><img class="card-img-top" src=`+image_path+` alt="Card image cap" style="height:150px;background-size:cover;"></a>
                                <div class="card-body">
                                <a href="`+result_url+`" style="color:#000;"><h5 class="blog_head">`+decode_result[i].title+`</h5></a>
                                <p class="card-text">`+shorten_text(decode_result[i].content)+`</p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="btn-group">
                                        <small class="text-muted">`+decode_result[i].date_created+`</small>
                                    </div>
                                </div>
                                </div>
                            </div>
                        </div>
                    `;
                    setTimeout(function(){
                        $('#bloglist_container').append(adapter);   
                        $('.loaderse').fadeOut(500);
                        $('.containerblog').fadeIn(100);
                    }, 1)
                    }
            }
        });
    }

    function fetchblog(){
        $.ajax({
            url: "<?php echo base_url(); ?>blog/blog_content_list", 
            success: function(result){
                    console.log(result);
                    let decode_result = JSON.parse(result);
                    let result_url;
                    let url_link = "<?php echo base_url() ?>";
                    let slug = decode_result
                    console.log(decode_result);
                    let image_path = "";
                    let i = 0;
                    for(i; i < decode_result.length; i++){
                    let cols = i + 1;
                    result_url = url_link +'artikel/'+  decode_result[i].slug;
                    if(decode_result[i].image_path == ""){
                        image_path = "<?php echo base_url();?>assets/blog/thumb_img_default/thumb.png";
                    }else{
                        image_path = "<?php echo base_url() ?>assets/blog/thumb_img/" + decode_result[i].image_path ;
                    }
                    let adapter = `
                        <div class="col-md-4">
                            <div class="card mb-4 box-shadow">
                                <a href=`+result_url+`><img class="card-img-top" src=`+image_path+` alt="Card image cap" style="height:150px;background-size:cover;"></a>
                                <div class="card-body">
                                <a href="`+result_url+`" style="color:#000;"><h5 class="blog_head">`+decode_result[i].title+`</h5></a>
                                <p class="card-text">`+shorten_text(decode_result[i].content)+`</p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="btn-group">
                                        <small class="text-muted">`+decode_result[i].date_created+`</small>
                                    </div>
                                </div>
                                </div>
                            </div>
                        </div>
                    `;
                    setTimeout(function(){
                        $('#bloglist_container').append(adapter);   
                        $('.loaderse').fadeOut(500);
                        $('.containerblog').fadeIn(100);
                    }, 1)
                    }
            }
        });
    }


    function fetchlayanan(){
        $.ajax({
            url: "<?php echo base_url(); ?>layanan/daftar_layanan", 
            success: function(result){
                    let decode_result = JSON.parse(result);
                    let result_url;
                    let url_link = "<?php echo base_url() ?>";
                    let slug = decode_result
                    console.log(decode_result);
                    let image_path = "";
                    let i = 0;
                    for(i; i < decode_result.length; i++){
                        let cols = i + 1;
                        result_url = url_link +'layanan/list/'+  decode_result[i].slug;
                        if(decode_result[i].thumb == ""){
                            image_path = "<?php echo base_url();?>assets/blog/thumb_img_default/thumb.png";
                        }else{
                            image_path = "<?php echo base_url() ?>assets/layanan/thumb/" + decode_result[i].thumb ;
                        }
                        let adapter = `
                            <div class="col-md-4">
                                <div class="card mb-4 ">
                                    <a href=`+result_url+` style="color:#444;">
                                        <div class="card-body">
                                            <div class="row">
                                                    <div class="col-lg-3 col-md-3 col-xs-3 img_bar">
                                                    <img src=`+image_path+` style="border:1px solid #bbb; position:relative;top:5px;width:65px;height:65px;background-size:cover;margin-bottom:0px;border-radius:50px;">
                                                    </div>
                                                    <div class="col-lg-9 col-md-9 col-xs-12">
                                                        <h6>`+decode_result[i].nama+`</h6>
                                                        <p class="card-text">`+limitstr(decode_result[i].deskripsi)+`</p>
                                                    </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        `;
                        $('.layanan_container').append(adapter);   
                    }
            }
        });
    }

    function limitstr(str){
        result = str.substr(3, 200).concat('...'); 
        return result;
    }

    function fetchlayanan_penunjang(){
        $.ajax({
            url: "<?php echo base_url(); ?>layananpenunjang/daftar_layananpenunjang", 
            success: function(result){
                    let decode_result = JSON.parse(result);
                    let result_url;
                    let url_link = "<?php echo base_url() ?>";
                    let slug = decode_result
                    console.log(decode_result);
                    let image_path = "";
                    let i = 0;
                    for(i; i < decode_result.length; i++){
                        let cols = i + 1;
                        result_url = url_link +'layanan_penunjang/list/'+  decode_result[i].slug;
                        if(decode_result[i].thumb == ""){
                            image_path = "<?php echo base_url();?>assets/blog/thumb_img_default/thumb.png";
                        }else{
                            image_path = "<?php echo base_url() ?>assets/layananpenunjang/thumb/" + decode_result[i].thumb ;
                        }
                        let adapter = `<div class="col-md-4">
                                <div class="card mb-4 ">
                                    <a href=`+result_url+` style="color:#444;">
                                        <div class="card-body">
                                            <div class="row">
                                                    <div class="col-lg-3 col-md-3 col-xs-3 img_bar">
                                                    <img src=`+image_path+` style="border:1px solid #bbb; position:relative;top:5px;width:65px;height:65px;background-size:cover;margin-bottom:0px;border-radius:50px;">
                                                    </div>
                                                    <div class="col-lg-9 col-md-9 col-xs-12">
                                                        <h6>`+decode_result[i].nama+`</h6>
                                                        <p class="card-text">`+decode_result[i].deskripsi+`</p>
                                                    </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>`;
                        $('.layananpenunjang_container').append(adapter);   
                    }
            }
        });
    }
</script>

</body>

</html>