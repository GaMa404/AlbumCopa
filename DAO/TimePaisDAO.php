<?php 

namespace AlbumCopa\DAO;

use AlbumCopa\DAO\MySQL;
use AlbumCopa\Model\TimePaisModel;

class TimePaisDAO
{
    private $conexao;

    public function __construct()
    {
        include_once 'MySQL.php';
        
        $this->conexao = new MySQL();
    }

    public function insert(TimePaisModel $model)
    {
        $sql = 'INSERT INTO time_pais (nome, link, id_pais) VALUES (?, ?, ?)';

        $stmt = $this->conexao->prepare($sql);

        $stmt->bindValue(1, $model->nome);
        $stmt->bindValue(2, $model->link);
        $stmt->bindValue(3, $model->id_pais);
        
        $stmt->execute();
    }

    public function update(TimePaisModel $model)
    {
        $sql = 'UPDATE time_pais SET nome=?, link=?, id_pais=? WHERE id=?';

        $stmt = $this->conexao->prepare($sql);
        
        $stmt->bindValue(1, $model->nome);
        $stmt->bindValue(2, $model->link);
        $stmt->bindValue(3, $model->id_pais);
        $stmt->bindValue(4, $model->id);

        $stmt->execute();
    }

    public function select()
    {
        $sql = 'SELECT tp.id, tp.nome, tp.link, pa.nome AS pais, pa.link AS link_bandeira
                FROM time_pais tp
                JOIN pais pa ON (pa.id = tp.id_pais)';

        $stmt = $this->conexao->prepare($sql);
        $stmt->execute();

        return $stmt->fetchAll();
    }

    public function selectById(int $id)
    {
        include_once 'Model/TimePaisModel.php';

        $sql = 'SELECT tp.id, tp.nome, tp.link, tp.id_pais, pa.nome AS pais,
                pa.link AS link_bandeira
                FROM time_pais tp
                JOIN pais pa ON (pa.id = tp.id_pais)
                WHERE tp.id=?';

        $stmt = $this->conexao->prepare($sql);
        $stmt->bindValue(1, $id);
        $stmt->execute();

        return $stmt->fetchObject("AlbumCopa\Model\TimePaisModel");
    }

    public function delete(int $id)
    {
        $sql = 'DELETE FROM time_pais WHERE id=?';

        $stmt = $this->conexao->prepare($sql);
        $stmt->bindValue(1, $id);
        $stmt->execute();
    }
}