<?php

namespace AlbumCopa\Controller;

use AlbumCopa\Model\PosicaoModel;

class PosicaoController
{
    public static function index()
    {
        $model = new PosicaoModel();
        $model->getAllRows();

        include 'View/modules/Posicao/ListarPosicao.php';
    }
    
    public static function form()
    {
        $model = new PosicaoModel();
        
        if(isset($_GET['id']))
            $model = $model->getByID( (int) $_GET['id']);

        include 'View/modules/Posicao/FormPosicao.php';
    }

    public static function save()
    {
        $model = new PosicaoModel();

        $model->id = $_POST['id'];
        $model->nome = $_POST['nome'];
        $model->sigla = $_POST['sigla'];
        $model->save();
        
        header("Location: /posicao");
    }

    public static function delete()
    {
        $model = new PosicaoModel();

        $model->delete((int) $_GET['id']);

        header("Location: /posicao");
    }
}