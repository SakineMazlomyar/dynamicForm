<?php
    include_once("class/classes.php");
    $newInstance = new Info();
    $newInstance->content = include_once("links/navigation.php");
    $valueOfPage = isset($_GET['page']);
    if($valueOfPage){
        $fileShouldLoad = $_GET['page'];
    }else{
        $fileShouldLoad = 'search';
    };
    $newInstance->content.= include_once("links/$fileShouldLoad.php");
    

    $page = include_once("templates/page.php");
    echo("$page")
?>