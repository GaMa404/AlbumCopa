<?php

namespace AlbumCopa\DAO;

use AlbumCopa\DAO\MySQL;
use AlbumCopa\Model\PosicaoModel;

class PosicaoDAO
{
    private $conexao;

    public function __construct()
    {
        include_once 'MySQL.php';

        $this->conexao = new MySQL();
    }

    public function insert(PosicaoModel $model)
    {
        $sql = 'INSERT INTO posicao (nome, sigla) VALUES (?, ?)';

        $stmt = $this->conexao->prepare($sql);
        
        $stmt->bindValue(1, $model->nome);
        $stmt->bindValue(2, $model->sigla);

        $stmt->execute();
    }

    public function update(PosicaoModel $model)
    {
        $sql = 'UPDATE posicao SET nome=?, sigla=? WHERE id=?';

        $stmt = $this->conexao->prepare($sql);
        $stmt->bindValue(1, $model->nome);
        $stmt->bindValue(2, $model->sigla);
        $stmt->bindValue(3, $model->id);

        $stmt->execute();
    }

    public function select()
    {
        $sql = 'SELECT * FROM posicao';

        $stmt = $this->conexao->prepare($sql);
        $stmt->execute();

        return $stmt->fetchAll();
    }

    public function selectById(int $id)
    {
        include_once 'Model/PosicaoModel.php';

        $sql = 'SELECT * FROM posicao WHERE id=?';

        $stmt = $this->conexao->prepare($sql);
        $stmt->bindValue(1, $id);
        $stmt->execute();

        return $stmt->fetchObject("PosicaoModel");
    }

    public function delete(int $id)
    {
        $sql = 'DELETE FROM posicao WHERE id=?';

        $stmt = $this->conexao->prepare($sql);
        $stmt->bindvalue(1, $id);
        $stmt->execute();
    }
}