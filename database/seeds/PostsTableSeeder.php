<?php

use Illuminate\Database\Seeder;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('posts')->insert([
		'title' => 'Panduang Memulai Laravel', 
		'seotitle' => 'panduan-memulai-laravel',
		'author' => 'Sigerweb',
		'content' => 'Lorem ipsum excepteur aliquip ad nulla amet duis consectetur eu ullamco aliquip aute dolor est adipisicing ut consectetur voluptate ut tempor ex velit cupidatat id laborum occaecat sunt magna ullamco id fugiat cillum elit.',
		'image' => 'laravel.jpg',
		'hits' => 100
		]);

    }
}
