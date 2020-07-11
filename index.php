<?php

use \App\Models\User as User;

require 'app/start.php';

// User::create([
//   'name' => 'demo user 01',
//   'email' => 'demo.user.01@php.net'
// ]);

$user = User::find($_SESSION['user_id']);

echo $user->name;
