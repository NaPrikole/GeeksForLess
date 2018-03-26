<?php

class AdminGenreController {

    public function index(){

        $allGenres = Genre::getAllGenres();

        require_once(ROOT . '/views/adminGenres/homeGenres.php');
        return true;
    }

    public function addGenre(){

        if(isset($_POST['submit'])){
            $genre = $_POST['genre'];
            Genre::addGenre($genre);

            header("Location: /admin/genres");
        }

        require_once(ROOT . '/views/adminGenres/addGenre.php');
        return true;
    }

    public function updateGenre($id){

        $genre = Genre::getGenreById($id);
            if(isset($_POST['submit'])) {
                $genre = $_POST['genre'];
                Genre::updateGenreById($id, $genre);
                header("Location: /admin/genres");
            }

        require_once(ROOT . '/views/adminGenres/updateGenre.php');
        return true;
    }
}