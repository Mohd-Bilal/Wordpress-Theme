<hr>
<div id="facility-nav" ></div>
<div class="container">
<h2 class="facility-head" id="facility">Facility</h2>

<div class="row card-deck" style="margin:0px;padding:0px">
    <!-- <div class="card-deck"> -->
    <?php
        $args = array('post_type'=>'facility','post_status'=>'publish','posts_per_page'=>4);
        $loop = new WP_Query($args);
        if($loop->have_posts()):
        while($loop->have_posts()) : $loop->the_post(); 
    ?>

    <!-- <div class="row">
        <div class="col-md-4">
            <img src="<?php echo get_the_post_thumbnail_url(get_the_ID(),'full'); ?>">
        </div>
        <h2><?php the_title() ?></h2>
        <br>
        <p><?php the_excerpt() ?></p>
    </div> -->

    <div class="col-md-3 d-flex align-items-stretch">
        <div class="card facilty_card " style="margin-left:0px;margin-right:0px">
            <img class="card-img-top facility_carousel_image" src="<?php echo get_the_post_thumbnail_url(get_the_ID(),'full'); ?>"
                alt="Card image cap">
            <div class="card-body">
                <h5 class="card-title"><?php the_title() ?></h5>
                <p class="card-text"><?php the_excerpt() ?></p>
            </div>
        </div>
    </div>



    <?php endwhile;
        else :
            echo '<p>There are no posts!</p>';
        endif;
    ?>
    <!-- </div> -->




</div>
<p class="facility_vip">In addition to this,AuO2 Studio also has a private VIP lounge for the discussions or rest you
    might want to have in between that creative action along with high speed internet access</p>

</div>