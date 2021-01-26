<?php

class VistaJson
{
    
    public function imprimir($cuerpo)
    {
        header('Content-Type: application/json; charset=utf8');
        echo json_encode($cuerpo, JSON_PRETTY_PRINT);
        exit;
    }
}