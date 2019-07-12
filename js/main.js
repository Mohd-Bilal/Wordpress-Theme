jQuery(document).ready(function(){
  jQuery(".owl-carousel").owlCarousel({
  	loop:true,
  	stagePadding:50,
  	items:2,
  	nav:true,
  	navText: ["<img src='myprevimage.png'>","<img src='mynextimage.png'>"]
  });
});