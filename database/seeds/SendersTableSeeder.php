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
        factory(App\Sender::class, 50)->create()->each(function($u) {
            $u->save();
        });
    }
}
