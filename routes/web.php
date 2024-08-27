<?php
use App\Models\job;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/jobs', function () {
    return view(
        'jobs',
        [
            'jobs' => Job::all()
        ]
    );
});

Route::get('/jobs/{id}', function ($id) {
    $job = Job::find($id);
    return view('indivjob', ['work' => $job]);
});


