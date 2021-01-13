<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Carbon\Carbon;
use App\Models\Article;

class ArticleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Article::insert([
            [
                'author_id'  => '1',
                'category' => 'Entertainment',
                'title' => 'Ini Adalah Contoh Judul Artikel Pertama',
                'content' => '<p>Ini adalah contoh artikel pada kategori Entertainment</p>',
                'created_at' => Carbon::now()
            ],
            [
                'author_id'  => '1',
                'category' => 'Education',
                'title' => 'Ini Adalah Contoh Judul Artikel Kedua',
                'content' => '<p>Ini adalah contoh artikel pada kategori Education</p>',
                'created_at' => Carbon::now()
            ],
            [
                'author_id'  => '1',
                'category' => 'International',
                'title' => 'Ini Adalah Contoh Judul Artikel Ketiga',
                'content' => '<p>Ini adalah contoh artikel pada kategori International</p>',
                'created_at' => Carbon::now()
            ],
            [
                'author_id'  => '1',
                'category' => 'Health',
                'title' => 'Ini Adalah Contoh Judul Artikel Terakhir',
                'content' => '<p>Ini adalah contoh artikel pada kategori Health</p>',
                'created_at' => Carbon::now()
            ]
        ]);
    }
}
