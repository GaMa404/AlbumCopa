<?php

class PaisController
{
    public static function index()
    {
        $model = new PaisModel();
        $model->getAllRows();
        
        include 'View/modules/Pais/ListarPais.php';
    }
    
    public static function form()
    {
        $model = new PaisModel();

        if(isset($_GET['id']))
            $model = $model->getById( (int) $_GET['id']);

        include 'View/modules/Pais/FormPais.php';
    }

    public static function save()
    {
        $model = new PaisModel();

        $model->id = $_POST['id'];
        $model->nome = $_POST['nome'];
        $model->sigla = $_POST['sigla'];
        $model->save();

        header("Location: /pais");
    }

    public static function delete()
    {
        $model = new PaisModel();

        $model->delete( (int) $_GET['id']);
        header("Location: /pais");
    }
}