<?php

function indexAction(PDO $connexion)
{
    //Je demande les posts aux modèles et je les mets dans $posts
    include_once'../app/models/postsModel.php';
    $posts = findAll($connexion);
    //Je charge la vue index dans $content
    GLOBAL $content;
    ob_start();
    include'../app/views/posts/index.php';
    $content= ob_get_clean();
}