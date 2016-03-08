<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
//         $this->call(UsersTableSeeder::class);
//        Model::unguard();

        /*factory(App\User::class, 50)->create()->each(function($u) {
            $u->posts()->save(factory(App\Post::class)->make());
        });*/

//        $this->call(UsersTableSeeder::class);
        $this->call(RecipientsTableSeeder::class);
//        Model::reguard();
    }
}
