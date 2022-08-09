<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Post;
use App\Models\User;
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

        //*only use when fresh database, php artisan migrate:fresh --seed
        // User::truncate();
        // Category::truncate();
        // Post::truncate();

        $user = User::factory()->create([
            'name' => 'Man Guan'
        ]);

        Post::factory(6)->create([
            'user_id' => $user->id
    ]);


        // $user = User::factory()->create();

        // $personal =  Category::create([
        //     'name' => 'Personal',
        //     'slug' => 'personal',
        // ]);
        // $family = Category::create([
        //     'name' => 'Family', 
        //     'slug' => 'family',
        // ]);
        // $work = Category::create([
        //     'name' => 'Work',
        //     'slug' => 'work',
        // ]);

        // Post::create([
        //     'user_id' => $user->id,
        //     'category_id' => $personal->id,
        //     'title' => 'My Personal Post',
        //     'slug' => 'my-first-post',
        //     'excerpt' => '<p>Winter</p>',
        //     'body' => '<p>Winter is coming soon!</p>',
        // ]);

        // Post::create([
        //     'user_id' => $user->id,
        //     'category_id' => $family->id,
        //     'title' => 'My Family Post',
        //     'slug' => 'my-second-post',
        //     'excerpt' => '<p>Daenerys Stormborn of House Targaryen</p>',
        //     'body' => ' <p>Daenerys Stormborn of House Targaryen, the First of Her Name, Queen of the Andals and the First Men, Protector of the Seven Kingdoms, the Mother of Dragons, the Khaleesi of the Great Grass Sea, the Unburnt, the Breaker of Chains.</p>',
        // ]);
        // Post::create([
        //     'user_id' => $user->id,
        //     'category_id' => $work->id,
        //     'title' => 'My Work Post',
        //     'slug' => 'my-third-post',
        //     'excerpt' => '<p>Night gathers</p>',
        //     'body' => '<p>Night gathers, and now my watch begins. It shall not end until my death. I shall take no wife, hold no lands, father no children. I shall wear no crowns and win no glory. I shall live and die at my post. I am the sword in the darkness. I am the watcher on the walls. I am the fire that burns against the cold, the light that brings the dawn, the horn that wakes the sleepers, the shield that guards the realms of men. I pledge my life and honor to the Night’s Watch, for this night and all the nights to come</p>',
        // ]);
    }
}
