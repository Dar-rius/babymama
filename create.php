<!-- cote serveur de la page create_question -->

<?php

    /* importation du fichier de connexion vers la base de
     Donnee */
    include 'config.php';
    
    /*Lorsque la requete est passer */
    if (isset($_POST['title']) && isset($_POST['text'])) 
        {
        $title = htmlspecialchars($_POST['title']);
        $text = htmlspecialchars($_POST['text']);
    }
    else {
        echo "Veuillez remplir tous les champs";
    }


    $req = $bd->exec("INSERT INTO `questions` (`title_question`, `text_question`) VALUES ('$title', '$text')");
    if ($req) {
        header('Location: display_questions.php');
    }
    else {
        echo 'Error!';
    }
?>