<?php

    require './vendor/autoload.php';

    use \App\WebService\ViaCEP;

    
    $recebe = isset($_POST['CEP']) ? $_POST['CEP']:null; 

    $dadosCEP = ViaCEP::consultaCEP($recebe);

   
    

    

  
  


?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

   <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
    <title>buscacep</title>
</head>
<body>
    

    <nav class="navbar navbar-expand-lg navbar-dark bg-info">
    <div class="container">
        <a class="navbar-brand" href="#"><i class="fas fa-map-marker-alt">   BuscaCEP</i></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
              
        </div>
    </div>
    </nav>

    <section class="mt-5 d-flex justify-content-center">

        <div class="card text-center" style="width: 60rem;">
            <div class="card-body ">
                <h5 class="card-title mb-4"><i class="fas fa-map-marker-alt"> BuscaCEP</i></h5>

                <div class="card-text  ">
                    <form  method='post'>
                    <label>CEP</label>
                    <input  name="CEP" type="text">

                    <label class="ms-2">Rua</label>
                    <input  value="<?=isset($dadosCEP['logradouro']) ?$dadosCEP['logradouro']:null?>" type="text">
                    
                    <label class="ms-2">Bairro</label>
                    <input value="<?=isset($dadosCEP['bairro']) ?$dadosCEP['bairro']:null?>"type="text">

                    <div class="mt-4 ">
                        <label>Estado</label>
                        <input value="<?=isset($dadosCEP['uf']) ?$dadosCEP['uf']:null ?>"type="text">
                        
                        <label class="ms-2">Complemento</label>
                        <input type="text">
                    </div>
                   

                    <div class="d-grid mt-4 gap-2 col-9 mx-auto">
                        <button class="btn btn-info text-white " type="submit">Enviar</button>
                    
                    </div>
                    </form>
                </div>   
            </div>
        </div>


       

    </section>









    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
</body>
</html>