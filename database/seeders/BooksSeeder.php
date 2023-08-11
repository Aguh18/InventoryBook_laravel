<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BooksSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('books')->insert([
            [
                'title' => 'Judul Buku 1',
                'author' => 'Penulis 1',
                'publisher' => 'Penerbit 1',
                'description' => 'Deskripsi buku 1',
                'image' => 'gambar1.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Judul Buku 2',
                'author' => 'Penulis 2',
                'publisher' => 'Penerbit 2',
                'description' => 'Deskripsi buku 2',
                'image' => 'gambar2.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            // Tambahkan data buku lainnya sesuai kebutuhan
        ]);
    }
    }

