<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(Product::class, function (Faker $faker) {
    return [
        'name' => $faker->firstName() . " " . $faker->lastName(),
        'description' => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum a risus ac mi
        imperdiet pharetra sit amet consequat nibh. Pellentesque ornare eros sit amet erat hendrerit, nec
        pretium sem blandit. Vestibulum porta arcu et venenatis faucibus. Etiam mi neque, ullamcorper ut nibh
        ut, ullamcorper sagittis metus. Donec eu malesuada purus. Sed at pellentesque ipsum, id porta arcu.
        Vivamus gravida magna purus, a dignissim ex vehicula a. In dapibus volutpat convallis. Mauris lobortis,
        nisi ac mattis ultrices, velit velit maximus ante, nec ultrices ex magna mollis lorem. Aliquam maximus
        rutrum dui in gravida. In suscipit est eu diam vulputate, quis tincidunt nulla commodo. Sed quis diam
        nec elit molestie vestibulum at et neque.",
        'price' => rand(100, 500),
        'category_id' => rand(1, 5),
        'created_at' => now(),
        'updated_at' => now(),
    ];
});
