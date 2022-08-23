<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listar Jogadores</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="style_jogador.css" class="css">   
</head>
<body>
    
    <nav class="navbar navbar-expand-lg navbar-light">
      <a class="navbar-brand" href="/jogador">JOGADOR</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <a class="navbar-brand" href="/jogador/form">Cadastrar Jogador</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <a class="nav-link" href="#"> Home <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Entidades
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="/pais">País</a>
              <a class="dropdown-item" href="/posicao">Posição</a>
              <a class="dropdown-item" href="/time_pais">Time</a>
            </div>
          </li>
        </ul>
      </div>
    </nav>

    <div class="card-container ">
        <?php foreach($model->rows as $item): ?>
            
            <div class="card-jogador">
                <img class="imagem" src="<?= $item['link'] ?>" />
                <div class="card-text"> 
                    <div class="delete-container">
                        <a href="/jogador/delete?id=<?= $item['id'] ?>" class="botao-deletar"> X </a>
                    </div>
                   
                    <h2> <a href="jogador/form?id=<?= $item['id'] ?>"> <?= $item['apelido'] ?> </a> </h2>             
                    <p> <b> Nome: </b> <?= $item['nome'] ?> </p>
                    <p> <b> Data de nascimento: </b> <?= $item['data_nascimento'] ?> </p>
                    <p> <b> Altura: </b> <?= $item['altura'] ?> m </p>
                    <p> <b> Peso: </b> <?= $item['peso'] ?> Kg </p>
                    <p> <b> Posição: </b> <?= $item['posicao'] ?> (<?= $item['sigla_posicao'] ?>) </p>
                    <p> <b> País: </b> <?= $item['pais'] ?> (<?= $item['sigla_pais'] ?>) </p>
                    <p> <b> Time: </b> <?= $item['time_pais'] ?> </p>
                    
                </div>
            </div>
        <?php endforeach ?>
    </div>

    <?php if(count($model->rows) == 0): ?>
        <p> Nenhum registro encontrado. </p>
    <?php endif ?>
    
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>