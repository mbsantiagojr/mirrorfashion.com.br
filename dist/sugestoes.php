<?php include 'header.php'; ?>

    <main id="principal" class="container">
      <h2>SUGESTÕES DE PEÇAS</h2>
      <h3>Sua sugestão é muito importante para nós!</h3>

      <ul class="sugestoes">
        <li data-votos="2">
          <span class="sugestao">Regata com lantejoulas</span>
          <span class="votos">2 votos</span>
        </li>
        <li data-votos="1">
          <span class="sugestao">Vestido tomara-que-caia</span>
          <span class="votos">1 voto</span>
        </li>
        <li data-votos="3">
          <span class="sugestao">Calça Lycra</span>
          <span class="votos">3 votos</span>
        </li>
      </ul>

      <div class="nova-sugestao">
        <label>Nova Sugestão</label>
        <input type="text"/>
        <input class="comprar" type="button" value='incluir'/>
      </div>

     
    </main><!-- fim do conteudo principal -->

  <script src="js/lib/jquery.js"></script>
  <script src="js/lib/jquery-ui.js"></script>
  <script src="js/sugestoes/sugestoes.js"></script>
  

<?php include 'footer.php'; ?>
