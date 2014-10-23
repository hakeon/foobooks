<?php

class Library {

    // Properties (Variables)

    // Arrays
    private $books;

    // String
    private $path;

    // Methods (Functions)
    public  function setPath($path) {
        $this->path = $path;
    }
    public function getPath () {
        return $this->path;
    }

    public function getBooks() {
        // Get the file
        $books = File::get(app_path().'/database/books.json');
        // Convert to an array
        $this->books = json_decode($books,true);

        return $this->books;
    }
}