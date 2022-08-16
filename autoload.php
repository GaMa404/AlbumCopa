<?php

spl_autoload_register(function ($class_name)
{
    $class_controller = 'Controller/' . $class_name . '.php';
    $class_model = 'Model/' . $class_name . '.php';
    $class_dao = 'DAO/' . $class_name . '.php';

    if(file_exists($class_controller))
    {
        include $class_controller;
    }
    else if(file_exists($class_model))
    {
        include $class_model;
    }
    else if(file_exists($class_dao))
    {
        include $class_dao;
    }
});