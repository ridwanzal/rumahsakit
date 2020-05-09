<section class="breadcrumbs_custom">
    <div class="container breadcrumbs_custom">
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="<?php echo base_url();?>">Home</a></li>
            <li class="breadcrumb-item"><a href="<?php echo base_url();?>artikel">Artikel</a></li>
            <?php 
                foreach ($datapost->result() as $row){ ?>
                    <li class="breadcrumb-item active" aria-current="page"><?php echo $row->title; ?></li>
                <?php }            
            ?>
          </ol>
        </nav>  
    </div>
</section>
<br/>
<br/>
<section class="section_four_two">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-8 col-xs-12">
                <?php 
                    foreach ($datapost->result() as $row){ ?>
                        <h2 style="font-family: 'Roboto Slab', serif; "><?php echo $row->title; ?></h2>
                        <br/>
                        <?php
                            if($row->image_path == '' || $row->image_path == NULL){ ?>
                                <img src="<?php echo base_url()?>assets/blog/thumb_img_default/thumb.png" style="width:inherit;margin-bottom:0px;border-radius:10px;">
                                <?php }else{ ?>
                                    <img src="<?php echo base_url()?>assets/blog/thumb_img/<?php echo $row->image_path;?>" style="width:inherit;margin-bottom:0px;border-radius:10px;">
                                    <?php }
                        ?>
                        <p class="date_image text-muted"><span style="font-weight:500;">Posted by : Admin&nbsp; - &nbsp;</span><?php echo $row->date_created; ?></p>
                        <div class="content">
                            <?php
                            echo $row->content; 
                            ?>
                        </div>
                    <?php }            
                ?>
            </div>
            <div class="col-lg-4 col-md-4 col-xs-12">
                <img src="<?php echo base_url()?>assets/frontview/img/flyerblog.png" style="width:inherit;margin-bottom:30px;border-radius:10px;">
            </div>
        </div>
    </div>
</section>
<section class="section_social_share">
 <div class="container">
    <div class="row">
       <div class="col-lg-8 col-md-8 col-xs-12">
            <h4>Bagikan</h4>
            <br/>
            <br/>
            <div style="display:flex;" class="share_social">
            <!-- https://bilba.go-jek.com/images/v4/custom/blog/whatsapp-social-icon-circle-color.svg -->
            <!-- https://bilba.go-jek.com/images/v4/custom/blog/twitter-social-icon-circle-color.svg -->
                <a href="https://api.whatsapp.com/send?text=<?php echo base_url();?>artikel/<?php $datapost->result()[0]->slug ?>"><img src="https://bilba.go-jek.com/images/v4/custom/blog/whatsapp-social-icon-circle-color.svg" alt="Whatsapp" /></a>
                <a href="https://www.facebook.com/sharer/sharer.php?u=<?php echo base_url();?>artikel/<?php $datapost->result()[0]->slug ?>"><img src="https://image.flaticon.com/icons/svg/145/145802.svg" alt="facebook" width="40px" /></a>
                <a href="https://twitter.com/intent/tweet?text=<?php echo base_url();?>artikel/<?php $datapost->result()[0]->slug ?>"><img src="https://bilba.go-jek.com/images/v4/custom/blog/twitter-social-icon-circle-color.svg" alt="Whatsapp" /></a>
            </div>
       </div>
    </div>
    <br/>
    <div class="row">
        <div class="col-lg-8 col-md-8 col-xs-12">
        <div id="disqus_thread"></div>
                    <script>

                    /**
                    *  RECOMMENDED CONFIGURATION VARIABLES: EDIT AND UNCOMMENT THE SECTION BELOW TO INSERT DYNAMIC VALUES FROM YOUR PLATFORM OR CMS.
                    *  LEARN WHY DEFINING THESE VARIABLES IS IMPORTANT: https://disqus.com/admin/universalcode/#configuration-variables*/
                    /*
                    var disqus_config = function () {
                    this.page.url = PAGE_URL;  // Replace PAGE_URL with your page's canonical URL variable
                    this.page.identifier = PAGE_IDENTIFIER; // Replace PAGE_IDENTIFIER with your page's unique identifier variable
                    };
                    */
                    (function() { // DON'T EDIT BELOW THIS LINE
                    var d = document, s = d.createElement('script');
                    s.src = 'https://rsarrasyidpalembang.disqus.com/embed.js';
                    s.setAttribute('data-timestamp', +new Date());
                    (d.head || d.body).appendChild(s);
                    })();
                    </script>
                    <noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>
                                                
        </div>
    </div>
 </div>
</section>