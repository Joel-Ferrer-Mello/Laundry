    <main role="main">
<!--  BEGINNING OF INITIAL PRESENTATION  -->
      <div id="tituloInitial" class="container-fluid">
        <div class="transbox">
            <h2 class="tit1 text-uppercase">Desde 9,00€ por m².</h2>
            <h1 class="tit2 text-uppercase">REMOVEMOS A SUJIDADE, ODORES E BACTÉRIAS!</h1>
        </div>
      </div>
      <div id="btnTapetes" class="container-fluid">
        <p>
          <a type="button" class="btn btn-lg btn-info" href="#SIMULADOR" role="button">SIMULAR PREÇO DA LIMPEZA</a>
          <a type="button" class="btn btn-lg btn-info" href="#TAPETES" role="button">TIPOS TAPETES</a>
        </p>
      </div>

<!-- BEGINNING OF WHATSAPP -->
            <div class="whatsapp">
              <a href="https://api.whatsapp.com/send?phone=351915382120" target="_blank" rel="noopener noreferrer"><img src="img/whatsAppI.png" alt=""></a>
          </div>
<!-- END OF WHATSAPP -->

<!-- Marketing messaging and featurettes
================================================== -->
<!-- Wrap the rest of the page in another container to center all the content. -->
      <div class="container index_serv">
<!-- BEGINNING OF FEATURETTES -->        
<!-- BEGINNING OF SIMULADOR  -->
        <a name="SIMULADOR" id="SIMULADOR" style="color:#ffffff">LavandariasBLU</a>
        <hr class="featurette-divider">
        <div class="row align-items-center">
          <div class="col-md-7">            
            <h1 class="featurette-heading">SIMULADOR DE PREÇOS</h1> <p></p> 
            <p class="lead">Simule o preço da limpeza de seu tapete ou carpete no simulador abaixo. Para isto informe a altura e largura em metros, o tipo de tapete/serviço e depois pressione o botão calcular. Utilize . para casas decimais. Neste preço não está incluído o levantamento e devolução.</p>
            <form id="idFormCalcular" method="get">
              <div class="form-row">
                <div class="form-group col-md-3">
                  <p class="lead">Altura:</p>
                  <input  type="number" min="0" max="30" value="0" step=".01" size="5" id="altura" name="altura" class="form-control form-control-md" placeholder="Insira a altura aqui:" required>
                </div>
                <div class="form-group col-md-3">
                  <p class="lead">Largura:</p>
                  <input type="number" min="0" max="30" value="0" step=".01" size="5" size="5" id="largura" name="largura" class="form-control form-control-md" placeholder="Insira a largura aqui:" required>
                </div>
                <div class="form-group col-md-6">
                  <p class="lead">Preço em € por m²:</p>
                  <select id="preco_metro" class="form-control form-control-md" required>
                    <option value=9 selected>09,00€ – Tapetes e carpetes – m²</option>
                    <option value=9 >09,00€ – Impermeabilização de tapete – m²</option>                    
                    <option value=14.3 >14,30€ – Tapete pele m² (a partir de 2m²)</option>
                    <option value=23.1 >23,10€ – Pele aberta animal (até 2m²)</option>
                  </select>
                </div>
              </div>
            </form>            
            <p id="TapeteParagrafoPreço"> Aqui será exibido o preço simulado:</p>
            <button class="btn btn-lg btn-info" type="submit" onclick="calcula_preco()">CALCULAR</button>
            <button class="btn btn-lg btn-info" type="submit" onclick="abre_pedidos()">ENVIAR PEDIDO</button>
          </div>
          <div class="col-md-5">
            <img class="index_img img-fluid" src="img\tapete200x250.jpg" width=100% height=100%>
          </div>
        </div>
<!-- ENDING OF SIMULADOR  -->      
<!-- BEGINNING OF TAPETES  -->
        <hr class="featurette-divider">
        <a name="TAPETES" id="TAPETES" style="color:#ffffff">LavandariasBLU</a>
        <div class="row align-items-center">
          <div class="col-md-5 order-md-2">
            <h1 class="featurette-heading">LIMPEZA:<p></p> <span class="text-muted">LAVAR E SECAR.</span></h1> <p></p>
            <p class="lead">Preços diferenciados, por tipo de alcatifas, tapetes ou carpetes.</p>
          </div>
          <div class="col-md-7 order-md-1">
            <table class="table table-striped">
              <thead>
                <tr>
                  <th scope="col">Tipos</th>
                  <th scope="col">Preços</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <th scope="row">Tapetes e carpetes – m²</th>
                  <td>09,00€</td>                
                </tr>
                <tr>
                  <th scope="row">Tapete pele m² (a partir de 2m²)</th>
                  <td>14,30€</td>
                </tr>
                <tr>
                  <th scope="row">Pele aberta animal (até 2m²)</th>
                  <td>23,10€</td>
                </tr>
                <tr>
                  <th scope="row">Impermeabilização de tapete – m²</th>
                  <td>09,00€</td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
          <br>
          <button class="btn btn-lg btn-info" type="submit" onclick="abre_pedidos()">ENVIAR PEDIDO</button>
          <a class="btn btn-lg btn-info" href="#" role="button">VOLTA AO TOPO</a>
          <br><br><br>
<!-- ENDING OF TAPETES  -->
<!-- END OF FEATURETTES -->
      </div>