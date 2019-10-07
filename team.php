<h2 class="team-head" id="team">Team</h2>
<div class="bd-example " style="margin-bottom:30px">
    <div id="teamCarousel" class="carousel slide" style="margin: 0 auto;" data-ride="carousel">
        <ol class="carousel-indicators" style="bottom:5wh">
            <li data-target="#teamCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#teamCarousel" data-slide-to="1"></li>
            <li data-target="#teamCarousel" data-slide-to="2"></li>
            <li data-target="#teamCarousel" data-slide-to="3"></li>

        </ol>
        <div class="carousel-inner team-carousel-item">
            <?php
            $args = array('post_type'=>'team','post_status'=>'publish','posts_per_page'=>4);
            $loop = new WP_Query($args);
            if($loop->have_posts()):
                $flag = True;
            while($loop->have_posts()) : $loop->the_post(); ?>
                    <?php 
            if($flag) :
                echo '<div class="carousel-item active team_carousel ">';
            else :
                echo '<div class="carousel-item team_carousel">';
            endif;
            $flag = False;
            ?>
            <div class="team-description row align-items-center">
                <div class="col-md-4 ">
                    <img src="<?php echo get_the_post_thumbnail_url(get_the_ID(),'full'); ?>"
                        class="img-fluid d-block rounded-circle team_carousel_image " alt="...">
                </div>
                <div class="col-md-8 align-self-center">
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

    <div style="bottom : 1px">
        <a class="carousel-control-prev" href="#teamCarousel" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#teamCarousel" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
</div>


</div>