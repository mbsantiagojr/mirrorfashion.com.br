
function BarraDeMetas() {
	var metaTotal = 0;
	var dia = 0;
	var noite = 0;

	this.quantoVendeu = function() {
		return  dia+noite;
	};

	this.getDia = function() {
		return dia;
	};

	this.getNoite = function() {
		return noite;
	}

	this.quantoFalta = function() {
		return metaTotal - this.quantoVendeu;
	}

}


function Funcionario (fotos, vendas) {
	
	var foto = fotos;
	var vendas = vendas;

	this.getFoto = function() {
		return 'img/' + foto;
	};

	this.getVendas = function() {
		return vendas;
	}
}