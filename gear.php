<div id="gear">
    <h2 class="facility-head">Gear</h2>
    <div class="container">
    <div class="row ">

        <div class="col-md-4 gear">
            <i class="fa fa-microphone fa-3x" aria-hidden="true"></i><br><br>
            <h2>Microphones</h2><br>
            <?php
            $args = array('post_type'=>'microphone','post_status'=>'publish');
            $loop = new WP_Query($args);
            if($loop->have_posts()):
            while($loop->have_posts()) : $loop->the_post(); 
            $stripped = str_replace(' ', '', get_the_title());
            ?>
            <a data-toggle="modal" data-target="#<?php echo $stripped ?>" href="#"><?php the_title() ?></a><br>
            <!-- Modal -->
            <div class="modal fade" id="<?php echo $stripped ?>" tabindex="-1" role="dialog"
                aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                    <div class="modal-content">
                        <div class="row">
                            <div class="col-md-6">
                                <img src="<?php echo get_the_post_thumbnail_url(get_the_ID(),'full'); ?>"class="img-fluid d-block" alt="...">
                            </div>
                            <div class="col-md-6">
                                <div class="modal-header">
                                    
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                <h1 class="modal-title" ><?php the_title() ?></h1>
                                    <p><?php the_excerpt() ?></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php endwhile;
            else :
                echo '<p>There are no posts!</p>';
            endif;
            ?>
        </div>

        <div class="col-md-4 gear">
             <i class="fa fa-audio-description fa-3x" aria-hidden="true"></i><br><br>
            <h2>Systems</h2><br>
            <?php
            $args = array('post_type'=>'system','post_status'=>'publish');
            $loop = new WP_Query($args);
            if($loop->have_posts()):
            while($loop->have_posts()) : $loop->the_post(); 
            $stripped = str_replace(' ', '', get_the_title());
            ?>
            <a data-toggle="modal" data-target="#<?php echo $stripped ?>" href="#"><?php the_title() ?></a><br>
            <!-- Modal -->
            <div class="modal fade" id="<?php echo $stripped ?>" tabindex="-1" role="dialog"
                aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                    <div class="modal-content">
                        <div class="row">
                            <div class="col-md-6">
                                <img src="<?php echo get_the_post_thumbnail_url(get_the_ID(),'full'); ?>"class="img-fluid d-block" alt="...">
                            </div>
                            <div class="col-md-6">
                                <div class="modal-header">
                                    
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                <h1 class="modal-title" ><?php the_title() ?></h1>
                                    <p><?php the_excerpt() ?></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php endwhile;
            else :
                echo '<p>There are no posts!</p>';
            endif;
            ?>
        </div>

        <div class="col-md-4 gear">
            <i class="fa fa-headphones fa-3x" aria-hidden="true"></i><br><br>
            <h2>Headphones</h2><br>
            <?php
            $args = array('post_type'=>'headphone','post_status'=>'publish');
            $loop = new WP_Query($args);
            if($loop->have_posts()):
            while($loop->have_posts()) : $loop->the_post(); 
            $stripped = str_replace(' ', '', get_the_title());
            ?>
            <a data-toggle="modal" data-target="#<?php echo $stripped ?>" href="#"><?php the_title() ?></a><br>
            <!-- Modal -->
            <div class="modal fade" id="<?php echo $stripped ?>" tabindex="-1" role="dialog"
                aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                    <div class="modal-content">
                        <div class="row">
                            <div class="col-md-6">
                                <img src="<?php echo get_the_post_thumbnail_url(get_the_ID(),'full'); ?>"class="img-fluid d-block" alt="...">
                            </div>
                            <div class="col-md-6">
                                <div class="modal-header">
                                    
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                <h1 class="modal-title" ><?php the_title() ?></h1>
                                    <p><?php the_excerpt() ?></p>
                                </div>
                            </div>
                        </div>
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
    </div>
</div>