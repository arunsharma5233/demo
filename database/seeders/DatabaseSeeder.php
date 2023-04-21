<?php

namespace Database\Seeders;

 use Illuminate\Database\Console\Seeds\WithoutModelEvents;
 use App\Models\User;
 use App\Models\Category;
 use App\Models\Post;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        //   User::truncate();
        //   Post::truncate();
        //   Category::truncate();
       $user= User::factory()->create([
            'name'=>'joe doe'
       
            
          
        ]);
           Post::factory(5)->create([
            'user_id'=> $user->id
           ]);
       //  $user = User::factory()->create();

    //    $personal= Category::create([
    //          'name' => 'Personal',
    //          'slug' => 'persnal',
    //      ]);
    //      $family=Category::create([
    //         'name' => 'Family',
    //         'slug' => 'family',
    //     ]);
    //     $work=Category::create([
    //         'name' => 'Work',
    //         'slug' => 'work',
    //     ]);
    //     Post::create([
    //         'user_id'=>$user->id,
    //         'category_id'=>$family->id,
    //         'tittle' => 'My Family Post',
    //         'slug' => 'my-family-post',
    //         'excerpt'=> 'Lorem, ipsum dolor sit amet consectetur adipisicing elit.',
    //         'body'=>'Lorem, ipsum dolor sit amet consectetur adipisicing elit . Alias eaque molestiae omnis ullam similique recusandae nam! Illum doloremque accusamus repellendus similique dolorem quos commodi vitae neque! Optio labore veniam ex necessitatibus quo obcaecati a quas temporibus nemo voluptas saepe, earum non alias eius laboriosam fuga eum corrupti illo, fugiat accusantium sequi architecto, quis voluptatem exercitationem? Provident, voluptatem itaque! Aperiam, assumenda.',

            
    //     ]);

    //     Post::create([
    //         'user_id'=>$user->id,
    //         'category_id'=>$work->id,
    //         'tittle' => 'My Work Post',
    //         'slug' => 'my-work-post',
    //         'excerpt'=> 'Lorem, ipsum dolor sit amet consectetur adipisicing elit.',
    //         'body'=>'Lorem, ipsum dolor sit amet consectetur adipisicing elit . Alias eaque molestiae omnis ullam similique recusandae nam! Illum doloremque accusamus repellendus similique dolorem quos commodi vitae neque! Optio labore veniam ex necessitatibus quo obcaecati a quas temporibus nemo voluptas saepe, earum non alias eius laboriosam fuga eum corrupti illo, fugiat accusantium sequi architecto, quis voluptatem exercitationem? Provident, voluptatem itaque! Aperiam, assumenda.',

            
    //     ]);
    }
}

