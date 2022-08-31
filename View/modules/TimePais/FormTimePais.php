<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrar Times</title>
    <style>
        input, label {display: block}
    </style>
</head>
<body>
<form action="/time_pais/save" method="post">
        <fieldset>
            <legend> Cadastro de times de cada país </legend>

            <input type="hidden" value="<?= $model->id ?>" name=id />

            <label for="nome"> Nome: </label>
            <input type="text" name="nome" id="nome" value="<?= $model->nome ?>" />

            <br>

            <label for="link"> Logo do time: </label>
            <input type="file" name="link" id="link" value="<?= $model->link ?>" /> 

            <br>

            <label for="pais"> País: </label>
            <select name="pais">
                <?php foreach($model->lista_pais as $pais):?>
                    <option value="<?= $pais['id']?>" <?= ($pais['id'] == $model->id_pais) ? 'selected' : " " ?> >
                        <?= $pais['nome'] ?>
                    </option>
                <?php endforeach ?>
            </select> 

            <br> <br>

            <button type="submit"> Enviar </button>
        </fieldset>
    </form>
</body>
</html>