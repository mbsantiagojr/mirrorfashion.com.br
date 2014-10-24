
(function() {

	var inputs = document.querySelectorAll("#carrinho input");

	for (var i = 0; i < inputs.length; i++) {
		inputs[i].addEventListener("input", function(event) {
			var naoNumericos = /\D/g;
			if (naoNumericos.test(this.value)) {
				this.value = this.value.replace(naoNumericos, "");
			};

		});
	};

})();

