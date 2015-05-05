$(function(){
	var $djs = $('.dj'),
		_active = 'is_active',
		_close = 'js_dj_close',
		$dj_main = $('.dj_main_body'),
		$expand_container = $('.dj_expand');
	
	$expand_container.slideUp(0);
	
	$djs.on('click', function(e){
		var $this = $(this);
		var dj_expand = $this.attr('data-dj-id');
		var $dj_expand = $(dj_expand);
		
		if (! $this.hasClass(_active)){
			
			$djs.removeClass(_active);
			$this.addClass(_active);
			$dj_main.not($dj_expand)
				.css('height','35px')
				.fadeOut(100, function(){$(this).css('height','');})
				.removeClass(_active);
		
			$dj_expand.fadeIn(200);
			$dj_expand.closest($expand_container)
				.slideDown(300).addClass(_active);
		}else{
			$this.removeClass(_active)
			$dj_expand.fadeOut(300).removeClass(_active);
			$expand_container.slideUp(300).removeClass(_active);
		}
	});
	
	$dj_main.each(function(){
		var expando = $(this).attr('data-dj-expand'),
			$expando = $(expando);
		$(this).detach().appendTo($expando);
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