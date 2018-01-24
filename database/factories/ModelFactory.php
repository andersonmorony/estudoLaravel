<?php

use estoque\Models\produto;

/** @var \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(estoque\User::class, function (Faker\Generator $faker) {
    static $password;

    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'password' => $password ?: $password = bcrypt('secret'),
        'remember_token' => str_random(10),
    ];
});

$factory->define(produto::class, function (Faker\Generator $faker) {

    return [
        'nome' => $faker->word,
        'preco' => $faker->randomDigit,
        'descricao' => $faker->sentence(10),
        'quantidade' => $faker->randomDigit,
    ];
});
