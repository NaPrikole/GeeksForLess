<?php

class AdminBooksController {

    public function index(){

        $bookList = Book::getContent();
        $allAuthors = Author::getAllAutors();
        $allGenres = Genre::getAllGenres();

        require_once(ROOT . '/views/adminBooks/homeBooks.php');
        return true;
    }

    public function addBook(){

        $allAuthors = Author::getAllAutors();
        $allGenres = Genre::getAllGenres();

        if(isset($_POST['submit'])){
            $data['title'] = $_POST['title'];
            $data['description'] = $_POST['description'];
            $data['price'] = $_POST['price'];
            $dataAuthor['author_id'] = $_POST['author'];
            $dataGenre['genre_id'] = $_POST['genre'];

            $id = Book::addNewBook($data);

            if($id){
                $dataAuthor['book_id'] = $id;
                $dataGenre['book_id'] = $id;
                Genre::createBooksCategory($dataGenre);
                Author::createBooksAuthor($dataAuthor);
            }
            header("Location: /admin/books");
        }

        require_once(ROOT . '/views/adminBooks/addBooks.php');
        return true;
    }

    public function updateBook($id){

        $book = Book::getBookById($id);
        $allAuthors = Author::getAllAutors();
        $allGenres = Genre::getAllGenres();

        if (isset($_POST['submit'])) {
            $data['title'] = $_POST['title'];
            $data['description'] = $_POST['description'];
            $data['price'] = $_POST['price'];
            $dataGenre['genre_id'] = $_POST['genre'];
            $dataAuthor['author_id'] = $_POST['author'];

            Book::updateBookById($id, $data);
            $dataGenre['book_id'] = $id;
            $dataAuthor['book_id'] = $id;
            Genre::addBookGenre($dataGenre);
            Author::addBookAuthor($dataAuthor);

            header("Location: /admin/books");
        }

        require_once(ROOT . '/views/adminBooks/updateBooks.php');
        return true;
    }
}