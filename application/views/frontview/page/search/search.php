<section class="breadcrumbs_custom">
    <div class="container breadcrumbs_custom">
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb">
            <li class="breadcrumb-item">Total hasil pencarian : <?php echo sizeof($search_result); ?></li>
          </ol>
        </nav>  
    </div>
</section>
<section>
    <div class="album py-5 bg-light">
        <div class="container">
            <div class="containerblog">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-xs-12">
                        <center><div class="loaderse"></div></center>
                    </div>
                </div>
                <div>
                    <?php 
                        if(sizeof($search_result) > 0){
                            ?>
                                <div class="row" style="margin-top:20px;">
                                    <?php 
                                        if(isset($search_result)){
                                            foreach($search_result as $list){
                                                ?>
                                                    <div class="col-md-4">
                                                        <div class="card mb-4 box-shadow">
                                                            <?php
                                                                $image_path_result = "";
                                                                if($list->image_path == ""){
                                                                    $image_path_result =  base_url() .'assets/blog/thumb_img_default/thumb.png';
                                                                }else{
                                                                   $image_path_result =  base_url() .'assets/blog/thumb_img/'. $list->image_path ;
                                                                }
                                                            ?>
                                                            <a href="<?php echo base_url();?>artikel/<?php echo $list->slug?>"><img class="card-img-top" src="<?php echo $image_path_result;?>" alt="Card image cap" style="height:150px;background-size:cover;"></a>
                                                            <div class="card-body">
                                                            <a  style="color:#000;" href="<?php echo base_url();?>artikel/<?php echo $list->slug?>"><h5 class="blog_head"><?php echo $list->title?></h5></a>
                                                            <p class="card-text"><?php echo substr($list->content, 0, 150);?></p>
                                                            <div class="d-flex justify-content-between align-items-center">
                                                                <div class="btn-group">
                                                                    <small class="text-muted">9 mins</small>
                                                                </div>
                                                            </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                <?php
                                            }
                                        }
                                    ?>
                                </div>
                            <?php
                        }
                    ?>
                </div>
            </div>
        </div>
    </div>
</section>
