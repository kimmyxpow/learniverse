<?php

namespace Database\Seeders;

use App\Models\Subject;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SubjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Subject::insert([
            [
                'title' => 'Aljabar Dasar',
                'subject' => 'Matematika',
                'level' => 'SMA',
                'content' => '<h2>Aljabar Dasar</h2><p>Aljabar Dasar adalah pengenalan konsep dasar aljabar pada tingkat Sekolah Menengah Atas (SMA). Materi mencakup operasi hitung, persamaan linear, faktorisasi, dan penyelesaian masalah aljabar sederhana.</p>',
                'created_at' => now()
            ],
            [
                'title' => 'Trigonometri Dasar',
                'subject' => 'Matematika',
                'level' => 'SMA',
                'content' => '<h2>Trigonometri Dasar</h2><p>Trigonometri Dasar adalah pengenalan fungsi trigonometri, hubungan antara sudut dan sisi dalam segitiga, serta pemecahan masalah trigonometri sederhana. Materi ini diajarkan di tingkat Sekolah Menengah Atas (SMA).</p>',
                'created_at' => now()
            ],
            [
                'title' => 'Bangun Datar',
                'subject' => 'Matematika',
                'level' => 'SD',
                'content' => '<h2>Bangun Datar</h2><p>Bangun Datar adalah pengenalan berbagai jenis bangun datar seperti segitiga, persegi, persegi panjang, lingkaran, dan sebagainya. Materi ini diajarkan di tingkat Sekolah Dasar (SD) dan mencakup pengenalan sifat-sifat dan perhitungan dasar bangun datar.</p>',
                'created_at' => now()
            ],
            [
                'title' => 'Mekanika',
                'subject' => 'Fisika',
                'level' => 'SMA',
                'content' => '<h2>Mekanika</h2><p>Mekanika adalah cabang fisika yang mempelajari gerak benda dan penyebabnya. Materi mencakup hukum Newton, gaya, gerak lurus, gerak melingkar, dan energi kinetik dan potensial.</p>',
                'created_at' => now()
            ],
            [
                'title' => 'Termodinamika',
                'subject' => 'Fisika',
                'level' => 'SMA',
                'content' => '<h2>Termodinamika</h2><p>Termodinamika adalah cabang fisika yang mempelajari perubahan energi, panas, dan kerja. Materi mencakup hukum termodinamika, sistem termodinamika, entropi, dan siklus termodinamika.</p>',
                'created_at' => now()
            ],
            [
                'title' => 'Optika',
                'subject' => 'Fisika',
                'level' => 'SMA',
                'content' => '<h2>Optika</h2><p>Optika adalah cabang fisika yang mempelajari cahaya dan fenomena yang terkait. Materi mencakup pembiasan cahaya, pemantulan cahaya, pembentukan gambar, dan sifat-sifat gelombang cahaya.</p>',
                'created_at' => now()
            ],
            [
                'title' => 'Listrik dan Magnet',
                'subject' => 'Fisika',
                'level' => 'SMA',
                'content' => '<h2>Listrik dan Magnet</h2><p>Listrik dan Magnet adalah cabang fisika yang mempelajari fenomena listrik dan magnetik. Materi mencakup hukum Coulomb, medan listrik, medan magnet, induksi elektromagnetik, dan aplikasinya dalam transformator dan generator.</p>',
                'created_at' => now()
            ],
            [
                'title' => 'Pengantar Sosiologi',
                'subject' => 'Sosiologi',
                'level' => 'SMA',
                'content' => '<h2>Pengantar Sosiologi</h2><p>Pengantar Sosiologi merupakan pengenalan konsep dasar dalam ilmu sosiologi. Materi mencakup pengertian sosiologi, teori-teori sosiologi, metode penelitian sosiologi, dan penerapan sosiologi dalam kehidupan sehari-hari.</p>',
                'created_at' => now()
            ],
            [
                'title' => 'Sosiologi Keluarga',
                'subject' => 'Sosiologi',
                'level' => 'SMA',
                'content' => '<h2>Sosiologi Keluarga</h2><p>Sosiologi Keluarga mempelajari struktur keluarga, fungsi keluarga, dinamika hubungan keluarga, dan perubahan-perubahan sosial yang terjadi dalam keluarga. Materi juga mencakup peran keluarga dalam masyarakat dan perkembangan keluarga di era modern.</p>',
                'created_at' => now()
            ],
            [
                'title' => 'Sosiologi Pendidikan',
                'subject' => 'Sosiologi',
                'level' => 'SMA',
                'content' => '<h2>Sosiologi Pendidikan</h2><p>Sosiologi Pendidikan mempelajari hubungan antara pendidikan dan masyarakat. Materi mencakup peran pendidikan dalam sosialisasi, struktur pendidikan, peran guru dan siswa, serta masalah-masalah sosial yang terkait dengan pendidikan.</p>',
                'created_at' => now()
            ],
            [
                'title' => 'Sosiologi Politik',
                'subject' => 'Sosiologi',
                'level' => 'SMA',
                'content' => '<h2>Sosiologi Politik</h2><p>Sosiologi Politik mempelajari hubungan antara politik dan masyarakat. Materi mencakup teori-teori politik, institusi politik, partisipasi politik, gerakan sosial, dan konflik sosial dalam konteks politik.</p>',
                'created_at' => now()
            ],
            [
                'title' => 'Prinsip Ekonomi',
                'subject' => 'Ekonomi',
                'level' => 'SMA',
                'content' => '<h2>Prinsip Ekonomi</h2><p>Prinsip Ekonomi mempelajari konsep dasar ekonomi seperti permintaan, penawaran, harga, dan alokasi sumber daya. Materi juga mencakup sistem ekonomi, kebijakan ekonomi, dan peran pemerintah dalam ekonomi.</p>',
                'created_at' => now()
            ],
            [
                'title' => 'Mikroekonomi',
                'subject' => 'Ekonomi',
                'level' => 'SMA',
                'content' => '<h2>Mikroekonomi</h2><p>Mikroekonomi mempelajari perilaku ekonomi individu, perusahaan, dan pasar. Materi mencakup teori permintaan, teori produksi, struktur pasar, elastisitas, dan efisiensi ekonomi.</p>',
                'created_at' => now()
            ],
            [
                'title' => 'Makroekonomi',
                'subject' => 'Ekonomi',
                'level' => 'SMA',
                'content' => '<h2>Makroekonomi</h2><p>Makroekonomi mempelajari ekonomi secara keseluruhan, termasuk pertumbuhan ekonomi, inflasi, pengangguran, dan kebijakan fiskal dan moneter. Materi juga mencakup neraca pembayaran, kebijakan ekonomi makro, dan indikator ekonomi.</p>',
                'created_at' => now()
            ],
            [
                'title' => 'Ekonomi Global',
                'subject' => 'Ekonomi',
                'level' => 'SMA',
                'content' => '<h2>Ekonomi Global</h2><p>Ekonomi Global mempelajari hubungan ekonomi antara negara-negara di dunia. Materi mencakup perdagangan internasional, keuangan internasional, organisasi perdagangan dunia, dan isu-isu ekonomi global saat ini.</p>',
                'created_at' => now()
            ],
            [
                'title' => 'Pemrograman Dasar',
                'subject' => 'Informatika',
                'level' => 'SMA',
                'content' => '<h2>Pemrograman Dasar</h2><p>Pemrograman Dasar mempelajari konsep dasar pemrograman komputer menggunakan bahasa pemrograman tertentu. Materi mencakup struktur kontrol, tipe data, variabel, fungsi, dan pengembangan algoritma sederhana.</p>',
                'created_at' => now()
            ],
            [
                'title' => 'Pemrograman Lanjutan',
                'subject' => 'Informatika',
                'level' => 'Kuliah',
                'content' => '<h2>Pemrograman Lanjutan</h2><p>Pemrograman Lanjutan melanjutkan konsep dan teknik pemrograman yang telah dipelajari sebelumnya. Materi mencakup pemrograman berorientasi objek, penggunaan library dan framework, manajemen memori, dan pengembangan aplikasi yang lebih kompleks.</p>',
                'created_at' => now()
            ],
            [
                'title' => 'Struktur Data dan Algoritma',
                'subject' => 'Informatika',
                'level' => 'Kuliah',
                'content' => '<h2>Struktur Data dan Algoritma</h2><p>Struktur Data dan Algoritma membahas berbagai struktur data dan teknik algoritma untuk pengolahan dan penyimpanan data secara efisien. Materi mencakup array, linked list, stack, queue, pohon, algoritma pengurutan, dan pencarian data.</p>',
                'created_at' => now()
            ],
            [
                'title' => 'Basis Data',
                'subject' => 'Informatika',
                'level' => 'SMA',
                'content' => '<h2>Basis Data</h2><p>Basis Data mempelajari konsep dan teknik pengelolaan data dalam skala besar. Materi mencakup desain basis data, bahasa query, normalisasi, pengindeksan, dan keamanan data.</p>',
                'created_at' => now()
            ],
            [
                'title' => 'Sistem Operasi',
                'subject' => 'Informatika',
                'level' => 'Kuliah',
                'content' => '<h2>Sistem Operasi</h2><p>Sistem Operasi mempelajari prinsip, struktur, dan fungsi dari sistem operasi pada komputer. Materi mencakup manajemen proses, manajemen memori, manajemen file, jaringan komputer, dan keamanan sistem.</p>',
                'created_at' => now()
            ]
        ]);
    }
}
