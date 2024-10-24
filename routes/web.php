<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('pages.home', [
        'title' => 'Home',
    ]);
});

Route::get('/about', function () {
    return view('pages.about', [
        'title' => 'About',
    ]);
});

Route::get('/report', function () {
    return view('pages.report', [
        'title' => 'Report',
    ]);
});

// Aktivitas/Beritas
// Activity
Route::get('/activity', function () {
    return view('pages.activity_pages.activity', [
        'title' => 'Kegiatan',
        'activities' => [
            [
                'image' => 'kegiatan1.jpg',
                'title' => 'Program Pendidikan Daerah Terpencil',
                'description' => 'Kegiatan ini bertujuan untuk meningkatkan pendidikan di daerah terpencil dengan sesi pembelajaran dan materi pendidikan untuk anak-anak.',
            ],
            [
                'image' => 'kegiatan2.jpg',
                'title' => 'Pengembangan Keterampilan Sosial Anak',
                'description' => 'Fokus pada pengembangan keterampilan sosial anak-anak melalui permainan dan aktivitas interaktif yang meningkatkan kerja sama dan komunikasi.',
            ],
            [
                'image' => 'kegiatan3.jpg',
                'title' => 'Edukasi Lingkungan',
                'description' => 'Kegiatan ini mengedukasi anak-anak tentang pentingnya menjaga lingkungan dengan penanaman pohon dan seminar tentang perlunya menjaga alam.',
            ],
            [
                'image' => 'kegiatan4.jpg',
                'title' => 'Bakti Sosial Masyarakat',
                'description' => 'Acara bakti sosial yang melibatkan masyarakat dengan menyediakan makanan dan perlengkapan sekolah untuk anak-anak kurang mampu.',
            ],
            [
                'image' => 'kegiatan5.jpg',
                'title' => 'Pelatihan Keterampilan untuk Remaja',
                'description' => 'Workshop tentang kewirausahaan dan pengembangan diri untuk memberikan keterampilan kepada remaja.',
            ],
            [
                'image' => 'kegiatan6.jpg',
                'title' => 'Kompetisi Olahraga Anak',
                'description' => 'Program olahraga yang mengajak anak-anak untuk aktif berolahraga dengan berbagai kompetisi untuk meningkatkan kesehatan dan kebugaran.',
            ],
            [
                'image' => 'kegiatan7.jpg',
                'title' => 'Kelas Seni untuk Anak',
                'description' => 'Kegiatan yang mengajak anak-anak untuk berkreasi melalui seni dengan kelas menggambar dan melukis untuk menyalurkan bakat mereka.',
            ],
            [
                'image' => 'kegiatan8.jpg',
                'title' => 'Program Literasi Anak',
                'description' => 'Program yang bertujuan meningkatkan minat baca anak-anak dengan mendirikan perpustakaan kecil dan mengadakan sesi membaca bersama.',
            ],
        ],
    ]);
});

// List video
Route::get('list-activity-videos', function () {
    return view('pages.activity_pages.listActivityVideos', [
        'title' => 'List Activity Videos',
    ]);
});

Route::get('/video-detail', function () {
    return view('pages.activity_pages.videoDetail', [
        'title' => 'Detail Video',
    ]);
});

// Kegiatan yagn sedang berjalan
Route::get('/list-ongoing-activities', function () {
    return view('pages.activity_pages.listActivities', [
        'title' => 'List Ongoing Activities',
        'activity' => 'Ongoing',
    ]);
});

Route::get('/ongoing-activity-detail', function () {
    return view('pages.activity_pages.activityDetail', [
        'title' => 'Ongoing Activity Detail',
    ]);
});
// Kegiatan yang akan datang
Route::get('/list-upcoming-activities', function () {
    return view('pages.activity_pages.listActivities', [
        'title' => 'Upcoming Activity Detail',
        'activity' => 'Upcoming',
    ]);
});
Route::get('/upcoming-activity-detail', function () {
    return view('pages.activity_pages.activityDetail', [
        'title' => 'Upcoming Activity Detail',
    ]);
});

// Profil
Route::get('/profile', function () {
    return view('pages.activity_pages.profile.index', [
        'title' => 'Profile',
    ]);
});
// Untuk koordinator detail
Route::get('/profile-coordinator-detail', function () {
    return view('pages.activity_pages.profile.profileDetail', [
        'title' => 'Profile Detail',
        'role' => 'coordinator',
    ]);
});
// Guru asuh detail
Route::get('/profile-teacher-detail', function () {
    return view('pages.activity_pages.profile.profileDetail', [
        'title' => 'Profile Detail',
        'role' => 'teacher',
    ]);
});

// SMB
Route::get('/smb', function () {
    return view('pages.activity_pages.smb.index', [
        'title' => 'SMB Kalbar',
    ]);
});

// Artikel
Route::get('/article', function () {
    return view('pages.artikel_pages.index', [
        'title' => 'Article',
    ]);
});

// List Literasi
Route::get('/list-literacy', function () {
    return view('pages.artikel_pages.listLiteracy', [
        'title' => 'Literacy',
    ]);
});

// List Artikel Dhamma
Route::get('/list-article-dhamma', function () {
    return view('pages.artikel_pages.listArticleDhamma', [
        'title' => 'Article Dhamma',
    ]);
});

// List video dhamma
Route::get('/list-videos-dhamma', function () {
    return view('pages.artikel_pages.listVideosDhamma', [
        'title' => 'Video Dhamma',
    ]);
});

// video dhamma detail
Route::get('/video-detail-dhamma', function () {
    return view('pages.artikel_pages.videoDetailDhamma', [
        'title' => 'Detail Video Dhamma',
    ]);
});

// Program
Route::get('/program', function () {
    return view('pages.program_pages.index', [
        'title' => 'Program',
        'donasiBerjalan' => ['1.jpg', '2.jpg', '3.jpg'],
        'donasiAkanDatang' => ['1.jpg', '2.jpg', '3.jpg'],
        'donasiSelesai' => ['1.jpg', '2.jpg', '3.jpg', '4.jpg'],
    ]);
});

// donasi
Route::get('/program', function () {
    return view('pages.program_pages.index', [
        'title' => 'Program',
        'donasiBerjalan' => ['1.jpg', '2.jpg', '3.jpg'],
        'donasiAkanDatang' => ['1.jpg', '2.jpg', '3.jpg'],
        'donasiSelesai' => ['1.jpg', '2.jpg', '3.jpg', '4.jpg'],
    ]);
});
Route::get('/donate', function () {
    return view('pages.program_pages.donate', [
        'title' => 'Donate Program',
        'donasiBerjalan' => ['1.jpg', '2.jpg', '3.jpg'],
    ]);
});

// Sinmpan local ke session
Route::get('/locale/{locale}', function ($locale) {
    if (in_array($locale, ['en', 'id', 'ch'])) {
        session(['app_locale' => $locale]);
    }
    return redirect()->back();
})->name('locale');
