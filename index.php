<?php
    include_once("class/classes.php");
    $newInstance = new Info();
    $newInstance->title = "form";
    $newInstance->content = include_once("links/navigation.php");
    $sumbitButtonIsClicked= isset($_POST['quize-submitted']);
    if($sumbitButtonIsClicked){
        $answer = $_POST['answer'];
        //we send the answer to a function and the return it back
        $outPut = showQuizAnswer($answer);
        echo($outPut);
    };
     function showQuizAnswer($answer){
         $response = "<p>You clicked $answer</p>";
         $response .= "</p>
        <a href='links/navigation.php')> Back to quiz</a></p>";
        return $response;
    };

    $navigationIsClicked = isset($_GET['page']);
    if($navigationIsClicked){
        $fileShouldLoad = $_GET['page'];
        $newInstance->content.= include_once("links/$fileShouldLoad.php");
    }

    $page = include_once("templates/page.php");
    echo("$page")
?>