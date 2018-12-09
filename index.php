<?php
    include_once("class/classes.php");
    $newInstance = new Info();
    $newInstance->content = include_once("links/navigation.php");
    $newInstance->contentTwo = include_once("links/quiz.php");
    $valueOfLinkClikeckTwo = isset($_POST['quize-submitted']);
    if($valueOfLinkClikeckTwo){
        $answer = $_POST['answer'];
        $outPut = showQuizAnswer($answer);
    }else{
        $outPut = include_once("links/quiz.php");
    }
    echo($outPut);
    function showQuizAnswer($answer){
        return $answer;
    };

    $valueOfLinkClicked = isset($_GET['page']);
    if($valueOfLinkClicked){
        $fileShouldLoad = $_GET['page'];
        $newInstance->content.= include_once("links/$fileShouldLoad.php");
    }/* else{
        $fileShouldLoad = 'search';
    };
     */


    $page = include_once("templates/page.php");
    echo("$page")
?>