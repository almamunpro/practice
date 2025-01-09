<?php

use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});
Route::get('/about', function () {
    return view('about');
});
Route::get('/contact', function () {
    return view('contact');
});
Route::get('/jobs', function () {
    return view('jobs',
    [
        'jobs' => [
            [
                'id' => 1,
                'title' => 'Senior Developer',
                'salary' => '$10,000'
            ],
            [
                'id' => 2,
                'title' => 'Project Manager',
                'salary' => '$8,000'
            ],
            [
                'id' => 3,
                'title' => 'Frontend Developer',
                'salary' => '$7,000'
            ]
        ]

    ]);
});
Route::get('/jobs/{id}', function ($id) {
    $jobs = [
            [
                'id' => 1,
                'title' => 'Senior Developer',
                'salary' => '$10,000'
            ],
            [
                'id' => 2,
                'title' => 'Project Manager',
                'salary' => '$8,000'
            ],
            [
                'id' => 3,
                'title' => 'Frontend Developer',
                'salary' => '$7,000'
            ]
        ];
        $job = Arr::first($jobs, fn($job) => $job['id']== $id);
    return view('job', ['job' => $job]);
});
