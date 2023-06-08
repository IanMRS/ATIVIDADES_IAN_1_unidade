<?php
    extract($_POST);

    if(isset($CORES_TXT)){
        $var = 'CORES_TXT';
    } elseif(isset($login)){
        $var = 'login';
    } elseif(isset($AGENDA_SQL)){
        $var = 'AGENDA_SQL';
    } elseif(isset($TELA_LOGIN)){
        $var = 'TELA_LOGIN';
    } elseif(isset($multa)){
        $var = 'multa';
    } elseif(isset($CONVERSOR_NUM_ROMANOS_LESS)){
        $var = 'CONVERSOR_NUM_ROMANOS_LESS';
    } elseif(isset($CONVERSOR_NUM_ROMANOS)){
        $var = 'CONVERSOR_NUM_ROMANOS';
    }
    header('Location: '.$var.'/');
    exit;
?>