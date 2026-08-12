<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LandingPageController extends Controller
{
    /**
     * Menampilkan halaman utama (landing page) sekolah.
     */
    public function index()
    {
        $schoolName  = 'SMK Muhammadiyah Kandanghaur';
        $schoolShort = 'SMK MUHAMMADIYAH KANDANGHAUR';
        $tagline     = 'Bergerak Maju Menjadi yang Terdepan';
        $schoolLogo  = 'assets/img/logo.png';

        $spmbUrl     = 'https://spmb.smkmuhkandanghaur.sch.id/';
        $tracerUrl   = '/tracer';
        $whatsapp    = '081122207770';
        $whatsappUrl = 'https://wa.me/6281122207770';

        $website     = 'https://www.smkmuhkandanghaur.sch.id/';
        $instagram   = 'https://instagram.com/smkmuhkandanghaur';
        $address     = 'Jl. Raya Kandanghaur No. 28/A Karanganyar, Kandanghaur, Indramayu, Jawa Barat 45254';
        $email       = 'info@smkmuhkandanghaur.sch.id';
        $year        = date('Y');

        // Program Keahlian
        $programs = [
            [
                'code'        => 'TPL',
                'title'       => 'Teknik Pengelasan',
                'short'       => 'TPL',
                'description' => 'Membekali siswa dengan keterampilan teknik pengelasan untuk kebutuhan industri manufaktur dan konstruksi.',
                'image'       => 'assets/img/tpl.png'
            ],
            [
                'code'        => 'TEI',
                'title'       => 'Teknik Elektronika Industri',
                'short'       => 'TEI',
                'description' => 'Mempelajari elektronika, sistem kontrol, instalasi, otomasi, dan teknologi industri.',
                'image'       => 'assets/img/tei.png'
            ],
            [
                'code'        => 'TKR',
                'title'       => 'Teknik Kendaraan Ringan',
                'short'       => 'TKR',
                'description' => 'Mempelajari perawatan, perbaikan, diagnosis, dan teknologi kendaraan ringan.',
                'image'       => 'assets/img/tkr.png'
            ],
            [
                'code'        => 'TKJ',
                'title'       => 'Teknik Komputer & Jaringan',
                'short'       => 'TKJ',
                'description' => 'Mempelajari komputer, jaringan, server, keamanan jaringan, dan teknologi informasi.',
                'image'       => 'assets/img/tkj.png'
            ],
            [
                'code'        => 'TSM',
                'title'       => 'Teknik Sepeda Motor',
                'short'       => 'TSM',
                'description' => 'Membekali siswa dengan kompetensi perawatan dan perbaikan kendaraan sepeda motor.',
                'image'       => 'assets/img/tsm.png'
            ],
            [
                'code'        => 'LPKKK',
                'title'       => 'Layanan Penunjang Kefarmasian Klinis & Komunitas',
                'short'       => 'LPKKK',
                'description' => 'Mempelajari layanan penunjang kefarmasian untuk kebutuhan klinis dan komunitas.',
                'image'       => 'assets/img/lpkkk.png'
            ]
        ];

        // Core Values
        $coreValues = [
            [
                'number' => '01',
                'title'  => 'TAQWA',
                'text'   => 'Mengutamakan nilai ketaatan, kejujuran, persatuan, kekeluargaan, dan keterbukaan.'
            ],
            [
                'number' => '02',
                'title'  => 'EFISIEN',
                'text'   => 'Bekerja produktif dan cekatan untuk mencapai hasil yang terukur.'
            ],
            [
                'number' => '03',
                'title'  => 'RESPONSIBEL',
                'text'   => 'Melaksanakan tugas dan kewajiban dengan baik dan bertanggung jawab.'
            ],
            [
                'number' => '04',
                'title'  => 'DEDIKASI',
                'text'   => 'Berpegang teguh pada nilai-nilai Kemuhammadiyahan dalam pengabdian.'
            ],
            [
                'number' => '05',
                'title'  => 'EXCELLENT',
                'text'   => 'Senantiasa mengejar dan menggapai keunggulan dalam perkembangan IPTEK.'
            ],
            [
                'number' => '06',
                'title'  => 'PROAKTIF',
                'text'   => 'Menyelaraskan kurikulum dengan kebutuhan industri dan dunia kerja.'
            ],
            [
                'number' => '07',
                'title'  => 'AKUNTABEL',
                'text'   => 'Bertanggung jawab kepada seluruh pemangku kepentingan.'
            ],
            [
                'number' => '08',
                'title'  => 'NYAMAN',
                'text'   => 'Mewujudkan lingkungan sekolah yang nyaman dan kondusif.'
            ]
        ];

        // Fasilitas
        $facilities = [
            [
                'title' => 'Masjid',
                'text'  => 'Masjid yang nyaman untuk kegiatan ibadah dan pengembangan spiritual siswa.',
                'image' => 'assets/img/masjid.png'
            ],
            [
                'title' => 'Perpustakaan',
                'text'  => 'Perpustakaan yang lengkap dengan buku-buku referensi dan ruang belajar yang nyaman.',
                'image' => 'assets/img/perpustakaan.png'
            ],
            [
                'title' => 'RPS TKR',
                'text'  => 'Fasilitas praktik untuk siswa Teknik Kendaraan Ringan dengan peralatan modern.',
                'image' => 'assets/img/rps-tkr.png'
            ],
            [
                'title' => 'Auditorium',
                'text'  => 'Fasilitas untuk kegiatan perkuliahan dan acara penting.',
                'image' => 'assets/img/auditorium.png'
            ],
            [
                'title' => 'Lab Komputer',
                'text'  => 'Fasilitas untuk kegiatan praktik komputer yang lengkap.',
                'image' => 'assets/img/lab-komputer.png'
            ],
            [
                'title' => 'JPKS',
                'text'  => 'Fasilitas Kesehatan untuk mendukung kesehatan siswa dan staf.',
                'image' => 'assets/img/jpks.png'
            ]
        ];

        // Berita
        $news = [
            [
                'category' => 'PRESTASI',
                'date'     => '10 AGUSTUS 2026',
                'title'    => 'Upacara Peringatan Senin Pagi',
                'text'     => 'Siswa SMK Muhammadiyah Kandanghaur meraih prestasi dalam ajang lomba Paskibraka.',
                'image'    => 'assets/img/news1.webp'
            ],
            [
                'category' => 'KEGIATAN',
                'date'     => '22 OKTOBER 2025',
                'title'    => 'TES BKK',
                'text'     => 'Kegiatan psikotes yang diadakan oleh BKK SMK Muhammadiyah Kandanghaur untuk menilai kemampuan siswa dalam menghadapi dunia kerja.',
                'image'    => 'assets/img/news2.png'
            ],
            [
                'category' => 'SEKOLAH',
                'date'     => '22 OKTOBER 2025',
                'title'    => 'Sumatif Akhir Semester',
                'text'     => 'Kegiatan ujian sumatif akhir semester yang diadakan untuk menilai pencapaian siswa dalam pembelajaran.',
                'image'    => 'assets/img/news3.png'
            ]
        ];

        // Statistik
        $statistics = [
            [
                'number' => '1997',
                'label'  => 'Tahun Berdiri'
            ],
            [
                'number' => '6',
                'label'  => 'Konsentrasi Keahlian'
            ],
            [
                'number' => '25+',
                'label'  => 'Tahun Pengalaman'
            ],
            [
                'number' => '100%',
                'label'  => 'Komitmen Pendidikan'
            ]
        ];

        return view('welcome', compact(
            'schoolName',
            'schoolShort',
            'tagline',
            'schoolLogo',
            'spmbUrl',
            'tracerUrl',
            'whatsapp',
            'whatsappUrl',
            'website',
            'instagram',
            'address',
            'email',
            'year',
            'programs',
            'coreValues',
            'facilities',
            'news',
            'statistics'
        ));
    }
}
