
(function() {

	var aviso = document.querySelector(".aviso");
	// var botao = document.querySelector("#botaoaviso");
	var botao = document.createElement("button");


	botao.id = "botaoaviso";
	botao.textContent = "Aviso";
	botao.classList.add("comprar");

	aviso.parentNode.insertBefore(botao, document.querySelector("#carrinho"));

	botao.addEventListener("click", function(event) {
		aviso.classList.toggle("invisivel");

		if (aviso.classList.contains("invisivel")) {
			this.textContent = "Aviso";
		} else{
			this.textContent = "Esconder";
		};
	})


})();