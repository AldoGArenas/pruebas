<?php

use Illuminate\Database\Seeder;

class BooksSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('books')->insert([
        	['nombre'=> "La chica del tren",
        	'autor'=> "Sempasuchil",],
        	['nombre'=> "Las Torres Gemelas",
        	'autor'=> "J.R.R. Tolkien",]

        ]);
    }
}
