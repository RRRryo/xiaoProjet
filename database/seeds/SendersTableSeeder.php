<?php

use Illuminate\Database\Seeder;

class SendersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Recipient::class, 50)->create()->each(function($u) {
            $u->save(factory(App\Post::class)->make());
        });
    }
}
