
$(document).ready(function(){
    // $.ajax({
    //     url: "<?php echo base_url() ?>blog/blog_content_list", 
    //     success: function(result){
    //     console.log('berhasil');
    //     console.log(result);
    // }});

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
    })
});