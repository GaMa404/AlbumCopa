<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listar Jogadores</title>
    <link rel="stylesheet" href="style_jogador.css" class="css">
</head>
<body>
    <div class="card-container">
        <?php foreach($model->rows as $item): ?>
            <div class="card">
                <img class="imagem" src="<?= $item['link'] ?>" />
                <h2> <a href="jogador/form?id=<?= $item['id'] ?>"><?= $item['apelido'] ?> </a> </h2>               
                <p> <b> Nome: </b> <?= $item['nome'] ?> </p>
                <p> <b> Data de nascimento: </b> <?= $item['data_nascimento'] ?> </p>
                <p> <b> Altura: </b> <?= $item['altura'] ?> m </p>
                <p> <b> Peso: </b> <?= $item['peso'] ?> Kg </p>
                <p> <b> Posição: </b> <?= $item['posicao'] ?> (<?= $item['sigla_posicao'] ?>) </p>
                <p> <b> País: </b> <?= $item['pais'] ?> (<?= $item['sigla_pais'] ?>) </p>
                <p> <b> Time: </b> <?= $item['time_pais'] ?> </p>
            </div>
        <?php endforeach ?>
    </div>

    <?php if(count($model->rows) == 0): ?>
        <tr>
            <td colspan="5"> Nenhum registro encontrado. </td>
        </tr>
    <?php endif ?>   
</body>
</html>