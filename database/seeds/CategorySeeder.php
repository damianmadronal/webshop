<?php

use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $category = new \App\Category([
            'name' => "Schilderijen",
            'description' => "Lorem, ipsum dolor sit amet consectetur adipisicing elit. Iusto placeat ullam commodi, animi quo enim pariatur laudantium earum, dicta facere incidunt tempora unde. Deleniti odit praesentium corrupti incidunt, unde aliquam?",
        ]);
        $category->save();

        $category = new \App\Category([
            'name' => "Vazen",
            'description' => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Consectetur porro necessitatibus iusto architecto. Dolore mollitia nam deserunt repellendus doloremque, distinctio amet minus quis nisi ducimus animi, dolorum odio labore fugiat?",
        ]);
        $category->save();

        $category = new \App\Category([
            'name' => "Eten",
            'description' => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Nam recusandae est impedit quisquam voluptates veritatis excepturi itaque id aliquam tempore non nihil eum, asperiores minus autem perspiciatis? Cumque, tempora numquam.",
        ]);
        $category->save();

        $category = new \App\Category([
            'name' => "Petten",
            'description' => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Amet dolore nobis rem ratione eveniet itaque earum ipsum explicabo distinctio ad, ipsam molestiae quidem qui, suscipit rerum labore magni in? Esse.",
        ]);
        $category->save();

        $category = new \App\Category([
            'name' => "Tafels",
            'description' => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Quis deleniti ipsam architecto maxime perspiciatis odio magni laudantium pariatur sint? Tenetur veniam aperiam debitis neque modi iusto quo impedit porro et.",
        ]);
        $category->save();
    }
}
