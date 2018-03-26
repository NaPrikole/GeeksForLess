<?php

class AdminAuthorController {

    public function index(){

        $allAuthors = Author::getAllAutors();

        require_once(ROOT . '/views/adminAuthors/homeAuthors.php');
        return true;
    }

    public function addAuthor(){

        if(isset($_POST['submit'])){
            $author = $_POST['author'];
            Author::addAuthor($author);

            header("Location: /admin/authors");
        }

        require_once(ROOT . '/views/adminAuthors/addAuthor.php');
        return true;
    }

    public function updateAuthor($id){

        $author = Author::getAuthorById($id);
        if(isset($_POST['submit'])) {
            $author = $_POST['author'];
            Author::updateAuthorById($id, $author);
            header("Location: /admin/authors");
        }

        require_once(ROOT . '/views/adminAuthors/updateAuthor.php');
        return true;
    }
}