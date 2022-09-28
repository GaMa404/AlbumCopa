<?php 

namespace AlbumCopa\DAO;

use AlbumCopa\Model\PaisModel;

class PaisDAO
{
    private $conexao;

    public function __construct()
    {
        include_once 'MySQL.php';

        $this->conexao = new MySQL();
    }

    public function insert(PaisModel $model)
    {
        $sql = 'INSERT INTO pais (nome, sigla, link) VALUES (?, ?, ?)';

        $stmt = $this->conexao->prepare($sql);
        $stmt->bindValue(1, $model->nome);
        $stmt->bindValue(2, $model->sigla);
        $stmt->bindValue(3, $model->link);

        $stmt->execute();
    }

    public function update(PaisModel $model)
    {
        $sql = 'UPDATE pais SET nome=?, sigla=?, link=? WHERE id=?';

        $stmt = $this->conexao->prepare($sql);
        $stmt->bindValue(1, $model->nome);
        $stmt->bindValue(2, $model->sigla);
        $stmt->bindValue(3, $model->link);
        $stmt->bindValue(4, $model->id);

        $stmt->execute();
    }

    public function select()
    {
        $sql = 'SELECT * FROM pais';

        $stmt = $this->conexao->prepare($sql);
        $stmt->execute();

        return $stmt->fetchAll();
    }

    public function selectById(int $id)
    {
        include_once 'Model/PaisModel.php';

        $sql = 'SELECT * FROM pais WHERE id=?';

        $stmt = $this->conexao->prepare($sql);
        $stmt->bindValue(1, $id);
        $stmt->execute();

        return $stmt->fetchObject("AlbumCopa\Model\PaisModel");
    }

    public function delete(int $id)
    {
        $sql = 'DELETE FROM pais WHERE id=?';

        $stmt = $this->conexao->prepare($sql);
        $stmt->bindValue(1, $id);
        $stmt->execute();
    }
}