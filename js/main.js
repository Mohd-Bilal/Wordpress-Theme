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
 


document.getElementById("navbarText").addEventListener("click",test);
function test(el){
	el.preventDefault()
	jQuery('#nav-icon4').removeClass("open");
	jQuery('#navbarText').collapse("hide") 
}

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
