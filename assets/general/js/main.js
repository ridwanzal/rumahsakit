
$(document).ready(function(){
    $('#upload_thumb').on('change', function(){
        var input = this;
        var url = $(this).val();
        var ext = url.substring(url.lastIndexOf('.') + 1).toLowerCase();
        if (input.files && input.files[0]&& (ext == "gif" || ext == "png" || ext == "jpeg" || ext == "jpg")) 
        {
            var reader = new FileReader();

            reader.onload = function (e) {
            $('#img_thumb').attr('src', e.target.result);
            }
        reader.readAsDataURL(input.files[0]);
        }
        else
        {
        $('#img').attr('src', '/assets/no_preview.png');
        }
    });

    //fetch blog
    // fetchblog();

});


function fetchblog(){
    $('#containerblog').hide();
    $('#loaderse').fadeIn(100);
    $.ajax({
        url: "<?php echo base_url(); ?>blog/blog_content_list", 
        success: function(result){
        let decode_result = JSON.parse(result);
        let result_url;
        let url_link = "<? echo base_url() ?>";
        let slug = decode_result
        console.log(decode_result);
        let image_path = "";
        let i = 0;
        for(i; i < decode_result.length; i++){
          let cols = i + 1;
          result_url = url_link +'blog/artikel/'+  decode_result[i].slug;
          if(decode_result[i].image_path == ""){
              image_path = "<?php echo base_url() ?>assets/img/work/prowire.png";
          }else{
              image_path = "<?php echo base_url() ?>assets/thumb_img/" + decode_result[i].image_path ;
          }
          let adapter = `
            <div class="col-md-4">
                <div class="card mb-4 box-shadow">
                    <img class="card-img-top" src=`+image_path+` alt="Card image cap" style="height:150px;background-size:cover;">
                    <div class="card-body">
                    <h5 class="blog_head">`+decode_result[i].title+`</h5>
                    <p class="card-text">T`+decode_result[i].title+`</p>
                    <div class="d-flex justify-content-between align-items-center">
                        <div class="btn-group">
                            <small class="text-muted">`+decode_result[i].date_created+`</small>
                        </div>
                        <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
                    </div>
                    </div>
                </div>
            </div>
          `;
          setTimeout(function(){
              $('#bloglist_container').append($adapter);   
              $('#loaderse').fadeOut(100);
              $('.containerblog').fadeIn(100);
          }, 1)
        }
  }});
}