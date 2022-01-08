<?php

use Illuminate\Database\Seeder;

class IdolsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('idols')->insert([
        'name' => 'bts',
        'group_type' => 'cool',
        'music_type' => 'edm',
    ]);
        
        DB::table('idols')->insert([
        'name' => 'seventeen',
        'group_type' => 'cute',
        'music_type' => 'cute',
    ]);
    }
}
