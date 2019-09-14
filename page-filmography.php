<?php get_header() ?>
<h2 class="facility-head filmography-head" id="filmography">Filmography</h2>

<div class="filmography row">
    <div class="col-md-12">
        <div class="row">
            <div class=" col-md-4">
            <div class="film-circle"><span>Lorem ipsum</span></div>
            </div>
            <div class=" col-md-4">
            <div class="film-circle"><span>Lorem ipsum</span></div>
            </div>
            <div class="  col-md-4">
            <div class="film-circle"><span>Lorem ipsum</span></div>
            </div>
        </div>
    </div>


    <?php
        $args = array('post_type'=>'films','post_status'=>'publish','posts_per_page'=>-1);
        $loop = new WP_Query($args);
        if($loop->have_posts()):
        while($loop->have_posts()) : $loop->the_post(); 
        $dates = get_post_custom_values( 'date' );
        $links = get_post_custom_values( 'link' );
    ?>

    

    <div class="films col-md-6">
    <p><a href="<?php echo $links[0]?>"><?php the_title() ?> </a>&nbsp&nbsp<?php echo $dates[0] ?></p>
        </div>

    <?php endwhile;
        else :
            echo '<p>There are no posts!</p>';
        endif;
    ?>
</div>
<?php get_footer() ?>