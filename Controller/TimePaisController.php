<?php

namespace AlbumCopa\Controller;

use AlbumCopa\Model\TimePaisModel;

class TimePaisController
{
    public static function index()
    {
        $model = new TimePaisModel();
        $model->getAllRows();

        include 'View/modules/TimePais/ListarTimePais.php';
    }
    
    public static function form()
    {
        $model = new TimePaisModel();

        if(isset($_GET['id']))
            $model = $model->getById( (int) $_GET['id']);                    

        $model->lista_pais = $model->getAllPais();
      
        include 'View/modules/TimePais/FormTimePais.php';
    }

    public static function save()
    {
        $model = new TimePaisModel();

        $model->id = $_POST['id'];
        $model->nome = $_POST['nome'];
        $model->link = $_POST['link'];
        $model->id_pais = $_POST['pais'];
        
        $model->save();

        header("Location: /time_pais");
    }

    public static function delete()
    {
        $model = new TimePaisModel();

        $model->delete( (int) $_GET['id']);

        header("Location: /time_pais");
    }
}