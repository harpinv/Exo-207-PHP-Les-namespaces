<?php

namespace App\Manager;

use App\Entity\Article;

class ArticleName {

    public function __construct() {

    }

    public function save(Article $user): Article {
        return $user;
    }
}