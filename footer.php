<footer>
<div class="container-fluid">
<div class="footerstyle row" id="footer">
    <div class="col-md-6 col-sm-12 col-xm-12">
        <ul>
            <li><a href="#about">ABOUT</a></li>
            <li><a href="#facility">FACILITY</a></li>
            <li><a href="#gear">GEAR</a></li>
            <li><a href="#blog">BLOG</a></li>
            <li><a href="filmography">FILMOGRAPHY</a></li>
        </ul>
    </div>
    <div class="col-md-2 col-sm-12 col-xm-12 vl ">
    <img class="container d-flex flex-cloumn align-items-center justify-content-centre" src=<?php  echo get_template_directory_uri().'/images/Image2.png' ?>  alt="">
    <!-- <p>AUDIO STUDIOS</p> -->
    </div>
    <div class="col-md-4 col-sm-12 address">
        <h5>AuO2 Audio Studio</h5>
	<p>1st FLOOR, ILLIKAL ARCADE,<br>
	PUTHIYA ROAD JN. KADAVANTHRA,<br>  
	ERNAKULAM,<br>  
	KOCHi-682020</p>
    </div>
    </div>
</div>
</div>
</footer>

<?php wp_footer(); ?>
</body>

    <script>
    var jQuery = jQuery.noConflict()
jQuery(document).ready(function(){
  // Add scrollspy to <body>
  jQuery('body').scrollspy({target: ".navbar", offset: 50});   

  // Add smooth scrolling on all links inside the navbar
  jQuery("#navbarText a").on('click', function(event) {
    // Make sure this.hash has a value before overriding default behavior
    if (this.hash !== "") {
      // Prevent default anchor click behavior
      // event.preventDefault();

      // Store hash
      var hash = this.hash;
      if (jQuery(hash).length) {
        jQuery('html, body').animate({
        scrollTop: jQuery(hash).offset().top
      }, 800, function(){
   
        // Add hash (#) to URL when done scrolling (default click behavior)
        window.location.hash = hash;
      });
      
     }
     else{
      window.location.href = '../' + this.hash
     }
      // Using jQuery's animate() method to add smooth page scroll
      // The optional number (800) specifies the number of milliseconds it takes to scroll to the specified area

    }  // End if
    else{
      var href = this.href;

      window.location.href = href;
    }
  });
	jQuery('#nav-icon4').click(function(){
		jQuery(this).toggleClass('open');
  });
  
  // Add smooth scrolling on all links inside the footer
  jQuery("#footer a").on('click', function(event) {
    // Make sure this.hash has a value before overriding default behavior
    if (this.hash !== "") {
      // Prevent default anchor click behavior
      // event.preventDefault();

      // Store hash
      var hash = this.hash;
      if (jQuery(hash).length) {
        jQuery('html, body').animate({
        scrollTop: jQuery(hash).offset().top
      }, 800, function(){
   
        // Add hash (#) to URL when done scrolling (default click behavior)
        window.location.hash = hash;
      });
      
     }
     else{
      window.location.href = '../' + this.hash
     }
      // Using jQuery's animate() method to add smooth page scroll
      // The optional number (800) specifies the number of milliseconds it takes to scroll to the specified area

    }  // End if
    else{
      var href = this.href;

      window.location.href = href;
    }
  });
});
</script>
</html>
