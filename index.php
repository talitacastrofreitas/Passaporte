<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Passaporte Bahiana Covid-19</title>
    <!--BOOTSTRAP CSS-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
<!--JQUERY-->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.15/jquery.mask.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.15/jquery.mask.min.js"></script>
</head>
<body>
 <form class="form-card">
    <div class="card">
        <div class="card-top">
            <img class="img-card mb-4" src="img/logo.png" alt="logo">
            <h4 class="title">Passaporte Bahiana Covid-19</h4>
        </div>
        <div class="card-group" href="#">
        <select class="select-perfil" required name="select-perfil">
            <option value="" selected>Selecione seu perfil</option>
            <option value="1">Colaborador(a) / Professor(a)</option>
            <option value="2">Aluno(a)</option>
            <option value="3">Profissional PJ</option>
            <option value="4">Terceirizado</option>
            <option value="5">Pesquisador Visitante</option>
            <option value="6">Discente Visitante</option>
            <option value="7">NEOJIBA (todos)</option>
            <option value="8">Colaborador(a) HHCL</option>
        </select>
        </div>

        <div class="card-group" href="#">
            <input id="cpf" type="cpf" name="cpf" required placeholder="Digite seu CPF">
            <!--MASCARA CPF-->
            <script>
            $( "#cpf" ).keypress(function() {
                $(this).mask('000.000.000-00');
            });
        </script>
        </div>

        <div class="card-group link">
        <a href="#">Política de privacidade</a>
        </div>
            <div class="button-politica">
        <input type="checkbox" style="margin-left:1%; margin-bottom:15px;" name="habi" id="habi" onClick="HabiDsabi()"> Li e concordo  </input> 
</label>
</div>


<a class="btn btn-success" type="submit" name="entrar" id="entrar" href = "formulario.php" value="entrar" disabled> ENTRAR</a>
    </div>
    </div>
        </div>
 </form>


<script type="text/javascript">

    function HabiDsabi(){

        if(document.getElementById('habi').checked == true){    document.getElementById('entrar').disabled = ""  }
        if(document.getElementById('habi').checked == false){    document.getElementById('entrar').disabled = "disabled"  }
    }
    HabiDsabi();


    function findGetParameter(parameterName) {
        var result = null,
                tmp = [];
        location.search
                .substr(1)
                .split("&")
                .forEach(function (item) {
                    tmp = item.split("=");
                    if (tmp[0] === parameterName) result = decodeURIComponent(tmp[1]);
                });
        return result;
    }
   if(findGetParameter('msg')==1){
       document.getElementById('error').style = "visibility: visible";
   }


</script>










<!--BOOTSTRAP JS+JQUERY-->
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js" integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.6.3.slim.min.js" integrity="sha256-ZwqZIVdD3iXNyGHbSYdsmWP//UBokj2FHAxKuSBKDSo=" crossorigin="anonymous"></script>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.10/jquery.mask.js"></script>

</body>
</html>