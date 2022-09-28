<?php

namespace AlbumCopa\DAO;

use AlbumCopa\DAO\MySQL;
use AlbumCopa\Model\JogadorModel;

class JogadorDAO 
{
    private $conexao;

    public function __construct()
    {
        include_once 'MySQL.php';

        $this->conexao = new MySQL();
    }

    public function insert(JogadorModel $model)
    {
        $sql = 'INSERT INTO jogador (nome, apelido, data_nascimento, altura, peso, link, id_posicao, id_pais, id_time_pais) 
                VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)';

        $stmt = $this->conexao->prepare($sql);

        $stmt->bindValue(1, $model->nome);
        $stmt->bindValue(2, $model->apelido);
        $stmt->bindValue(3, $model->data_nascimento);
        $stmt->bindValue(4, $model->altura);
        $stmt->bindValue(5, $model->peso);
        $stmt->bindValue(6, $model->link);
        $stmt->bindValue(7, $model->id_posicao);
        $stmt->bindValue(8, $model->id_pais);
        $stmt->bindValue(9, $model->id_time_pais);

        $stmt->execute();
    }

    public function update(JogadorModel $model)
    {
        $sql = 'UPDATE jogador SET nome=?, apelido=?, data_nascimento=?, altura=?, peso=?, link=?, id_posicao=?, id_pais=?, id_time_pais=?
                WHERE id=?';
        
        $stmt = $this->conexao->prepare($sql);

        $stmt->bindValue(1, $model->nome);
        $stmt->bindValue(2, $model->apelido);
        $stmt->bindValue(3, $model->data_nascimento);
        $stmt->bindValue(4, $model->altura);
        $stmt->bindValue(5, $model->peso);
        $stmt->bindValue(6, $model->link);
        $stmt->bindValue(7, $model->id_posicao);
        $stmt->bindValue(8, $model->id_pais);
        $stmt->bindValue(9, $model->id_time_pais);
        $stmt->bindValue(10, $model->id);

        $stmt->execute();
    }

    public function select()
    {
        $sql = 'SELECT j.id, j.nome, j.apelido, DATE_FORMAT(j.data_nascimento, "%d/%m/%Y") AS data_nascimento, j.altura, j.peso, j.link, 
                p.nome AS posicao, p.sigla AS sigla_posicao,
                pa.nome AS pais, pa.sigla AS sigla_pais,
                tp.nome AS time_pais
                FROM jogador j
                JOIN posicao p ON (p.id = j.id_posicao)
                JOIN pais pa ON (pa.id = j.id_pais)
                JOIN time_pais tp ON (tp.id = j.id_time_pais)';
                
        $stmt = $this->conexao->prepare($sql);

        $stmt->execute();

        return $stmt->fetchAll();
    }

    public function selectById(int $id)
    {
        include_once 'Model/JogadorModel.php';

        $sql = 'SELECT j.id, j.nome, j.apelido, j.data_nascimento, j.altura, j.peso, j.link, 
                j.id_posicao, p.nome AS posicao,
                j.id_pais, pa.nome AS pais,
                j.id_time_pais, tp.nome AS time_pais
                FROM jogador j
                JOIN posicao p ON (p.id = j.id_posicao)
                JOIN pais pa ON (pa.id = j.id_pais)
                JOIN time_pais tp ON (tp.id = j.id_time_pais)
                WHERE j.id=?';

        $stmt = $this->conexao->prepare($sql);
        $stmt->bindValue(1, $id);
        $stmt->execute();

        return $stmt->fetchObject("AlbumCopa\Model\JogadorModel");
    }

    public function delete(int $id)
    {
        $sql = 'DELETE FROM jogador WHERE id=?';

        $stmt = $this->conexao->prepare($sql);
        $stmt->bindValue(1, $id);
        $stmt->execute();
    }
}