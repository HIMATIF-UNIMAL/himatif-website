<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('home', [
        'title' => 'Home'
    ]);
});

Route::get('/sejarah', function () {
    return view('sejarah', [
        'title' => 'Sejarah',
        'content' => '
            <p>Himpunan Mahasiswa Teknik Informatika (HIMATIF) merupakan sebuah organisai kampus di tingkat Program Studi Teknik Informatika.  HIMATIF didirikan pada hari selasa tanggal 2 Mei 2005. HIMATIF berkedudukan di Jurusan Teknik Informatika Universitas Malikussaleh, Lhokseumawe.</p>
                <p>HIMATIF didirikan dengan prinsip Disiplin, Keujangan, Kreatifitas, Keadilan, Kebersamaan, Kekeluargaan, Kerakyatan, Keilmuan dan Tolenransi.</p>
                <p><strong>Tujuan HIMATIF</strong> adalah menampung seluruh element mahasiswa Jurusan Teknik Informatika Fakultas Teknik Universitas Malikussaleh, Lhokseumawe menuju kehidupan kampus kritis yang bertanggung jawab, dinamin, demokratis dan harmonis.</p>
                <h2 class="judul pt-4">
                    Fungsi HIMATIF
                </h2>                      
                <ol>
                    <li>Sebagai wdah dan sarana untuk menampung dan memperjuangkan aspirasi seluruh elemen mahasiswa Jurusan Teknik Informatika Fakultas Teknik Universitas Malikussaleh, Lhokseumawe.</li>
                    <li>Meningkatkan koordinasi dan kerjasama antara Organisasi Kemahasiswaan di lingkungan Universitas Malikussaleh, Lhokseumawe dan di luar Universitas Malikussaleh, Lhokseumawe.</li>
                    <li>Sebagai wahana dalam melaksanakan kegiatan ekstrakurikuler yang bersifat penalaran dan keilmuan, pengembangan minat dan bakat, pengabdian kepada masyarakat serta berupaya untuk meningkatkan kesejahteraan mahasiswa dalam lingkup kegidupan kampus.</li>
                    <li>Mejalin hubungan dengan Organisasi Sosial/Kemasyarakatan, Profesi/Fungsional, dan Perhimpunan untuk mengembangkan organisasi di dalam maupun di luar lingkungan Universitas Malikussaleh.</li>
                    <li>Sebagai wadah untuk menumbuhkan dan meningkatkan profesionaisme mahasiswa Jurusan Teknik Informatika Fakultas Teknik Universitas Malikussaleh, Lhokseumawe dalam kehidupan ilmiah dan bermasyarakat.</li>
                    <li>Sebagai wadah pengembangan pola pikir dan pola tindak terorganisir.</li><li>Turut mengangkat harkat dan mertabat almamater Universitas Malikussaleh, Lhokseumawe pada umumnya dan Jurusan Teknik Informatika pada khususnya.</li>
                </ol>
            '
    ]);
});

Route::get('/divisi', function () {
    return view('divisi', [
        'title' => 'Divisi'
    ]);
});

Route::get('/blog', function () {
    return view('posts', [
        'title' => 'Blog',
    ]);
});

Route::get('/toko', function () {
    return view('toko', [
        'title' => 'Toko',
    ]);
});

Route::get('/events', function () {
    return view('events', [
        'title' => 'Events',
    ]);
});

Route::get('/prestasi', function () {
    return view('prestasi', [
        'title' => 'Prestasi',
    ]);
});

Route::get('/galeri', function () {
    return view('galeri', [
        'title' => 'Galeri',
    ]);
});
