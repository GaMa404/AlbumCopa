<?php

class JogadorModel
{
    public $id, $nome, $apelido, $data_nascimento, $altura, $peso, $link, $id_posicao, $id_pais, $id_time_pais;

    public $lista_posicao, $lista_pais, $lista_time_pais;

    public $rows;

    public function save()
    {
        $dao = new JogadorDAO();
      
        if(empty($this->id))
        {
            $dao->insert($this);
        }
        else
        {
            $dao->update($this);
        }

        header("Location: /jogador");
    } 

    public function getAllPosicao()
    {
        $dao = new PosicaoDAO();

        return $dao->select();
    }

    public function getAllPais()
    {
        $dao = new PaisDAO();

        return $dao->select();
    }

    public function getAllTimePais()
    {
        $dao = new TimePaisDAO();

        return $dao->select();
    }

    public function getAllRows()
    {
        $dao = new JogadorDAO();

        $this->rows = $dao->select();
    }

    public function getById(int $id)
    {
        $dao = new JogadorDAO();

        $obj = $dao->selectById($id);

        return ($obj) ? $obj : new PaisModel();
    }

    public function delete(int $id)
    {
        $dao = new JogadorDAO();

        $dao->delete($id);
    }
}