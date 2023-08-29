<?php

// app()->get('/', function () {
//     echo view('index');
// });

app()->get("/name", function () {
    response()->json(["name" => "Leaf"]);
});

app()->get('/about', function () {
    echo view('about', );
});

app()->get('/contact', function () {
    echo view('contact', );
});
