<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Arr;

class Job {
    public static function all(): array
    {
        return  [
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
    }
    public static function find(int $id): array
    {
        $job = Arr::first(static::all(), fn($job) => $job['id']== $id);
        if(!$job){
            abort(404);
        }
        return $job;
    }
}
