<?php

use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //producten voor categorie 1
        DB::table('products')->insert([
            'name' => "Mona Lisa",
            'description' => "Lorem ipsum dolor sit amet consectetur adipisicing elit. In laboriosam natus soluta, odit reprehenderit corrupti dolor mollitia, repudiandae recusandae officiis adipisci voluptates consequatur voluptas quam, cumque tenetur veniam voluptatem animi?",
            'price' => rand(1, 600),
            'category_id' => 1,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('products')->insert([
            'name' => "Vincent van Gogh",
            'description' => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Id quibusdam pariatur impedit ex quod, ipsam eum, reprehenderit magnam natus libero atque, architecto inventore ea aperiam quos nesciunt iure! Aut, dicta.",
            'price' => rand(10, 600),
            'category_id' => 1,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('products')->insert([
            'name' => "Vinnoe",
            'description' => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repudiandae explicabo molestiae harum, dolor obcaecati ut cupiditate voluptas esse, inventore labore delectus aspernatur similique, quis suscipit perspiciatis cumque dolore expedita odio?",
            'price' => rand(10, 600),
            'category_id' => 1,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('products')->insert([
            'name' => "Damian",
            'description' => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Placeat facere velit cumque maxime autem suscipit officia. Magnam dolorem voluptatibus necessitatibus vero maiores dignissimos vel in tempora similique sint. Inventore, eos!",
            'price' => rand(10, 600),
            'category_id' => 1,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('products')->insert([
            'name' => "Ben",
            'description' => "Lorem, ipsum dolor sit amet consectetur adipisicing elit. Rerum veritatis praesentium laboriosam repudiandae repellat hic iure, porro maxime dignissimos labore corrupti cum sunt vitae! Aut, laboriosam eaque. Similique, at! Expedita.",
            'price' => rand(10, 600),
            'category_id' => 1,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        //producten voor categorie 2
        DB::table('products')->insert([
            'name' => "Zwarte vaas",
            'description' => "Lorem ipsum dolor sit amet consectetur, adipisicing elit. Labore ipsam incidunt repellendus blanditiis voluptas. Ut, doloremque, quasi, adipisci mollitia dolore maiores hic tempore obcaecati tenetur quam eaque similique. Quasi, magni!",
            'price' => rand(10, 600),
            'category_id' => 2,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('products')->insert([
            'name' => "Vreemde vaas",
            'description' => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Error cupiditate nisi quisquam. Corrupti magni amet commodi ex suscipit neque, ea, voluptatem voluptatibus ab voluptates et expedita doloribus, itaque ad deserunt!",
            'price' => rand(10, 600),
            'category_id' => 2,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('products')->insert([
            'name' => "Gebroken vaas",
            'description' => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Dicta ut vitae iste excepturi eum incidunt rerum nihil odit, minima accusantium blanditiis necessitatibus, tempora consectetur itaque quam numquam quas? Quia, vitae!",
            'price' => rand(10, 600),
            'category_id' => 2,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('products')->insert([
            'name' => "Gele vaas",
            'description' => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsa nam voluptatem at. Architecto provident corrupti, nihil doloremque nostrum suscipit ut, distinctio, nam dolore assumenda aliquam totam iusto nemo iste facilis.",
            'price' => rand(10, 600),
            'category_id' => 2,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('products')->insert([
            'name' => "Glazen vaas",
            'description' => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Minima quod corporis, eius quae omnis quisquam facere, sunt laudantium provident voluptatem incidunt mollitia nemo hic doloribus. At eum numquam similique culpa?",
            'price' => rand(10, 600),
            'category_id' => 2,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        //producten voor categorie 3
        DB::table('products')->insert([
            'name' => "Mayo",
            'description' => "Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quod placeat vel aut dolore eos velit ea tempora dolores eaque dolor quo necessitatibus molestias, sit obcaecati, eius, atque incidunt reprehenderit excepturi!",
            'price' => rand(10, 600),
            'category_id' => 3,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('products')->insert([
            'name' => "Chapsalon",
            'description' => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Necessitatibus quod accusantium aperiam totam libero quis commodi? Autem optio tempore deserunt enim, quod consequatur consequuntur dolorum doloremque vel, accusantium aliquid nihil.",
            'price' => rand(10, 600),
            'category_id' => 3,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('products')->insert([
            'name' => "Pizza",
            'description' => "Lorem ipsum dolor sit amet consectetur, adipisicing elit. Sit consectetur provident velit molestiae ad eum recusandae cupiditate eos veniam in blanditiis porro illum, deleniti ipsam accusamus officiis aliquid voluptas? Perferendis!",
            'price' => rand(10, 600),
            'category_id' => 3,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('products')->insert([
            'name' => "Spagetti",
            'description' => "Lorem ipsum, dolor sit amet consectetur adipisicing elit. Numquam temporibus ipsa inventore nam! Sit optio, reiciendis provident ab corporis dicta, libero sequi accusantium totam cum nam dolores voluptatem nihil itaque!",
            'price' => rand(10, 600),
            'category_id' => 3,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('products')->insert([
            'name' => "Zand",
            'description' => "Lorem ipsum dolor sit, amet consectetur adipisicing elit. Labore nostrum in dicta nihil aperiam dolore. Omnis perspiciatis nam unde! Tempore tenetur minima dolor dolorum excepturi maiores magni vitae omnis nesciunt.",
            'price' => rand(10, 600),
            'category_id' => 3,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        //producten voor categorie 4
        DB::table('products')->insert([
            'name' => "Huff",
            'description' => "Lorem, ipsum dolor sit amet consectetur adipisicing elit. Dolore eum ipsam saepe praesentium adipisci laudantium qui temporibus. Facilis quae doloremque quaerat, unde, quas harum, dolore hic sint culpa praesentium eum!",
            'price' => rand(10, 600),
            'category_id' => 4,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('products')->insert([
            'name' => "The North Face",
            'description' => "Lorem ipsum, dolor sit amet consectetur adipisicing elit. Aliquam earum architecto dolore dicta odio itaque consectetur culpa. Reprehenderit ea reiciendis quasi iusto amet totam esse soluta, voluptatibus vero corrupti molestiae!",
            'price' => rand(10, 600),
            'category_id' => 4,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('products')->insert([
            'name' => "Calvin Klein",
            'description' => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Earum atque porro, temporibus, nobis molestias eligendi quaerat pariatur quod voluptates consequatur nulla? Vero nemo velit minima eligendi delectus alias commodi officia?",
            'price' => rand(10, 600),
            'category_id' => 4,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('products')->insert([
            'name' => "Tommy Hillfiger",
            'description' => "Lorem, ipsum dolor sit amet consectetur adipisicing elit. Aliquid at repellat numquam placeat exercitationem illo maxime, dolorem cum dolorum laboriosam eligendi! Nulla libero aperiam accusantium ipsa architecto molestiae facilis animi.",
            'price' => rand(10, 600),
            'category_id' => 4,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('products')->insert([
            'name' => "NY",
            'description' => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugit, consectetur? Esse blanditiis, repudiandae voluptatem tenetur odit itaque laudantium accusantium deserunt ea excepturi placeat amet tempore sint officiis ipsam labore porro.",
            'price' => rand(10, 600),
            'category_id' => 4,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        //producten voor categorie 5
        DB::table('products')->insert([
            'name' => "Houten tafel",
            'description' => "Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quae optio dolorem corporis molestias. Quos tenetur corrupti suscipit quasi delectus dignissimos illum laboriosam quas iste dolorem mollitia, sed quisquam, placeat aperiam.",
            'price' => rand(10, 600),
            'category_id' => 5,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('products')->insert([
            'name' => "Glazen tafel",
            'description' => "Lorem ipsum dolor sit, amet consectetur adipisicing elit. Reiciendis velit impedit illo ipsum iusto quos perferendis aliquam necessitatibus inventore consequuntur voluptatibus at totam minima aspernatur assumenda sed, ex aliquid natus.",
            'price' => rand(10, 600),
            'category_id' => 5,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('products')->insert([
            'name' => "Zandhoopje",
            'description' => "Lorem ipsum dolor, sit amet consectetur adipisicing elit. Odit expedita possimus provident exercitationem nesciunt quasi nulla ratione ad excepturi repudiandae tempora iure quisquam voluptatibus ducimus, sint culpa deleniti aliquam ullam!",
            'price' => rand(10, 600),
            'category_id' => 5,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('products')->insert([
            'name' => "Stenen tafel",
            'description' => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Veritatis quia repellendus reiciendis ipsa dolorem consequatur aliquam mollitia magni deserunt reprehenderit esse nulla beatae tempore laudantium ea, commodi, ratione eos qui!",
            'price' => rand(10, 600),
            'category_id' => 5,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('products')->insert([
            'name' => "Ronde tafel",
            'description' => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Inventore autem in illum, doloribus temporibus molestiae impedit voluptatibus esse voluptates delectus quos ea, neque beatae! Explicabo voluptates eveniet est totam placeat.",
            'price' => rand(10, 600),
            'category_id' => 5,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
