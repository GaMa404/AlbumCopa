<?php

namespace AlbumCopa\Model;

use AlbumCopa\DAO\PosicaoDAO;

class PosicaoModel
{
    public $id, $nome, $sigla;

    public $rows;

    public function save()
    {
        $dao = new PosicaoDAO();

        if(empty($this->id))
        {
            $dao->insert($this);
        }

        else
        {
            $dao->update($this);
        }

        header("Location: /posicao");
    }

    public function getAllRows()
    {
        $dao = new PosicaoDAO();

        $this->rows = $dao->select();
    }

    public function getById(int $id)
    {
        $dao = new PosicaoDAO();

        $obj = $dao->selectById($id);

        return ($obj) ? $obj : new PosicaoModel();
    }

    public function delete(int $id)
    {
        $dao = new PosicaoDAO();

        $dao->delete($id);
    }
}