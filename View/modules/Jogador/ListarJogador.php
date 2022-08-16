<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listar Jogadores</title>
</head>
<body>
    <table>
        <tr>
            <th> </th>
            <th> ID </th>
            <th> Jogador </th>
            <th> Data de Nascimento </th>
            <th> Altura (m)</th>
            <th> Peso (Kg) </th>
            <th> Posição </th>
            <th> País </th>
            <th> Time </th>             
        </tr>

        <?php foreach($model->rows as $item): ?>
            <tr>
                <td>
                    <a href="/jogador/delete?id=<?= $item['id'] ?>"> X </a>
                </td>

                <td>
                    <?= $item['id'] ?> 
                </td>

                <td>
                    <a href="jogador/form?id=<?= $item['id'] ?>"><?= $item['nome'] ?></a>
                </td>

                <td> <?= $item['data_nascimento'] ?> </td>
                <td> <?= $item['altura'] ?> </td>
                <td> <?= $item['peso'] ?> </td>
                <td> <?= $item['sigla_posicao'] ?> </td>
                <td> <?= $item['sigla_pais'] ?> </td>
                <td> <?= $item['time_pais'] ?> </td>      
            </tr>
        <?php endforeach ?>

        <?php if(count($model->rows) == 0): ?>
            <tr>
                <td colspan="5"> Nenhum registro encontrado. </td>
            </tr>
        <?php endif ?>
    </table>    
</body>
</html>