<?php

namespace AlbumCopa\Model;

use AlbumCopa\DAO\
{
    PaisDAO,
    TimePaisDAO
};

class TimePaisModel
{
    public $id, $nome, $link, $id_pais;
    
    public $lista_pais;

    public $rows;

    public function save()
    {
        $dao = new TimePaisDAO();

        if(empty($this->id))
        {
            $dao->insert($this);
        }
        else
        {
            $dao->update($this);
        }

        header("Location: /time_pais");
    }

    public function getAllPais()
    {
        $dao = new PaisDAO();

        return $dao->select();
    }

    public function getAllRows()
    {
        $dao = new TimePaisDAO();

        $this->rows = $dao->select();
    }

    public function getById(int $id)
    {
        $dao = new TimePaisDAO();

        $obj = $dao->selectById($id);        

        return ($obj) ? $obj : new TimePaisModel();
    }

    public function delete(int $id)
    {
        $dao = new TimePaisDAO();

        $dao->delete($id);
    }
}