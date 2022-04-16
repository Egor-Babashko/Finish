<?php

use Illuminate\Foundation\Inspiring;
use Illuminate\Support\Facades\Artisan;

/*
|--------------------------------------------------------------------------
| Console Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of your Closure based console
| commands. Each Closure is bound to a command instance allowing a
| simple approach to interacting with each command's IO methods.
|
*/

Artisan::command('inspire', function () {
    $this->comment(Inspiring::quote());
})->purpose('Display an inspiring quote');

Artisan::command('make:admin', function(){
   \App\Models\User::create([
      'name' => 'Admin',
      'email' => 'admin@mail.ru',
      'password' => \Illuminate\Support\Facades\Hash::make('123123123'),
      'role' => 'admin'
   ]);

    \App\Models\User::create([
        'name' => 'User',
        'email' => 'user@mail.ru',
        'password' => \Illuminate\Support\Facades\Hash::make('123123123'),
        'role' => 'user'
    ]);
})->purpose("Create admin and test user");
