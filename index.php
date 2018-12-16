<?php
    include_once("class/classes.php");
    $newInstance = new Info();
    $newInstance->title = "form";
    $newInstance->content = include_once("links/navigation.php");
    $newInstance->css = "<link rel='stylesheet' href='css/style.css'> Back to quiz</link><";
    $sumbitButtonIsClicked= isset($_POST['quize-submitted']);
    if($sumbitButtonIsClicked){
        $answer = $_POST['answer'];
        //we send the answer to a function and the return it back
        $outPut = showQuizAnswer($answer);

    }else{
        $outPut = include_once("links/quiz.php");

    }
    echo "<h4>$outPut</h4>";
     function showQuizAnswer($answer){
         $response = "<p>You clicked $answer</p>";
         if($answer == "Yes"){
            $response .= "<p>I know exactly how you feel</p>";
         }else{
            $response .= "<p>No idea how you feel.</p>";
         }

        return $response;
    }

    $navigationIsClicked = isset($_GET['page']);
    if($navigationIsClicked){
        $fileShouldLoad = $_GET['page'];
        $newInstance->content.= include_once("links/$fileShouldLoad.php");
    }

    $page = include_once("templates/page.php");
    echo("$page")
?>