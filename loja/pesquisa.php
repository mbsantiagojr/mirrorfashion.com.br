<?php include 'header.php'; ?>

    <main id="principal" class="container">

    <div class="filtro">
      <input type="text" placeholder="Nome, preço ou código"/>
    </div>

    <ul id="carrinho">

      <li id="item1" class="clearfix">  
         <div class="painel-imagem" title>
           <img src="img/produto-1.jpg" />        
         </div>
         <div class="item-info">
          <h2>FUARLAN MISTERY CARDIGAN</h2>
          <p>CÓDIGO: <span>#00AMT01</span></p>
          <p>Valor unitário: <span id="item-valor-unit">R$ 120,00</span></p>
          <a href="#" class="adicionar botao-inserir">Adicionar</a>
        </div>
      </li>

      <li id="item2" class="clearfix">  
         <div class="painel-imagem" title>
           <img src="img/produto-2.jpg" />        
         </div>
         <div class="item-info">
          <h2>ASOS MARITAL COLLAR CARDIGAN</h2>
          <p>CÓDIGO: <span>#00AMT02</span></p>
          <p>Valor unitário: <span id="item-valor-unit">R$ 74,00</span></p>
          <a href="#" class="adicionar botao-inserir">Adicionar</a>
        </div>
      </li>

      <li id="item3" class="clearfix">  
         <div class="painel-imagem" title>
           <img src="img/produto-3.jpg" />        
         </div>
         <div class="item-info">
          <h2>ASOS MERINO SHAWL COLLAR CARDIGAN</h2>
          <p>CÓDIGO: <span>#00AMT03</span></p>
          <p>Valor unitário: <span id="item-valor-unit">R$ 109,00</span></p>
          <a href="#" class="adicionar botao-inserir">Adicionar</a>
        </div>
      </li>

      <li id="item4" class="clearfix">  
         <div class="painel-imagem" title>
           <img src="img/produto-4.jpg" />        
         </div>
         <div class="item-info">
          <h2>MESSY ROCKET</h2>
          <p>CÓDIGO: <span>#00AMT04</span></p>
          <p>Valor unitário: <span id="item-valor-unit">R$ 200,00</span></p>
          <a href="#" class="adicionar botao-inserir">Adicionar</a>
        </div>
      </li>

      <li id="item5" class="clearfix">  
         <div class="painel-imagem" title>
           <img src="img/produto-5.jpg" />        
         </div>
         <div class="item-info">
          <h2>URBAN MISTERY</h2>
          <p>CÓDIGO: <span>#00AMT05</span></p>
          <p>Valor unitário: <span id="item-valor-unit">R$ 130,00</span></p>
          <a href="#" class="adicionar botao-inserir">Adicionar</a>
        </div>
      </li>

      <li id="item6" class="clearfix">
        <div class="painel-imagem" title>
           <img src="img/produto-6.jpg" />
         </div>
         <div class="item-info">
          <h2>GOLDEN VALVE</h2>
          <p>CÓDIGO: <span>#00AMT06</span></p>
          <p>Valor unitário: <span id="item-valor-unit">R$ 109,00</span></p>
          <a href="#" class="adicionar botao-inserir">Adicionar</a>
        </div>
      </li>

    </ul>

     
    </main><!-- fim do conteudo principal -->

  <!-- build:js js/pesquisa/pesquisa.min.js -->
  <script src="js/pesquisa/filtro.js"></script>
  <script src="js/lib/jquery-mobile.js"></script>
  <script src="js/pesquisa/swipe.js"></script>
  <!-- endbuild -->
  

<?php include 'footer.php'; ?>
