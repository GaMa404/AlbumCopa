<?php

namespace AlbumCopa\Model;

use AlbumCopa\DAO\PaisDAO;

class PaisModel
{
    public $id, $nome, $sigla;

    public $rows;

    public function save()
    {
        $dao = new PaisDAO();

        if(empty($this->id))
        {
            $dao->insert($this);
        }

        else
        {
            $dao->update($this);
        }

        header("Location: /pais");
    }

    public function getAllRows()
    {
        $dao = new PaisDAO();

        $this->rows = $dao->select();
    }

    public function getById(int $id)
    {
        $dao = new PaisDAO();

        $obj = $dao->selectById($id);

        return ($obj) ? $obj : new PaisModel();
    }

    public function delete(int $id)
    {
        $dao = new PaisDAO();

        $dao->delete($id);
    }
}