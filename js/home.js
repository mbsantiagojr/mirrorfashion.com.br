$('.painel').addClass('painel-compacto');

$('.mostrar-mais').click(function() {
$(this.parentNode).removeClass('painel-compacto');
$('.mostrar-menos').css({"display" : "block"});
}
)

$('.mostrar-menos').click(function() {
	$(this.parentNode).addClass('painel-compacto');
	$('.mostrar-menos').css({"display" : "none"});

})



var banners = ["img/destaque-home.png", "img/destaque-home-2.png", "img/destaque-home-3.png", "img/destaque-home-4.png"];
var bannerAtual = 0;
var busca = document.querySelector("#form-busca");

if (busca) {

	busca.onsubmit = function () {
	if (document.querySelector("#q").value=="")
	{
	document.querySelector("#q").style.border = "1px solid #f00";
	document.querySelector("#aviso-busca").style.display = "inline";
	return false;
	}
	}
	document.querySelector("#q").onfocus = function () {
	document.querySelector("#aviso-busca").style.display = "none";
	document.querySelector("#q").style.border = "1px solid #ccc";
	}

};

function trocaBanner() {
bannerAtual = (bannerAtual+1)%2;

var banner = document.querySelector(".destaque img");

if (banner) {
document.querySelector(".destaque img").src = banners[bannerAtual];
};

}


function animaTitulo() {
	$('#animationSandbox').addClass('bounce animated');
}



setInterval(trocaBanner, 4000);


setInterval(animaTitulo, 1000);