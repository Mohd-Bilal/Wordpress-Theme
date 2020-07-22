<h2 class="team-head" id="team">Team</h2>
<div class="bd-example ">
    <div id="teamCarousel" class="carousel slide " data-ride="carousel">
   
        <div class="carousel-inner  justify-content-center"  >
            <div class="col-md-12 col-xs-12 align-self-center">
            <?php
            $args = array('post_type'=>'team','post_status'=>'publish','posts_per_page'=>4);
            $loop = new WP_Query($args);
            if($loop->have_posts()):
                $flag = True;
            while($loop->have_posts()) : $loop->the_post(); ?>
                    <?php 
            if($flag) :
                echo '<div class="carousel-item active team_carousel " >';
            else :
                echo '<div class="carousel-item team_carousel">';
            endif;
            $flag = False;
            ?>
                <div class="row justify-content-center align-items-center">
                    <div class="col-md-4 col-xs-12">
                        <img src="<?php echo get_the_post_thumbnail_url(get_the_ID(),'full'); ?>"
                            class="img-fluid  d-block rounded-circle team_carousel_image mx-auto" alt="...">
                    </div>
                    <div class="team-description col-md-5 col-xs-12 align-self-center"   >
                        <h2><?php the_title() ?></h2>
                        <p><?php the_excerpt() ?></p>
                    </div>
                </div>
            </div>

        <?php endwhile;
 
        else :
            echo '<p>There are no posts!</p>';
    
        endif;
        ?>
        </div>
        </div>

    <div >
        <a class="carousel-control-prev" href="#teamCarousel" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#teamCarousel" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
    <ol class="carousel-indicators" style="position:static;" >
            <li data-target="#teamCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#teamCarousel" data-slide-to="1"></li>
            <li data-target="#teamCarousel" data-slide-to="2"></li>
            <li data-target="#teamCarousel" data-slide-to="3"></li>

        </ol>
</div>


</div>