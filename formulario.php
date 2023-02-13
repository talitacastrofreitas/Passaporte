<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário Covid-19</title>
     <!--BOOTSTRAP CSS-->
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="css/form.css">
<!--JQUERY-->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.15/jquery.mask.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</head>
<body>

<!--NAVBAR-->
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <p class="topo" >Passaporte Bahiana Covid-19</p>
  </div>
</nav>


<!--FORMULÁRIO-->
<form method="POST" action="validacao.php" accept-charset="UTF-8" class="form-signin" id="meio"><input name="_token" type="hidden" value="#">
<img class="mb-4" src="img/logo.png" alt="Logo Bahiana">


<p id="pergunta"> Sr(a) Talita Castro Freitas, nos últimos dez dias apresentou algum dos sintomas abaixo? </p>

<div class="container my-4">



<ul class="list-group list-group-flush" id="selecao">

<!-- Questões -->

            
    <li class="list-group-item">

        <div class="custom-control custom-checkbox">

            

            <input type="checkbox" class="custom-control-input" id="1" name="resp_8" data-id="1">
            <label class="custom-control-label" for="1">Perda súbita na percepção do cheiro ou gosto</label>
            <script> if (isset ($_GET['id'])){
                return document.getElementById(tel).innerHTML;
                }
            </script>
        </div>
    </li>

    <li class="list-group-item">

        <div class="custom-control custom-checkbox">

            <input type="checkbox" class="custom-control-input" id="2" name="resp_2" data-id="2">
            <label class="custom-control-label" for="2">Tosse que não existia antes</label>
        </div>
    </li>

    <li class="list-group-item">

        <div class="custom-control custom-checkbox">

            

            <input type="checkbox" class="custom-control-input" id="3" name="resp_3" data-id="3">
            <label class="custom-control-label" for="3">Entupimento nasal ou nariz escorrendo que não existiam antes</label>
        </div>
    </li>

    <li class="list-group-item">

        <div class="custom-control custom-checkbox">

            

            <input type="checkbox" class="custom-control-input" id="4" name="resp_4" data-id="4">
            <label class="custom-control-label" for="4">Percepção de febre, temperatura maior ou igual 37,5º e/ou calafrios</label>
        </div>
    </li>

    <li class="list-group-item">

        <div class="custom-control custom-checkbox">

            

            <input type="checkbox" class="custom-control-input" id="5" name="resp_5" data-id="5">
            <label class="custom-control-label" for="5">Dor de garganta</label>
        </div>
    </li>

    <li class="list-group-item">

        <div class="custom-control custom-checkbox">

            <input type="checkbox" class="custom-control-input" id="6" name="resp_6" data-id="6">
            <label class="custom-control-label" for="6">Falta de ar</label>
        </div>
    </li>

    <li class="list-group-item">

        <div class="custom-control custom-checkbox">

            

            <input type="checkbox" class="custom-control-input" id="7" name="resp_7" data-id="7">
            <label class="custom-control-label" for="7">Teste positivo para Covid-19</label>
        </div>
    </li>

    <li class="list-group-item">

        <div class="custom-control custom-checkbox">

            

            <input type="checkbox" class="custom-control-inputm" id="8" name="resp_1" data-id="8">
            <label class="custom-control-label" for="8">Não apresentei nenhum dos sintomas acima</label>
        </div>
    </li>


<!-- End Questões -->

<input type="text" name="items" hidden="hidden">


</ul>

</div>


<div class="container my-4 tel" id="tel_cel" style="text-align:center;"  name="tel_cel" hidden>
        <label class="col-sm-9 col-form-label">Informe seu telefone, entraremos em contato.</label>
        <input type="text" id="tel" name="tel" class="form-control" style="outline: 0;"  maxlength="15" placeholder="Telefone"/>
  <script>
            $( "#tel" ).keypress(function() {
                $(this).mask('(00) 00000-0000');
            });
        </script>

      </div>

<button class="btn btn-block" type="submit" name="enviar_quest"> ENVIAR RESPOSTAS</button>

<input name="_token" type="hidden" value="Jzz9qICTBIYVQsnL0dtG2PZZVfSZOasutiuAcK0d">

</form>

<script>
function submitForm() {
  if (document.getElementById("1").checked &&
      document.getElementById("2").checked &&
      document.getElementById("3").checked &&
      document.getElementById("4").checked &&
      document.getElementById("5").checked &&
      document.getElementById("6").checked &&
      document.getElementById("7").checked) {
    window.location.href = "n-validacao.php";
  }
}
</script>



<script type="text/javascript" src="script.js" defer=""></script>
<script src="https://rawgit.com/RobinHerbots/jquery.inputmask/3.x/dist/jquery.inputmask.bundle.js"></script>
</div>

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