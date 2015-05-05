$(function(){
	var $djs = $('.dj'),
		_active = 'is_active',
		_close = 'js_dj_close';
	$djs.on('click', function(e){
		var $this = $(this);
		
		if (! $this.hasClass(_active)){
			$djs.removeClass(_active).css("z-index","0");
			$this.css("z-index","1");
			$this.addClass(_active);
		}else if ($(e.target).hasClass(_close)) {
			$djs.removeClass(_active);
		}
	});
	
	var $faqs = $('.faqs h3');
	var _url = window.location.href;
	
//	if (_url.indexOf('contact') === -1){
//		var $head = $('#masthead');
//		var $promo_wrap = $('<div class="promo bg_highlight pad_n"></div>');
//		var $promo_inner = $('<a class="bl promo_wrap txt_rev wrap" href="contact"><div id="js_promo" class="row txt_rev"></div></a>');
//		var promo = "<div class='column half smalls_whole'>\
//				<p class='txt_serif h4 space_n_b'>Still booking for 2015</p></div>\
//				<div class='column half smalls_whole'>\
//				<p class='h6 txt_merlot'>Contact us before April 10 for a discounted rate.</p></div>";
//
//		$promo_wrap.insertBefore($head).slideUp(0);
//		$promo_wrap.prepend($promo_inner);
//		$('#js_promo').prepend(promo);
//		$promo_wrap.slideDown(800);
//	}
	
});