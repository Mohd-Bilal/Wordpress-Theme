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
 


document.getElementById("nav-link").addEventListener("click",test);
function test(el){
	console.log(el)
	// var el = document.getElementById("nav-modal")
	// el.style.display = 'none'
    // el.setAttribute('aria-hidden', true)
	// el.removeAttribute('aria-modal')
	// jQuery(document.body).removeClass(ClassName.OPEN)
	// jQuery('.modal-backdrop').remove();
	jQuery("#nav-modal").modal("hide");

	// jQuery(el).trigger('hidden.bs.modal')

	jQuery('#nav-icon4').removeClass("open");
}
jQuery("#nav-icon4").on("click",function(){
	var el = document.getElementById("nav-modal")
	jQuery("#nav-modal").show();
	el.style.display = 'block'

});
