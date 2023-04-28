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
            'image' => 'me2.png',
            'status' => 'Kids',
            'yearMoment' => '2005',
            'story' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. In debitis magnam maiores reiciendis illum odio cupiditate ab nemo, excepturi assumenda asperiores fugiat autem nisi incidunt culpa ipsum dicta delectus quia magni voluptate ratione omnis hic. Cumque sunt iste saepe adipisci atque! Nam illum repellat eum exercitationem nobis dicta in officiis?'
        ]);
        Gallery::create([
            'title' => 'title 2',
            'slug' => 'title-2',
            'image' => 'title2-1',
            'status' => 'Teens',
            'yearMoment' => '2010',
            'story' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. In debitis magnam maiores reiciendis illum odio cupiditate ab nemo, excepturi assumenda asperiores fugiat autem nisi incidunt culpa ipsum dicta delectus quia magni voluptate ratione omnis hic. Cumque sunt iste saepe adipisci atque! Nam illum repellat eum exercitationem nobis dicta in officiis?'
        ]);
        Gallery::create([
            'title' => 'title 3',
            'slug' => 'title-3',
            'image' => 'title3-1',
            'status' => 'Adult',
            'yearMoment' => '2023',
            'story' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. In debitis magnam maiores reiciendis illum odio cupiditate ab nemo, excepturi assumenda asperiores fugiat autem nisi incidunt culpa ipsum dicta delectus quia magni voluptate ratione omnis hic. Cumque sunt iste saepe adipisci atque! Nam illum repellat eum exercitationem nobis dicta in officiis?'
        ]);
        Gallery::create([
            'title' => 'title 4',
            'slug' => 'title-4',
            'image' => 'title4-1',
            'status' => 'Teens',
            'yearMoment' => '2010',
            'story' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. In debitis magnam maiores reiciendis illum odio cupiditate ab nemo, excepturi assumenda asperiores fugiat autem nisi incidunt culpa ipsum dicta delectus quia magni voluptate ratione omnis hic. Cumque sunt iste saepe adipisci atque! Nam illum repellat eum exercitationem nobis dicta in officiis?'
        ]);
        Gallery::create([
            'title' => 'title 5',
            'slug' => 'title-5',
            'image' => 'title5-1',
            'status' => 'Kids',
            'yearMoment' => '2005',
            'story' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. In debitis magnam maiores reiciendis illum odio cupiditate ab nemo, excepturi assumenda asperiores fugiat autem nisi incidunt culpa ipsum dicta delectus quia magni voluptate ratione omnis hic. Cumque sunt iste saepe adipisci atque! Nam illum repellat eum exercitationem nobis dicta in officiis?'
        ]);
        Gallery::create([
            'title' => 'title 6',
            'slug' => 'title-6',
            'image' => 'title6-1',
            'status' => 'Teens',
            'yearMoment' => '2010',
            'story' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. In debitis magnam maiores reiciendis illum odio cupiditate ab nemo, excepturi assumenda asperiores fugiat autem nisi incidunt culpa ipsum dicta delectus quia magni voluptate ratione omnis hic. Cumque sunt iste saepe adipisci atque! Nam illum repellat eum exercitationem nobis dicta in officiis?'
        ]);
        Gallery::create([
            'title' => 'title 7',
            'slug' => 'title-7',
            'image' => 'title7-1',
            'status' => 'Adult',
            'yearMoment' => '2023',
            'story' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. In debitis magnam maiores reiciendis illum odio cupiditate ab nemo, excepturi assumenda asperiores fugiat autem nisi incidunt culpa ipsum dicta delectus quia magni voluptate ratione omnis hic. Cumque sunt iste saepe adipisci atque! Nam illum repellat eum exercitationem nobis dicta in officiis?'
        ]);
        Gallery::create([
            'title' => 'title 8',
            'slug' => 'title-8',
            'image' => 'title8-1',
            'status' => 'Teens',
            'yearMoment' => '2010',
            'story' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. In debitis magnam maiores reiciendis illum odio cupiditate ab nemo, excepturi assumenda asperiores fugiat autem nisi incidunt culpa ipsum dicta delectus quia magni voluptate ratione omnis hic. Cumque sunt iste saepe adipisci atque! Nam illum repellat eum exercitationem nobis dicta in officiis?'
        ]);
        Gallery::create([
            'title' => 'title 9',
            'slug' => 'title-9',
            'image' => 'title9-1',
            'status' => 'Teens',
            'yearMoment' => '2010',
            'story' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. In debitis magnam maiores reiciendis illum odio cupiditate ab nemo, excepturi assumenda asperiores fugiat autem nisi incidunt culpa ipsum dicta delectus quia magni voluptate ratione omnis hic. Cumque sunt iste saepe adipisci atque! Nam illum repellat eum exercitationem nobis dicta in officiis?'
        ]);
    }
}
