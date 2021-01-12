<?php

    include dirname(__DIR__).'\src\init.php';
    
    //test si la variable id est vide et si elle n\'exist pas
    if(isset($_GET['id'])&&($_GET['id'])===false){
        trigger_error('article inconnu',E_USER_ERROR);
    }
    else{
        $article_id =intval($_GET['id']);

        //requête sql
        
        $sql_select_article = sprintf("SELECT * FROM article WHERE id=id AND id=%s", $article_id);

        $sql_select_article_res = mysqli_query($conn_bdd, $sql_select_article);
        $article = mysqli_fetch_assoc($sql_select_article_res);

        $page_contenu = sprintf("<div class=\"text-center\ col-md-6 offset-md-3\">
                                    <h3>%s</h2>
                                    <h5>%s</h3>
                                    <img src=\"images/%s\">
                                    <p>%s</p>
                                </div>",
                                $article['titre'],$article['date'],$article['image'] ,$article['contenu']
                            );
    }

    include dirname(__DIR__).'\src\layout.php';
?>