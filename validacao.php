<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário Covid-19</title>
     <!--BOOTSTRAP CSS-->
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="css/valido.css">
<!--JQUERY-->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.15/jquery.mask.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.15/jquery.mask.min.js"></script>
</head>
<body>

<!--NAVBAR-->
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <p class="topo" >Passaporte Bahiana Covid-19</p>
  </div>
</nav>

<form class="form-card">

<img class="img-logo" src="img/logo.png">

<p class="text">Sr(a) <b>TALITA CASTRO FREITAS</b>, não reportou sintomas e está apto para suas atividades.</p>

<p class="text">Passaporte válido até: <b>08/02/2023 20:43:12</b></p>

<img class="img-valido" src="img/verificado.png">

<p class="text">Mostre esse passaporte na recepção e tenha um dia produtivo.         Use sua máscara, higienize suas mãos e mantenha o distanciamento.</p>

</div>
<div class="row justify-content-center" style="width:100%;">
<div class="row justify-content-center botoes_de_acao" style="padding-bottom:40px;">
   
<div class="col col-sm-auto">

<div id="botao_refazer">
<button class="btn btn-success" onclick="location.href = 'formulario.php'" type="button" name="refazer" id="refazer" value="refazer">REFAZER O QUESTIONÁRIO</button>
</div>

</div>

<div class="col col-sm-auto">

<div id="botao_refazer">
<button class="btn btn-success" onclick="location.href = 'index.php'" type="button" name="sair" id="sair" value="sair">SAIR</button>
</div>

</div>
</div>
</div>

</form>

<!--BOOTSTRAP JS+JQUERY-->
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js" integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.6.3.slim.min.js" integrity="sha256-ZwqZIVdD3iXNyGHbSYdsmWP//UBokj2FHAxKuSBKDSo=" crossorigin="anonymous"></script>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.10/jquery.mask.js"></script>

<footer class="footer">
    <div class="footer-title">&copy; 2023. EBMSP - Escola Bahiana de Medicina e Saúde Pública. </div>
</footer>
</body>
</html>