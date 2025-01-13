<?php

use App\Models\Friend_zone;
use App\Models\Job;
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
['jobs' => job::all()]);
});

Route::get('/friend_zone', function ()  {

    return view('friend_zone',
['Friend_zones' =>Friend_zone::all()]);
});

Route::get('/jobs/{id}', function ($id)  {

        $job = Job::find($id);
    return view('job', ['job' => $job]);
});

