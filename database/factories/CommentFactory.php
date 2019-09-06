<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Comment;
use Faker\Generator as Faker;

$factory->define(Comment::class, function (Faker $faker) {
    $page = App\Page::inRandomOrder()->value('id');
    $user = App\User::inRandomOrder()->value('id');
    return [
        'page_id' => $page,
        'user_id' => $user,
        'message' => $faker->sentence(),


    ];
});
