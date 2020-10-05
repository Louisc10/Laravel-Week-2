<?php

namespace Database\Seeders;

use App\Models\Book;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::table('books')->insert([[
            'title' => "Semua Bisa Menjadi Programmer Laravel Basic",
            'creator' => "Yuniar Supardi & Sulaeman",
            'price' => 98000,
            'image' => "logo.png",
            'description' => "Buku dengan judul “Semua Bisa Menjadi Programmer Laravel Basic” ini merupakan buku dasar dalam mempelajari framework PHP dengan Laravel yang saat ini sedang populer. Dengan buku ini, tandanya Anda sudah belajar sampai tingkat menengah. Akan dibahas pula kelebihan dari script server programming dengan Laravel, serta materi lengkap dari dasar hingga menengah. Keunggulan buku ini adalah dapat memandu Anda membuat program web dengan Laravel dengan database MySQL dengan pembahasan yang mudah dan sistematis sehingga Anda tidak akan kesulitan mempelajarinya. Buku ini dibagi menjadi 30 bab, disusun secara sistematis dari program yang sederhana hingga database sehingga memudahkan Anda menjadi programmer dengan Laravel. Dengan mengacu beberapa buku penulis yang best seller maka terciptalah buku ini. Dalam buku ini, penulis juga membahas proses instalasi XAMPP di dalam Lampiran. Buku ini juga dapat dipakai oleh praktisi pendidikan, karyawan, dan mahasiswa.",
        ],
        [
            'title' => "Koleksi Program Web Php",
            'creator' => "Yuniar Supardi & Irwan Kurniawan, S.Kom.",
            'price' => 95000,
            'image' => "logo.png",
            'description' => "Buku dengan judul Koleksi Program Web PHP ini berisi koleksi bahasa pemrograman script server PHP. Buku ini merupakan buku terbaru dan update dari buku yang berjudul Buku Mahir Web Programming yang best seller. Dengan banyaknya contoh program web yang Anda dapat, Anda pasti akan dengan mudah mempelajarinya dan bisa langsung membuat program web. Keunggulan buku ini memandu Anda dengan mudah dan cepat serta dapat dipakai oleh mahasiswa untuk belajar pemrograman PHP tingkat lanjut. Buku ini juga mempunyai nilai lebih, misalnya pembahasan pembuatan aplikasi-aplikasi web yang populer yang banyak dipakai dalam pembuatan skripsi atau tugas akhir.",
        ],
        [
            'title' => "Semua Bisa Menjadi Programmer Python Case Study",
            'creator' => "Yuniar Supardi",
            'price' => 72000,
            'image' => "logo.png",
            'description' => "Buku dengan Judul Semua Bisa Menjadi Programmer Python Case Study ini merupakan buku lanjutan dari buku Semua Bisa Menjadi Programmer Python Basic yang best seller, tetapi Anda juga dapat langsung belajar dari buku ini. Dalam buku ini, Anda akan mendapat manfaat dari semua kemampuan bahasa pemrograman Python yang semakin hari semakin populer. Buku ini menjelaskan kelebihan bahasa pemrograman Python dari segi web, game, database, desktop, dan lain-lainnya. Juga memandu Anda membuat program Python dengan beberapa database, program desktop, dan game. Mudah dan sistematik dalam pembahasan, membuat Anda dengan mudah belajar dari buku ini.",
        ]]);
    }
}
