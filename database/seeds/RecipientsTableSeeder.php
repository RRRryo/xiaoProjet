<?php

use Illuminate\Database\Seeder;

class RecipientsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Recipient::class, 2000)->create()->each(function($u) {
            $u->save();
        });
    }
}
