<?php get_header() ?>
<h2 class="facility-head filmography-head" id="filmography">Filmography</h2>

<div class="filmography">
    <div class="col-md-12">
        <div class="row">
        <?php
        $args = array('post_type'=>'films','post_status'=>'publish','posts_per_page'=>-1,'orderby'=>'date','order'=>'DESC');
        $loop = new WP_Query($args);
        $ongoing_count = 0;
        if($loop->have_posts()):
            while($loop->have_posts()) : $loop->the_post(); 
                $dates = get_post_custom_values( 'date' );
                $links = get_post_custom_values( 'link' );
                $is_ongoing =get_post_custom_values('ongoing');
                if($is_ongoing[0]=="yes"):
                    $ongoing_count++;
                    if($ongoing_count<4):
        ?>
                    <div class="films col-md-4">
                    <div class="film-circle"><span><a href="<?php echo $links[0]?>"><?php the_title() ?></a><p><?php echo $dates[0]?></p></span></div>
                    </div>
        <?php 
                    endif;
                endif;
            endwhile;
        else :
                echo '<p>There are no posts!</p>';
        endif;
        ?>
        </div>
    </div>
        
    <div class="past-films">
    <?php
        $args = array('post_type'=>'films','post_status'=>'publish','posts_per_page'=>-1,'orderby'=>'date','order'=>'DESC');
        $loop = new WP_Query($args);
        if($loop->have_posts()):
            while($loop->have_posts()) : $loop->the_post(); 
                $dates = get_post_custom_values( 'date' );
                $links = get_post_custom_values( 'link' );
                $is_ongoing = get_post_custom_values('ongoing');
                if($is_ongoing[0]=="no"):
    ?>
                <div class="films col-md-6">
                    <p><a href="<?php echo $links[0]?>"><?php the_title() ?> </a>&nbsp&nbsp<?php echo $dates[0] ?></p>
                </div>
    <?php 
                endif;
            endwhile;
        else :
            echo '<p>There are no posts!</p>';
        endif;
    ?>
    </div>
</div>
<?php get_footer() ?>