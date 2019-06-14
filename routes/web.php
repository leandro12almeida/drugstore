<?php
	// Initial route
    Route::get('/', function () {
        return view('app.filter.list');
    })->name('initial');

    // Details list
    Route::get('/details', function () {
        return view('app.details.list');
    })->name('details');

    // Post routes
    Route::any('/find', 'ProductController@find')->name('find');