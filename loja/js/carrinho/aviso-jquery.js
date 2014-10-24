$('<button>', { id:"botaoaviso", class: "comprar"}).text("ESCONDER").prependTo("#carrinho").click(function() {

	var div = $('.aviso');
	div.toggle();

	if (div.is(":visible")) {

		$(this).text("ESCONDER");

	} else{

		$(this).text("AVISO");

	};

})