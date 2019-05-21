<?php get_header() ?>
<!-- <img src=<?php  echo get_template_directory_uri().'/images/carousel_image_main.jpg' ?> > -->
<body>

<div class="bd-example">
  <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
      <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
      <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src=<?php  echo get_template_directory_uri().'/images/carousel_image_main.jpg' ?> class="d-block w-100 " alt="...">
        <div class="carousel-caption  text-left car-overlay">
          <h1>A space that embraces <br>technology, artistry <br> and creativity</h1>
          <br>
          <p>Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
          <a>Learn more >></a>
        </div>
      </div>
      <div class="carousel-item">
        <img src=<?php  echo get_template_directory_uri().'/images/carousel_image_main.jpg' ?> class="d-block w-100" alt="...">
        <div class="carousel-caption  text-left car-overlay">
          <h1>Second slide label</h1>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
          <a>Learn more >></a>
        </div>
      </div>
      <div class="carousel-item">
        <img src=<?php  echo get_template_directory_uri().'/images/carousel_image_main.jpg' ?> class="d-block w-100" alt="...">
        <div class="carousel-caption  text-left car-overlay">
          <h1>Third slide label</h1>
          <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur.</p>
          <a>Learn more >></a>
        </div>
      </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>
</body>
<?php get_footer() ?>