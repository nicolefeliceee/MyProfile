<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Gallery;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        Gallery::create([
            'title' => 'Judul Pertama Coba',
            'slug' => 'title-1',
            'image' => 'title1-1.JPG',
            'status' => 'Kids',
            'yearMoment' => '2005',
            'story' => '<p style="text-align: justify">Lorem ipsum dolor sit amet consectetur adipisicing elit. Minus ipsam accusamus vitae eaque sapiente ad suscipit in, cupiditate fugiat nesciunt soluta voluptatibus tempora consequuntur enim repellat labore, quaerat a dicta officiis quas omnis quis qui adipisci expedita. Praesentium eos nobis assumenda obcaecati aut, natus alias similique ullam earum modi quam facere minima tenetur odit, maxime, architecto magnam ipsa tempora sequi!</p><p style="text-align: justify">Pariatur eveniet sapiente veritatis cumque totam ratione iste quo nobis, blanditiis dolorum aut dolorem, architecto facilis modi doloremque magnam, perferendis aliquid voluptatem corrupti laborum quae non iure unde voluptatum? Illo, ex totam quos temporibus, odit molestias asperiores inventore, cupiditate alias fugit sed placeat quaerat nobis. Voluptatum ut illum iure voluptatibus earum alias ex dolor. Rem, nesciunt impedit iusto atque ducimus quo nobis ullam.</p>'
        ]);
        Gallery::create([
            'title' => 'title 2',
            'slug' => 'title-2',
            'image' => 'title2-1.JPG',
            'status' => 'Teens',
            'yearMoment' => '2010',
            'story' => '<p style="text-align: justify">Lorem ipsum dolor sit amet consectetur adipisicing elit. Minus ipsam accusamus vitae eaque sapiente ad suscipit in, cupiditate fugiat nesciunt soluta voluptatibus tempora consequuntur enim repellat labore, quaerat a dicta officiis quas omnis quis qui adipisci expedita. Praesentium eos nobis assumenda obcaecati aut, natus alias similique ullam earum modi quam facere minima tenetur odit, maxime, architecto magnam ipsa tempora sequi!</p><p style="text-align: justify">Pariatur eveniet sapiente veritatis cumque totam ratione iste quo nobis, blanditiis dolorum aut dolorem, architecto facilis modi doloremque magnam, perferendis aliquid voluptatem corrupti laborum quae non iure unde voluptatum? Illo, ex totam quos temporibus, odit molestias asperiores inventore, cupiditate alias fugit sed placeat quaerat nobis. Voluptatum ut illum iure voluptatibus earum alias ex dolor. Rem, nesciunt impedit iusto atque ducimus quo nobis ullam.</p>'
        ]);
        Gallery::create([
            'title' => 'title 3',
            'slug' => 'title-3',
            'image' => 'title3-1.JPG',
            'status' => 'Adult',
            'yearMoment' => '2023',
            'story' => '<p style="text-align: justify">Lorem ipsum dolor sit amet consectetur adipisicing elit. Minus ipsam accusamus vitae eaque sapiente ad suscipit in, cupiditate fugiat nesciunt soluta voluptatibus tempora consequuntur enim repellat labore, quaerat a dicta officiis quas omnis quis qui adipisci expedita. Praesentium eos nobis assumenda obcaecati aut, natus alias similique ullam earum modi quam facere minima tenetur odit, maxime, architecto magnam ipsa tempora sequi!</p><p style="text-align: justify">Pariatur eveniet sapiente veritatis cumque totam ratione iste quo nobis, blanditiis dolorum aut dolorem, architecto facilis modi doloremque magnam, perferendis aliquid voluptatem corrupti laborum quae non iure unde voluptatum? Illo, ex totam quos temporibus, odit molestias asperiores inventore, cupiditate alias fugit sed placeat quaerat nobis. Voluptatum ut illum iure voluptatibus earum alias ex dolor. Rem, nesciunt impedit iusto atque ducimus quo nobis ullam.</p>'
        ]);
        Gallery::create([
            'title' => 'title 4',
            'slug' => 'title-4',
            'image' => 'title4-1.JPG',
            'status' => 'Teens',
            'yearMoment' => '2010',
            'story' => '<p style="text-align: justify">Lorem ipsum dolor sit amet consectetur adipisicing elit. Minus ipsam accusamus vitae eaque sapiente ad suscipit in, cupiditate fugiat nesciunt soluta voluptatibus tempora consequuntur enim repellat labore, quaerat a dicta officiis quas omnis quis qui adipisci expedita. Praesentium eos nobis assumenda obcaecati aut, natus alias similique ullam earum modi quam facere minima tenetur odit, maxime, architecto magnam ipsa tempora sequi!</p><p style="text-align: justify">Pariatur eveniet sapiente veritatis cumque totam ratione iste quo nobis, blanditiis dolorum aut dolorem, architecto facilis modi doloremque magnam, perferendis aliquid voluptatem corrupti laborum quae non iure unde voluptatum? Illo, ex totam quos temporibus, odit molestias asperiores inventore, cupiditate alias fugit sed placeat quaerat nobis. Voluptatum ut illum iure voluptatibus earum alias ex dolor. Rem, nesciunt impedit iusto atque ducimus quo nobis ullam.</p>'
        ]);
        Gallery::create([
            'title' => 'title 5',
            'slug' => 'title-5',
            'image' => 'title5-1.JPG',
            'status' => 'Kids',
            'yearMoment' => '2005',
            'story' => '<p style="text-align: justify">Lorem ipsum dolor sit amet consectetur adipisicing elit. Minus ipsam accusamus vitae eaque sapiente ad suscipit in, cupiditate fugiat nesciunt soluta voluptatibus tempora consequuntur enim repellat labore, quaerat a dicta officiis quas omnis quis qui adipisci expedita. Praesentium eos nobis assumenda obcaecati aut, natus alias similique ullam earum modi quam facere minima tenetur odit, maxime, architecto magnam ipsa tempora sequi!</p><p style="text-align: justify">Pariatur eveniet sapiente veritatis cumque totam ratione iste quo nobis, blanditiis dolorum aut dolorem, architecto facilis modi doloremque magnam, perferendis aliquid voluptatem corrupti laborum quae non iure unde voluptatum? Illo, ex totam quos temporibus, odit molestias asperiores inventore, cupiditate alias fugit sed placeat quaerat nobis. Voluptatum ut illum iure voluptatibus earum alias ex dolor. Rem, nesciunt impedit iusto atque ducimus quo nobis ullam.</p>'
        ]);
        Gallery::create([
            'title' => 'title 6',
            'slug' => 'title-6',
            'image' => 'title6-1.JPG',
            'status' => 'Teens',
            'yearMoment' => '2010',
            'story' => '<p style="text-align: justify">Lorem ipsum dolor sit amet consectetur adipisicing elit. Minus ipsam accusamus vitae eaque sapiente ad suscipit in, cupiditate fugiat nesciunt soluta voluptatibus tempora consequuntur enim repellat labore, quaerat a dicta officiis quas omnis quis qui adipisci expedita. Praesentium eos nobis assumenda obcaecati aut, natus alias similique ullam earum modi quam facere minima tenetur odit, maxime, architecto magnam ipsa tempora sequi!</p><p style="text-align: justify">Pariatur eveniet sapiente veritatis cumque totam ratione iste quo nobis, blanditiis dolorum aut dolorem, architecto facilis modi doloremque magnam, perferendis aliquid voluptatem corrupti laborum quae non iure unde voluptatum? Illo, ex totam quos temporibus, odit molestias asperiores inventore, cupiditate alias fugit sed placeat quaerat nobis. Voluptatum ut illum iure voluptatibus earum alias ex dolor. Rem, nesciunt impedit iusto atque ducimus quo nobis ullam.</p>'
        ]);
        Gallery::create([
            'title' => 'title 7',
            'slug' => 'title-7',
            'image' => 'title7-1.JPG',
            'status' => 'Adult',
            'yearMoment' => '2023',
            'story' => '<p style="text-align: justify">Lorem ipsum dolor sit amet consectetur adipisicing elit. Minus ipsam accusamus vitae eaque sapiente ad suscipit in, cupiditate fugiat nesciunt soluta voluptatibus tempora consequuntur enim repellat labore, quaerat a dicta officiis quas omnis quis qui adipisci expedita. Praesentium eos nobis assumenda obcaecati aut, natus alias similique ullam earum modi quam facere minima tenetur odit, maxime, architecto magnam ipsa tempora sequi!</p><p style="text-align: justify">Pariatur eveniet sapiente veritatis cumque totam ratione iste quo nobis, blanditiis dolorum aut dolorem, architecto facilis modi doloremque magnam, perferendis aliquid voluptatem corrupti laborum quae non iure unde voluptatum? Illo, ex totam quos temporibus, odit molestias asperiores inventore, cupiditate alias fugit sed placeat quaerat nobis. Voluptatum ut illum iure voluptatibus earum alias ex dolor. Rem, nesciunt impedit iusto atque ducimus quo nobis ullam.</p>'
        ]);
        Gallery::create([
            'title' => 'title 8',
            'slug' => 'title-8',
            'image' => 'title8-1.JPG',
            'status' => 'Teens',
            'yearMoment' => '2010',
            'story' => '<p style="text-align: justify">Lorem ipsum dolor sit amet consectetur adipisicing elit. Minus ipsam accusamus vitae eaque sapiente ad suscipit in, cupiditate fugiat nesciunt soluta voluptatibus tempora consequuntur enim repellat labore, quaerat a dicta officiis quas omnis quis qui adipisci expedita. Praesentium eos nobis assumenda obcaecati aut, natus alias similique ullam earum modi quam facere minima tenetur odit, maxime, architecto magnam ipsa tempora sequi!</p><p style="text-align: justify">Pariatur eveniet sapiente veritatis cumque totam ratione iste quo nobis, blanditiis dolorum aut dolorem, architecto facilis modi doloremque magnam, perferendis aliquid voluptatem corrupti laborum quae non iure unde voluptatum? Illo, ex totam quos temporibus, odit molestias asperiores inventore, cupiditate alias fugit sed placeat quaerat nobis. Voluptatum ut illum iure voluptatibus earum alias ex dolor. Rem, nesciunt impedit iusto atque ducimus quo nobis ullam.</p>'
        ]);
        Gallery::create([
            'title' => 'title 9',
            'slug' => 'title-9',
            'image' => 'title9-1.JPG',
            'status' => 'Teens',
            'yearMoment' => '2010',
            'story' => '<p style="text-align: justify">Lorem ipsum dolor sit amet consectetur adipisicing elit. Minus ipsam accusamus vitae eaque sapiente ad suscipit in, cupiditate fugiat nesciunt soluta voluptatibus tempora consequuntur enim repellat labore, quaerat a dicta officiis quas omnis quis qui adipisci expedita. Praesentium eos nobis assumenda obcaecati aut, natus alias similique ullam earum modi quam facere minima tenetur odit, maxime, architecto magnam ipsa tempora sequi!</p><p style="text-align: justify">Pariatur eveniet sapiente veritatis cumque totam ratione iste quo nobis, blanditiis dolorum aut dolorem, architecto facilis modi doloremque magnam, perferendis aliquid voluptatem corrupti laborum quae non iure unde voluptatum? Illo, ex totam quos temporibus, odit molestias asperiores inventore, cupiditate alias fugit sed placeat quaerat nobis. Voluptatum ut illum iure voluptatibus earum alias ex dolor. Rem, nesciunt impedit iusto atque ducimus quo nobis ullam.</p>'
        ]);
    }
}
