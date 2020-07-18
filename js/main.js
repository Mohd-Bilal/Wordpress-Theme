jQuery(document).ready(function(){
  jQuery(".owl-carousel").owlCarousel({
  	loop:true,
  	stagePadding:50,
	responsiveClass:true,
	responsive:{
		0:{
            items:1,
		},
		1200:{
			items:2,
		}
	}
  });
});

const ClassName = {
	SCROLLABLE         : 'modal-dialog-scrollable',
	SCROLLBAR_MEASURER : 'modal-scrollbar-measure',
	BACKDROP           : 'modal-backdrop',
	OPEN               : 'modal-open',
	FADE               : 'fade',
	SHOW               : 'show'
  }
 


document.getElementById("navbarText").addEventListener("click",function (el){
							el.preventDefault()	
							
});
window.addEventListener("scroll",test);
function test(el){
	el.preventDefault()
	jQuery('#nav-icon4').removeClass("open");
	jQuery('#navbarText').collapse("hide") 
	
	// jQuery('#nav-icon4').click()
}

jQuery(window).scroll(function(){
	jQuery('nav').toggleClass('scrolled', jQuery(this).scrollTop() > 490);
});

// jQuery(document.getElementById('links')).click(function(e){
// 	console.log("njn ivedet")
// 	e.preventDefault()
// 	jQuery("#nav-modal").modal("hide");
// 	jQuery('#nav-icon4').removeClass("open");
// 	window.location.href = 'www.google.com'
// })

// jQuery("#nav-icon4").on("click",function(){
// 	var el = document.getElementById("nav-modal")
// 	jQuery("#nav-modal").show();
// 	el.style.display = 'block'

// });
jQuery('body').on('show.bs.modal', function () { 
	jQuery('.sticky-top').addClass("fixModalNav");
	jQuery('body').addClass("fixModal"); 
}); 
jQuery('body').on('hidden.bs.modal', function () {
	jQuery('.sticky-top').removeClass("fixModalNav");
	jQuery('body').removeClass("fixModal"); 
});
