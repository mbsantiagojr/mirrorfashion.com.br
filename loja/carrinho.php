<?php include 'header.php'; ?>

    <main id="principal" class="container">

			<div class="aviso">
				<ul>
 					<li>Todas as bolsas nacionais com 30% de desconto</li>
					<li>Casacos importados com 15% de desconto</li>
          <li>Cintos com 10% de desconto</li>   
				</ul>				
			</div>

      <ul id="carrinho">

        <li id="item1" class="clearfix">
          <a href="produto1.html">  
           <img alt="Produto 1" src="img/produto-1.jpg" />        
						<h3>Furlan Mistery Cardigan</h3>
					</a>          
					<div class="item_info">
            <small>Código: <strong>#00AMT01</strong></small>
            <p>Valor unitário: <span id="item1_valor_unit">R$ 120,00</span></p>
          </div>
          <form action="/" method="post">
            <p>
              <label for="item1_quantidade">Quantidade:</label>
              <input id="item1_quantidade" type="text" value="1" maxlength="2"/>
              <a class="botao-excluir" href="#">Excluir</a>
            </p>
          </form>
          <p>Valor total: <span id="item1_valor_total">R$ 120,00</span></p>
        </li>

        <li id="item2" class="clearfix">
          <a href="produto2.html"> 
            <img alt="Produto 2" src="img/produto-2.jpg" />       
						<h3>Asos Marital Collar Cardigan</h3>
					</a>  
          <div class="item_info">
            <small>Código: <strong>#00AMT02</strong></small>
            <p>Valor unitário: <span id="item2_valor_unit">R$ 74,00</span></p>
          </div>
          <form action="/" method="post">
            <p>
              <label for="item2_quantidade">Quantidade:</label>
              <input id="item2_quantidade" type="text" value="1" maxlength="2"/>
              <a class="botao-excluir" href="#">Excluir</a>
            </p>
          </form>
          <p>Valor total: <span id="item2_valor_total">R$ 74,00</span></p>
        </li>

        <li id="item3" class="clearfix">
          <a href="produto3.html">   
          <img alt="Produto 3" src="img/produto-3.jpg" />
						<h3>Asos Merino Shawl Collar Cardigan</h3>
					</a>  
          <div class="item_info">
            <small>Código: <strong>#00AMT03</strong></small>
            <p>Valor unitário: <span id="item3_valor_unit">R$ 109,00</span></p>
          </div>
          <form action="/" method="post">
            <p>
              <label for="item3_quantidade">Quantidade:</label>
              <input id="item3_quantidade" type="text" value="1" maxlength="2"/>
              <a class="botao-excluir" href="#">Excluir</a>
            </p>
          </form>
          <p>Valor total: <span id="item3_valor_total">R$ 109,00</span></p>
        </li>

      </ul>
      
      <div id="recomendacoes" class="container">
        <h3>Veja o que outras pessoas já compraram na Mirror Fashion</h3>
      </div>  

      <div id="consulta_frete" class="clearfix">
        <h3>Consulta frete:</h3>
        <form id="consulta_cep">
          <label for="input_cep">Seu cep: </label>
          <input id="input_cep" type="text" />
          <input type="submit" value="Consultar" />
        </form>
        <p class="resultado_cep"></p>
      </div>
    </main><!-- fim do conteudo principal -->


  <script src="js/modules/moeda.js"></script>
  <script src="js/carrinho/total.js"></script>
  <script src="js/carrinho/exclusao.js"></script>
  <script src="js/carrinho/aviso-jquery.js"></script>
  <script src="js/carrinho/cep.js"></script>
  <script src="js/carrinho/recomendacoes.js"></script>

  


<?php include 'footer.php'; ?>