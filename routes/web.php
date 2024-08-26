<?php
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');    
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/jobs', function () {
    return view('jobs',
    [   'jobs1234' => [
        [
            'id' => 1,
            'title' => 'Director',
            'salary' => '$50,000'
        ],
        [
            'id' => 2,
            'title' => 'Programmer',
            'salary' => '$10,000'
        ],
        [
            'id' => 3,
            'title' => 'Teacher',
            'salary' => '$40,000'
        ]
    ]
     ]
);
});

Route::get('/jobs/{id}', function ($id) {
    $jobs1234 = [
        [
            'id' => 1,
            'title' => 'Director',
            'salary' => '$50,000'
        ],
        [
            'id' => 2,
            'title' => 'Programmer',
            'salary' => '$10,000'
        ],
        [
            'id' => 3,
            'title' => 'Teacher',
            'salary' => '$40,000'
        ]
    ];
    $defaultUser = ['id' => 0, 'name' => 'Guest'];
    $job = Arr::first($jobs1234, fn($job) => $job['id'] == $id, $defaultUser) ;
    //  dump($job); // you can see the difference between dump() and dd() function.
    //  echo 'My name is Niway Chemere';
    return view('indivjob', ['work' => $job]);
});

