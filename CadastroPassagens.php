<html>

<head>

<link rel="stylesheet" href="http://code.jquery.com/ui/1.9.0/themes/base/jquery-ui.css" />
<script src="http://code.jquery.com/jquery-1.8.2.js"></script>
<script src="http://code.jquery.com/ui/1.9.0/jquery-ui.js"></script>

</head>

<body>

<ul class="nav nav-tabs">
  <li role="presentation" class="active"><a href="#">Compra de passagens</a></li>

  <li role="presentation"><a href="#">situação</a></li>
</ul>
<form action="CadastrarPassagens.php" method="POST" class="">
			<div class="form-group">
                Viajar de <br>
                <input type="text" name="local_origem" class="form-control">
              </div>
                <div class="form-group">
                Para<br>
                <input type="text" name="local_destino" class="form-control">
                </div>
                <!--
              <div class="form-group">
                Horário de saída<br>
                <input type="text" name="horario_saida"  class="form-control">
              </div>
			  <div class="form-group">
                Horário de chegada<br>
                <input type="text" name="horario_chegada"  class="form-control">
              </div> -->
         <!--Isso daqui é para ficar na aba de situacao do voo
			  
          <div class="form-group">
                Situação<br>
                <input type="text" name="situacao"  class="form-control">
              </div> -->
			  <div class="form-group">
                Data de saída<br> 
                <input type="date" name="data_saida"  class="form-control">
              </div>
			  <div class="form-group">
                Data de chegada<br>
                <input type="date" name="data_chegada"  class="form-control">
              </div>
			  <button type="submit" class="btn btn-success">Comprar</button>
		 </form>

</body>

</html>