<?php

# Homepage
Route::get('/', function() {
   return View::make('index');
});

// List all books / search
Route::get('/list/{format?}', function($format = 'html') {

    // Initialize a variable
    $library = new Library();

    // Setter
    $library->setPath(app_path().'/database/books.json');

    // Getter
    $books = $library->getBooks();

    if (strtolower($format) == 'json') {
        return 'JSON Version';
    }
    elseif(strtolower($format) == 'pdf') {
        return 'PDF Version';
    }
    else {
        return View::make('list')
            ->with('books', $books);
    }
});

// Display the form for a new book
Route::get('/add', function() {

});

// Process the form for a new book
Route::post('/add', function() {

});

// Display the form to edit a book
Route::get('/edit/{title}', function($title) {

});

// Process the form for the edit of a book
Route::post('/add', function() {

});

// Data route
Route::get('/data', function() {

    // Initialize a variable
    $library = new Library();

    // Setter
    $library->setPath(app_path().'/database/books.json');

    // Getter
    $books = $library->getBooks();

    // Return the file
    echo Pre::render($books);
});