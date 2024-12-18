<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Film;


class FilmSeeder extends Seeder
{
    public function run()
    {
        Film::insert([

            [
                'title' => 'Captain America',
                'description' => 'Captain America: Brave New World. Only in theaters February 14.',
                'video_path' => 'videos/action1.mp4',
                'category_id' => 1
            ],
            [
                'title' => '20th Century Girl',
                'description' => '20th Century Girl adalah film drama romantis Korea Selatan yang dirilis pada tahun 2023. Berlatar pada tahun 1999.',
                'video_path' => 'videos/drama1.mp4',
                'category_id' => 2
            ],
            [
                'title' => 'Agak Laen',
                'description' => 'Agak Laen adalah film Indonesia yang mengangkat cerita tentang kehidupan remaja dengan latar belakang sosial yang beragam.',
                'video_path' => 'videos/comedy1.mp4',
                'category_id' => 3
            ],
            [
                'title' => 'Conjuring 2',
                'description' => 'The Conjuring 2 (2016) adalah film horor yang disutradarai oleh James Wan dan merupakan kelanjutan dari The Conjuring (2013)',
                'video_path' => 'videos/horror1.mp4',
                'category_id' => 4
            ],
            [
                'title' => 'The Batman',
                'description' => 'Film ini mengikuti Bruce Wayne/Batman yang lebih muda dan berjuang untuk mengungkap misteri pembunuhan di Gotham City.',
                'video_path' => 'videos/action2.mp4',
                'category_id' => 1
            ],
            [
                'title' => 'Nanti Kita Cerita tentang Hari In',
                'description' => 'Film drama ini berkisah tentang kehidupan sebuah keluarga yang dihantui oleh rahasia-rahasia masa lalu yang akhirnya terungkap.',
                'video_path' => 'videos/drama2.mp4',
                'category_id' => 2
            ],
            [
                'title' => 'Generasi Micin vs Kevin',
                'description' => 'Komedi yang menceritakan pertemuan antara dua dunia berbeda, yakni generasi yang terbiasa dengan media sosial dan kehidupan digital.',
                'video_path' => 'videos/comedy2.mp4',
                'category_id' => 3
            ],
            [
                'title' => 'Munkar',
                'description' => ' Film horor yang mengikuti seorang wanita yang mencoba mengungkap misteri kematian saudaranya,yang ternyata terkait dengan kekuatan jahat yang mengancam kehidupannya.',
                'video_path' => 'videos/horror2.mp4',
                'category_id' => 4
            ],
            [
                'title' => 'Gunners',
                'description' => 'Film aksi yang menceritakan sekelompok tentara bayaran yang terlibat dalam konflik berbahaya untuk melindungi misi mereka, sementara menghadapi ancaman dari musuh yang sangat kuat.',
                'video_path' => 'videos/action3.mp4',
                'category_id' => 1
            ],
            [
                'title' => 'How to Make Millions Before Grandma Die',
                'description' => 'Sebuah drama komedi yang mengikuti seorang pemuda yang berusaha mencari cara cepat untuk mendapatkan uang demi menyelesaikan masalah keuangan keluarganya sebelum neneknya meninggal.',
                'video_path' => 'videos/drama3.mp4',
                'category_id' => 2
            ],
            [
                'title' => 'Single 2',
                'description' => 'Sekuel dari film Single, yang mengikuti perjalanan Cinta dan hubungan percintaannya setelah melewati berbagai cobaan, dengan humor yang menghibur sepanjang cerita.',
                'video_path' => 'videos/comedy3.mp4',
                'category_id' => 3
            ],
            [
                'title' => 'The Unholy',
                'description' => 'Mengisahkan seorang wanita muda yang sembuh dari penyakit misterius, namun kemudian menjadi pusat perhatian dengan kemampuan paranormalnya. Sebuah fenomena yang diduga berasal dari kekuatan iblis.',
                'video_path' => 'videos/horror3.mp4',
                'category_id' => 4
            ],
            [
                'title' => 'Transformers: The Last Knight',
                'description' => 'Film kelima dalam seri Transformers, yang melibatkan perang antara Autobots dan Decepticons.',
                'video_path' => 'videos/action4.mp4',
                'category_id' => 1
            ],
            [
                'title' => 'Miracle in Cell No. 7:',
                'description' => 'Drama yang menyentuh tentang seorang pria dengan keterbelakangan mental yang dijebloskan ke penjara karena tuduhan palsu, dan perjuangannya untuk membuktikan dirinya tidak bersalah demi anaknya.',
                'video_path' => 'videos/drama4.mp4',
                'category_id' => 2
            ],
            [
                'title' => 'Cek Toko Sebelah 2',
                'description' => 'Lanjutan dari film Cek Toko Sebelah, di mana konflik keluarga semakin rumit, terutama terkait dengan toko yang diwariskan, dengan banyak situasi komedi yang lucu.',
                'video_path' => 'videos/comedy4.mp4',
                'category_id' => 3
            ],
            [
                'title' => 'Sekawan Limo',
                'description' => 'Kelompok lima sahabat terjebak dalam situasi horor ketika mereka melakukan perjalanan ke sebuah tempat terpencil, di mana kejadian-kejadian misterius mulai terjadi, menantang keberanian mereka.',
                'video_path' => 'videos/horror4.mp4',
                'category_id' => 4
            ],
            [
                'title' => 'Bad Boys for Life',
                'description' => 'Mike Lowrey dan Marcus Burnett kembali bersama untuk menghadapi ancaman baru, kali ini melawan sindikat kriminal yang dipimpin oleh seorang wanita yang punya dendam pribadi terhadap mereka.',
                'video_path' => 'videos/action5.mp4',
                'category_id' => 1
            ],
            [
                'title' => 'You Are the Apple of My Eye',
                'description' => 'Sebuah kisah cinta remaja yang penuh emosi, tentang hubungan yang tumbuh antara seorang pemuda dan gadis yang ia cintai, serta berbagai kenangan masa muda yang tak terlupakan.',
                'video_path' => 'videos/drama5.mp4',
                'category_id' => 2
            ],
            [
                'title' => 'Modal Nekad',
                'description' => 'Film komedi yang mengikuti kisah seorang pemuda yang penuh semangat meski tanpa modal, namun berusaha mengejar impian dengan cara yang kadang konyol dan lucu.',
                'video_path' => 'videos/comedy5.mp4',
                'category_id' => 3
            ],
            [
                'title' => 'Exhuma',
                'description' => 'Film horor yang menceritakan sebuah rumah sakit yang memiliki sejarah kelam dan kejadian-kejadian menyeramkan yang dialami oleh para pasien dan staf yang terlibat dalam ekskavasi misterius.',
                'video_path' => 'videos/horror5.mp4',
                'category_id' => 4
            ],

        ]);
    }
}

