// var compra = {
// 	arroz: 1
// }

// var compra2 = compra;
// 	compra.arroz = 0;




function compras() {

	var arroz = 1;

	this.qualQtdArroz = function() {
		return 'Comprar ' + arroz + ' arroz!';
	}


}

var compraMBS = new compras();

console.log(compraMBS.qualQtdArroz());