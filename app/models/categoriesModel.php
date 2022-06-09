<?php

namespace App\Models\CategoriesModel;

use \PDO;


function findAll(PDO $connexion)
{
    // Tous les categories du post n°$postID par date décroissante
    $sql = "SELECT *
            FROM categories
            ORDER BY name ASC;";
 

 $rs = $connexion->query($sql);
 

    return $rs->fetchAll(PDO::FETCH_ASSOC);
}