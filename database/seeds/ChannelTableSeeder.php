<?php

use LaravelForum\Channel;
use Illuminate\Database\Seeder;

class ChannelTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Dummy Channels
        Channel::create([
            'name' => 'Laravel 5.8',
            'slug' => str_slug('Laravel 5.8')
        ]);

        Channel::create([
            'name' => 'Vue JS 3',
            'slug' => str_slug('Vue JS 3')
        ]);

        Channel::create([
            'name' => 'Angular 7',
            'slug' => str_slug('Angular 7')
        ]);

        Channel::create([
            'name' => 'Node JS',
            'slug' => str_slug('Node JS')
        ]);
    }
}
