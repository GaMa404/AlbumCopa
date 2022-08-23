<?php 

$uri_parse = parse_url($_SERVER["REQUEST_URI"], PHP_URL_PATH);

include 'Controller/JogadorController.php';
include 'Controller/PaisController.php';
include 'Controller/TimePaisController.php';
include 'Controller/PosicaoController.php';

use AlbumCopa\Controller\
{
    PosicaoController,
    PaisController,
    TimePaisController,
    JogadorController
};

use AlbumCopa\Model\
{
    PosicaoModel,
    PaisModel,
    TimePaisModel,
    JogadorModel
};

use AlbumCopa\DAO\
{
    PosicaoDAO,
    PaisDAO,
    TimePaisDAO,
    JogadorDAO
};

switch($uri_parse)
{
    case '/posicao':
        PosicaoController::index();
    break;

    case '/posicao/form':
        PosicaoController::form();
    break;

    case '/posicao/save':
        PosicaoController::save();
    break;

    case '/posicao/delete':
        PosicaoController::delete();
    break;

    # ======================================== #

    case '/pais':
        PaisController::index();
    break;

    case '/pais/form':
        PaisController::form();
    break;

    case '/pais/save':
        PaisController::save();
    break;

    case '/pais/delete':
        PaisController::delete();
    break;

    # ======================================== #

    case '/time_pais':
        TimePaisController::index();
    break;

    case '/time_pais/form':
        TimePaisController::form();
    break;

    case '/time_pais/save':
        TimePaisController::save();
    break;

    case '/time_pais/delete':
        TimePaisController::delete();
    break;

    # ======================================== #

    case '/jogador':
        JogadorController::index();
    break;

    case '/jogador/form':
        JogadorController::form();
    break;

    case '/jogador/save':
        JogadorController::save();
    break;

    case '/jogador/delete':
        JogadorController::delete();
    break;

    default:
        echo "Error 404: Página não encontrada.";
    break;  
}