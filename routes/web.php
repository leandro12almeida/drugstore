<?php
    Route::get('/', function () {
        return view('app.filter.list');
    });

    // Details list
    Route::get('/details', function () {
        return view('app.details.list');
    })->name('details');