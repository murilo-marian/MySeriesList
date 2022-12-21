<?php

if (isAjax()) {
    $request = getRequest();

    var_dump($request);

    if (function_exists($request)) {
        echo $request();
    }
}

function pesquisarNome()
{
    $oKey = getKey();

    $sValor = $oKey->valor;

    var_dump($sValor);

    echo json_encode($sValor);
}

function getKey()
{
    $oRequest = getAjaxRequest();
    return json_decode($oRequest->key);
}

function getRequest()
{
    $oRequest = getAjaxRequest();
    return json_decode($oRequest->req);
}

function getAjaxRequest()
{
    return json_decode(file_get_contents("php://input"));
}

function isAjax()
{
    if (getAjaxRequest()) {
        $oRequest = getAjaxRequest();
        return $oRequest->ajax === true;
    }
}
