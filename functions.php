<?php
/**
 * Created by PhpStorm.
 * User: alfju
 * Date: 7/17/2018
 * Time: 08:02
 */

function baseUrl(){
    //return 'https://www.gabrielloretooficial.com.br/';
    return 'http://127.0.0.1:8083/';
}

function siteTitle(){
    return 'Gabriel Loreto';
}


function set_qr(){
    $protect_url = array('inicio', 'agenda', 'release', 'contratante', 'contato', 'contato-enviado-com-sucesso', 'promocoes', 'parceiros', 'promocao-ligacao-direta', 'videos', 'letras', '40-graus', 'do-nada', 'e-so-kao', 'pecado', 'fotos');
    return $protect_url;
}

function get_qr(){
    //$url =  basename(parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH));
    $url =  substr(strrchr($_SERVER['REQUEST_URI'], "/"), 1);
    return $url;
}

function validate_qr(){
    $url =  get_qr();
    if($url){
        if(in_array($url, set_qr())){
            include_once('pages/'.$url.'.php');
        }else{
            include_once('pages/404.php');
        }
    }else{
        include_once('pages/home.php');
    }
}

function siteSubTitle(){
    $url =  get_qr();
    if($url == 'biografia'){
        return '| Biografia';
    }
    if($url == 'videos'){
        return '| Vídeos';
    }
    if($url == 'letras'){
        return '| Letras e Cifras';
    }
    if($url == '40-graus'){
        return '| Letras e Cifras | 40 Graus';
    }
    if($url == 'do-nada'){
        return '| Letras e Cifras | Do Nada';
    }
    if($url == 'e-so-kao'){
        return '| Letras e Cifras | É Só Kaô';
    }
    if($url == 'pecado'){
        return '| Letras e Cifras | Pecado';
    }
    if($url == 'fotos'){
        return '| Fotos';
    }

}



function active_menu($menu=null){
    if(get_qr() == $menu){
        return 'active';
    }
}

function active_menu_array($menu=null){
    if(in_array(get_qr(), $menu)){
        return 'active';
    }
}