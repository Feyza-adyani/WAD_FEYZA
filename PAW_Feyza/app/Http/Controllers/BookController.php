<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BookController extends Controller
{
    public function index()
    {
        $books = [
            [
                'judul' => 'Laskar Pelangi',
                'penulis' => 'Andrea Hirata',
                'penerbit' => 'Bentang Pustaka',
                'tahun' => 2005,
            ],
            [
                'judul' => 'Negeri 5 Menara',
                'penulis' => 'Ahmad Fuadi',
                'penerbit' => 'Gramedia Pustaka Utama',
                'tahun' => 2009,
            ],
            [
                'judul' => 'Perahu Kertas',
                'penulis' => 'Dewi Lestari',
                'penerbit' => 'Bentang Pustaka',
                'tahun' => 2009,
            ],
            [
                'judul' => 'Bulan',
                'penulis' => 'Tere Liye',
                'penerbit' => 'Gramedia',
                'tahun' => 2012,
            ],
            [
                'judul' => 'Ayat-Ayat Cinta',
                'penulis' => 'Habiburrahman El Shirazy',
                'penerbit' => 'Republika',
                'tahun' => 2004,
            ],
        ];

        return view('books.index', compact('books'));
    }
}
