
$.fn.mbssel = function(elementMbssel, btnl, btnr) {

	btnl.on('click',function(event))

	var $right 		= $(elementMbssel).find('.right');
	var $left 		= $(elementMbssel).find('.left');
	var $isActive 	= $(elementMbssel).find('.is-active');

	$right.on('click'), function(event) {
		this.removeClass('.right').addClass('.is-active');
		this.nextSibling().removeClass({'.right', '.is-active', '.left'}).addClass('.right');
	}

	$left.on('click'), function(event) {
		this.removeClass('.left').addClass('.is-active');
		this.nextSibling().removeClass({'.right', '.is-active', '.left'}).addClass('.left');
	}


}