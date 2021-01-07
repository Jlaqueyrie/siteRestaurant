<?php

    include dirname(__DIR__).'\src\init.php';
    
    //test si la variable id est vide et si elle n\'exist pas
    if(isset($_GET['id'])&&($_GET['id'])===false){
        trigger_error('article inconnu',E_USER_ERROR);
    }

    $article_id =$_GET['id'];
    $article = $card_blog[$article_id];

    $page_contenu = sprintf("<div class=\"text-center\ col-md-6 offset-md-3\">
                                <h3>%s</h2>
                                <h5>%s</h3>
                                <img src=\"%s\">
                                <p>%s</p>
                            </div>",
                            $article['titre'],$article['date'],$article['img'] ,$article['contenu']
                           );

    include dirname(__DIR__).'\src\layout.php';
?>