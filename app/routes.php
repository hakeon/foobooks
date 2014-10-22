<?php

# Homepage
Route::get('/', function() {
   return 'Welcome to Foobooks!';
});

Route::get('/list/{query?}', function($query) {
    return 'List all the books';
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

// Practice route
Route::get('/data', function() {
    // Get the file
    $books = File::get(app_path().'/database/books.json');
    // Convert to an array
    $books = json_decode($books,true);
    // Return the file
    return $books;
});