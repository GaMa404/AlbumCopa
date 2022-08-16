<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrar Posição</title>
    <style>
        input, label {display: block}
    </style>
</head>
<body>
    <form action="/posicao/save" method="post">
        <fieldset>
            <legend> Cadastro de Posições </legend>

            <input type="hidden" value="<?= $model->id ?>" name=id />

            <label for="nome"> Nome: </label>
            <input type="text" name="nome" id="nome" value="<?= $model->nome ?>" />

            <br>

            <label for="sigla"> Sigla: </label>
            <input type="text" name="sigla" id="sigla" value="<?= $model->sigla ?>" />

            <br>

            <button type="submit"> Enviar </button>
        </fieldset>
    </form>
</body>
</html>