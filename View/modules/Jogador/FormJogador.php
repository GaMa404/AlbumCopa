<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrar Jogador</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="./../../../View/modules/Jogador/style_form.css">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light">
        <a class="navbar-brand" href="/">Home </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
    
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="/jogador"> Listar Jogadores <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Outros
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="/posicao">Posição</a>
                        <a class="dropdown-item" href="/pais">País</a>
                        <a class="dropdown-item" href="/time_pais">Time</a>
                    </div>
                </li>
            </ul>
        </div>
    </nav>

<div class="container">
    <form action="/jogador/save" method="post">
        <fieldset>
            <legend> Cadastro de jogadores </legend>

            <input type="hidden" value="<?= $model->id ?>" name="id" />

            <br>

            <label for="nome"> Nome: </label> <br>
            <input type="text" name="nome" id="nome" value="<?= $model->nome ?>" />

            <br> <br>

            <label for="apelido"> Apelido: </label> <br>
            <input type="text" name="apelido" id="apelido" value="<?= $model->apelido ?>" />

            <br> <br>

            <label for="data_nascimento"> Data de Nascimento: </label> <br>
            <input type="date" name="data_nascimento" id="data_nascimento" value="<?= $model->data_nascimento ?>" />

            <br> <br>

            <label for="altura"> Altura: </label> <br>
            <input type="double" name="altura" id="altura" value="<?= $model->altura ?>" />

            <br> <br>

            <label for="peso"> Peso: </label> <br>
            <input type="double" name="peso" id="peso" value="<?= $model->peso ?>" />

            <br> <br>

            <label for="link"> Foto do jogador: </label> <br> 
            <input type="file" name="link" id="link" value="<?= $model->link ?>" /> 

            <br> <br> 

            <label for="posicao"> Posição: </label>
            <select name="posicao">
                <?php foreach($model->lista_posicao as $posicao):?>
                    <option value="<?= $posicao['id']?>" <?= ($posicao['id'] == $model->id_posicao) ? 'selected' : " " ?> >
                        <?= $posicao['nome'] ?>
                    </option>
                <?php endforeach ?>
            </select>

            <br> <br>          

            <label for="pais"> País: </label>
            <select name="pais">
                <?php foreach($model->lista_pais as $pais):?>
                    <option value="<?= $pais['id']?>" <?= ($pais['id'] == $model->id_pais) ? 'selected' : " " ?> >
                        <?= $pais['nome'] ?>
                    </option>
                <?php endforeach ?>
            </select>

            <br> <br>       

            <label for="time_pais"> Time: </label>
            <select name="time_pais">
                <?php foreach($model->lista_time_pais as $time_pais):?>
                    <option value="<?= $time_pais['id']?>" <?= ($time_pais['id'] == $model->id_time_pais) ? 'selected' : " " ?> >
                        <?= $time_pais['nome'] ?>
                    </option>
                <?php endforeach ?>
            </select>

            <br> <br> 

            <button type="submit"> Enviar </button>
        </fieldset>
    </form>
</div>

    <div class="background-jogador">
        <img src="./../../../wave.svg">
    </div>               

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>