
(function(fm) {

	var painel = $('#recomendacoes');

	$.getJSON('http://mirrorfashion.caelum.com.br/produtos?callback=?', function(retorno) {
		var ul = $('<ul>');

		$.each(retorno.produtos, function() {
			var li = $('<li class="recomendacoes">');
			var img = $('<img>').attr("src", this.imagem);
			var pNome = $('<p>').text(this.nome);
			var pPreco = $('<p>').text(formatadorMoeda.numberParaReal(this.preco));

			li.append(img).append(pNome).append(pPreco).appendTo(ul);

		});


		$('ul', painel).remove();
		ul.appendTo('#recomendacoes');


	})


})(formatadorMoeda)

