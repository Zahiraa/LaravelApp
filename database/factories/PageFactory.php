<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Page;
use App\User;
use Faker\Generator as Faker;

$factory->define(Page::class, function (Faker $faker) {
    return [
        'comment_id' => function () {
            return factory(App\Comment::class)->create()->id;
        },
        'user_id' => function () {
            return factory(App\User::class)->create()->id;
        },
        'title' => $faker->sentence(),
        'body'  => $faker->paragraphs(3,true),
        'picture'=>$faker->imageUrl(),
         'category'=>$faker->word(),
    ];
});
