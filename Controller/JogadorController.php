<?php

class JogadorController
{
    public static function index()
    {
        $model = new JogadorModel();
        $model->getAllRows();

        include 'View/modules/Jogador/ListarJogador.php';
    }
    
    public static function form()
    {
        $model = new JogadorModel();
        
        if(isset($_GET['id']))
            $model = $model->getById( (int) $_GET['id']);

        $model->lista_posicao = $model->getAllPosicao();
        $model->lista_pais = $model->getAllPais();
        $model->lista_time_pais = $model->getAllTimePais();

        include 'View/modules/Jogador/FormJogador.php';
    }

    public static function save()
    {
        $model = new JogadorModel();

        $model->id = $_POST['id'];
        $model->nome = $_POST['nome'];
        $model->data_nascimento = $_POST['data_nascimento'];
        $model->altura = $_POST['altura'];
        $model->peso = $_POST['peso'];
        $model->id_posicao = $_POST['posicao'];
        $model->id_pais = $_POST['pais'];
        $model->id_time_pais = $_POST['time_pais'];

        $model->save();

        header("Location: /jogador");
    }

    public static function delete()
    {
        $model = new JogadorModel();

        $model->delete( (int) $_GET['id']);

        header("Location: /jogador");
    } 
}