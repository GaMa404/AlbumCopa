<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrar Jogador</title>
    <style>
        input, label {display: block}
    </style>
</head>
<body>
<form action="/jogador/save" method="post">
        <fieldset>
            <legend> Cadastro de jogadores </legend>

            <input type="hidden" value="<?= $model->id ?>" name=id />

            <label for="nome"> Nome: </label>
            <input type="text" name="nome" id="nome" value="<?= $model->nome ?>" />

            <br>

            <label for="apelido"> Apelido: </label>
            <input type="text" name="apelido" id="apelido" value="<?= $model->apelido ?>" />

            <br>

            <label for="data_nascimento"> Data de Nascimento: </label>
            <input type="date" name="data_nascimento" id="data_nascimento" value="<?= $model->data_nascimento ?>" />

            <br>

            <label for="altura"> Altura: </label>
            <input type="double" name="altura" id="altura" value="<?= $model->altura ?>" />

            <br>

            <label for="peso"> Peso: </label>
            <input type="double" name="peso" id="peso" value="<?= $model->peso ?>" />

            <br>

            <label for="link"> Foto do jogador: </label>
            <input type="file" name="link" id="link" value="<?= $model->link ?>" />

            <br>  

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

            <label for="time_pais"> País: </label>
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
</body>
</html>