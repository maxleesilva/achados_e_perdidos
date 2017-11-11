  <div class="card" style="width: 25rem; right:-35%;">
  <img class="card-img-top" src="imagens/identidade.png" alt="Card image cap">
  <div class="card-body">
    <h4 class="card-title">Item</h4>
    <p class="card-text">Especificação</p>
    <input type="file" id="arquivo" name="img_achado" accept="image/*" />
    <br><br>
    <form action="cadastro.php" method="post">
    <button type="submit" class="btn btn-primary">Enviar</button>
    </form>
  </div>
</div>


  <form action="cadastro.php" method="post" style="margin-top:7%;">
  
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputEmail4">Nome do produto encontrado</label>
      <input type="text" class="form-control" name="nome_achado" placeholder="Nome do produto encontrado">
    </div>
  </div>
  
  
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputEmail4">Data</label>
      <input type="date" class="form-control" name="data_achado" placeholder="Data">
    </div>
  </div>
  
  
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputEmail4">Seu nome</label>
      <input type="text" class="form-control" name="nome_pessoa" placeholder="Seu nome">
    </div>
  </div>
  
  
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputEmail4">RGM</label>
      <input type="number" class="form-control" name="num_rgm" placeholder="RGM">
    </div>
  </div>
  
  <button type="submit" class="btn btn-primary">Publicar</button>
</form>
<br><br>