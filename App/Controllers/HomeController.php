<?php

namespace App\Controllers;

use App\Core\AControllerBase;
use App\Models\Article;
use App\Models\DBStorage;

class HomeController extends AControllerBase
{



    public function index()
    {
        return [
            'articles' => Article::getAll()
        ];
    }

    public function delete() {

        if (!isset($_GET['id'])) return null;

        $article = Article::getOne($_GET['id']);
        $article->delete();
        $this->presmeruj();
    }

    public  function edit() {
        $article = Article::getOne($_GET['id']);

        if (isset($_POST['title'])) {
            $article->setTitle($_POST['title']);
            $article->setText($_POST['text']);
            $article->setHeader($_POST['header']);
            $article->save();
            $this->presmeruj();
        }
        return [
            'article' => $article
        ];
    }

    public function add() {

        if (isset($_POST['title'])) {
            $article = new Article($_POST['title'], $_POST['header'], $_POST['text']);
            $article->save();
            $this->presmeruj();
        }
        return [];
    }


    public function presmeruj() {
        header("Location: ?c=home");
    }

    public function galery() {

    }

}