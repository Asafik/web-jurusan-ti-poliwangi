<?php

namespace Database\Seeders;

use App\Models\Event;
use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class EventSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Event::insert([
            [
                'user_id' => 1,
                'title' => 'PENDAFTARAN JALUR MANDIRI S2MB 2023',
                'thumbnail' => 'mandiri.jpg',
                'summary' => 'Seleksi Jalur Mandiri Politeknik Negeri Banyuwangi 2023',
                'content' => '
<p>Seleksi Siswa Mandiri Berprestasi (S2MB) yang diselenggarakan secara mandiri oleh Politeknik Negeri Banyuwangi untuk program S1 Terapan dan Diploma 3. Seleksi ini bertujuan menjaring calon mahasiswa yang memiliki prestasi baik akademik maupun non akademik. Pemberkasan secara online melalui laman https://pmb.poliwangi.ac.id/register-maba mulai tanggal 15 Mei 2023 sampai dengan 20 Juni 2023 pukul 23.59 WIB.</p>
<p>Daftar Program Studi yang dapat dipilih di Politeknik Negeri Banyuwangi:</p>
        <ol>jURUSAN D-III 
          <li>D3 Teknik Sipil</li>
        <ol>
        <ol>Jurusan D-IV</li>
        <li>D4 Teknik Rekayasa Manufaktur</li>
        <li>D4 Teknik Manufaktur Kapal</li>
        <li>D4 Teknik Pengolahan Hasil Ternak</li>
        <li>D4 Agribisnis</li>
        <li>D4 Manajemen Bisnis Pariwisata</li>
        </ol>
        <ol>Jurusan Teknik Informatika
        <li>D4 Teknik Rekayasa Perangkat Lunak</li>
        <li>D4 Teknik Rekayasa Komputer</li>
        <li>D4 Bisnis Digital</li>
        </ol>
<p><br>Untuk informasi lebih lanjut dapat menghubungi :

    +62 822-3496-1258 – Adi</p>',
                'date_start' => '2023-05-15',
                'date_end' => '2023-06-20',
                'slug' => 's2mb-2023',
                'attachment' => 'file.pdf',
                'is_publish' => true,
                'published_at' => Carbon::now(),
                'publisher_id' => 1,
            ],
            [
                'user_id' => 1,
                'title' => 'PELATIHAN DAN SERTIFIKASI VSGA KOMINFO 2023',
                'thumbnail' => 'vsga.jpg',
                'summary' => 'Pelatihan dan Sertifikasi VSGA 2023',
                'content' => '
<p>Program Vocational School Graduate Academy (VSGA) merupakan program pelatihan dan sertifikasi berbasis kompetensi nasional yang ditujukan bagi lulusan SMK/sederajat serta Diploma 3 dan 4 yang belum bekerja dan memiliki latar belakang pendidikan di bidang Science, Technology, Engineering, dan Math (STEM). Program VSGA terdiri dari Pelatihan dan Sertifikasi yang diselenggarakan secara luring dan daring.</p>
<p><br>Untuk Informasi Pendaftaran dan Persyaratan silahkan akses via: https://digitalent.kominfo.go.id/akademi/VSGA</p>',
                'date_start' => '2023-04-01',
                'date_end' => '2023-06-12',
                'slug' => 'vsga-2023',
                'attachment' => 'file.pdf',
                'is_publish' => true,
                'published_at' => Carbon::now(),
                'publisher_id' => 1,
            ],
            [
                'user_id' => 1,
                'title' => 'MSIB Bangkit 2023 Batch 2',
                'thumbnail' => 'bangkit.jpeg',
                'summary' => 'Bangkit Academy 2023 By Google, GoTo, Traveloka',
                'content' => '
<p><br>Untuk Informasi Lebih Lanjut terkait Pendaftaran dan Persyaratan silahkan akses via: https://kampusmerdeka.kemdikbud.go.id/program/studi-independen/</p>',
                'date_start' => '2023-04-01',
                'date_end' => '2023-06-07',
                'slug' => 'bangkit-2023',
                'attachment' => 'file.pdf',
                'is_publish' => true,
                'published_at' => Carbon::now(),
                'publisher_id' => 1,
            ]
        ]);
    }
}
