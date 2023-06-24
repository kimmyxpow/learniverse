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
            ],
            [
                "title" => "Pengenalan Komputer",
                "subject" => "Informatika",
                "level" => "SD",
                "content" => "<h2>Pengenalan Komputer</h2><p>Pengenalan Komputer memberikan pemahaman dasar tentang komputer dan teknologi informasi. Materi mencakup perangkat keras, perangkat lunak, jaringan komputer, dan penggunaan komputer dalam kehidupan sehari-hari.</p>",
                'created_at' => now()
            ],
            [
                "title" => "Dasar-Dasar Pemrograman",
                "subject" => "Informatika",
                "level" => "SD",
                "content" => "<h2>Dasar-Dasar Pemrograman</h2><p>Dasar-Dasar Pemrograman mengenalkan konsep-konsep dasar pemrograman komputer melalui pemrograman visual. Materi mencakup algoritma, logika pemrograman, penggunaan blok-blok pemrograman, dan pembuatan program sederhana.</p>",
                'created_at' => now()
            ],
            [
                "title" => "Web Development",
                "subject" => "Informatika",
                "level" => "Kuliah",
                "content" => "<h2>Web Development</h2><p>Web Development membahas pengembangan aplikasi web. Materi mencakup HTML, CSS, JavaScript, penggunaan framework web, interaksi dengan basis data, dan konsep keamanan dalam pengembangan aplikasi web.</p>",
                'created_at' => now()
            ],
            [
                "title" => "Data Science",
                "subject" => "Informatika",
                "level" => "Kuliah",
                "content" => "<h2>Data Science</h2><p>Data Science mempelajari pengolahan, analisis, dan pemodelan data untuk mendapatkan wawasan dan informasi yang berharga. Materi mencakup penggunaan bahasa pemrograman seperti Python, teknik pengolahan data, eksplorasi data, dan pembuatan model prediktif.</p>",
                'created_at' => now()
            ],
            [
                "title" => "Keamanan Informasi",
                "subject" => "Informatika",
                "level" => "SMA",
                "content" => "<h2>Keamanan Informasi</h2><p>Keamanan Informasi membahas perlindungan dan pengamanan sistem informasi. Materi mencakup kebijakan keamanan, enkripsi, pengelolaan risiko, serangan keamanan, dan praktik pengamanan dalam lingkungan komputer dan jaringan.</p>",
                'created_at' => now()
            ],
            [
                "title" => "Algoritma dan Pemrograman Lanjut",
                "subject" => "Informatika",
                "level" => "Kuliah",
                "content" => "<h2>Algoritma dan Pemrograman Lanjut</h2><p>Algoritma dan Pemrograman Lanjut membahas desain dan analisis algoritma yang lebih kompleks serta pemrograman dalam bahasa tingkat tinggi. Materi mencakup pemrograman dinamis, algoritma pencarian dan pengurutan lanjutan, teknik pemrograman objek, dan kompleksitas algoritma.</p>",
                'created_at' => now()
            ],
            [
                "title" => "Artificial Intelligence",
                "subject" => "Informatika",
                "level" => "Kuliah",
                "content" => "<h2>Artificial Intelligence</h2><p>Artificial Intelligence (AI) adalah bidang dalam ilmu komputer yang berfokus pada pengembangan sistem yang dapat melakukan tugas-tugas yang membutuhkan kecerdasan manusia. AI memungkinkan komputer untuk belajar dari data, merencanakan dan melakukan tindakan, serta mengenali pola-pola kompleks.</p><p>Materi dalam Artificial Intelligence mencakup berbagai konsep dan teknik, antara lain:</p><ul><li><strong>Machine Learning:</strong> Machine Learning adalah metode yang memungkinkan komputer untuk belajar dari data tanpa secara eksplisit diprogram. Algoritma Machine Learning digunakan untuk membuat model yang dapat melakukan prediksi, pengenalan pola, dan pengambilan keputusan berdasarkan data yang diberikan.</li><li><strong>Neural Network:</strong> Neural Network adalah model matematika yang terinspirasi oleh struktur dan fungsi otak manusia. Neural Network digunakan untuk memodelkan dan mempelajari pola-pola kompleks dalam data dengan menggunakan jaringan neuron buatan.</li><li><strong>Logika Fuzzy:</strong> Logika Fuzzy adalah alat yang digunakan untuk mengatasi ketidakpastian dan keambiguan dalam pengambilan keputusan. Logika Fuzzy memungkinkan penyebaran nilai kebenaran yang sebagian dalam rentang nilai tertentu.</li><li><strong>Natural Language Processing (NLP):</strong> NLP adalah cabang AI yang berfokus pada pemahaman dan penggunaan bahasa manusia oleh komputer. NLP digunakan untuk memungkinkan komputer berinteraksi dengan manusia melalui bahasa alami, serta melakukan pemrosesan teks dan analisis sentiment.</li><li><strong>Computer Vision:</strong> Computer Vision mencakup teknik untuk memberikan kemampuan penglihatan kepada komputer. Dalam AI, komputer vision digunakan untuk memproses dan menganalisis gambar dan video, termasuk pengenalan objek, deteksi wajah, dan segmentasi citra.</li></ul><p>Artificial Intelligence memiliki aplikasi luas dalam berbagai bidang, seperti kendaraan otonom, pemrosesan bahasa alami, diagnosis medis, pengenalan suara, permainan komputer, dan banyak lagi. Pengembangan AI terus berkembang dengan kemajuan teknologi dan penelitian yang terus dilakukan.</p>",
                'created_at' => now()
            ],
            [
                "title" => "Mobile App Development",
                "subject" => "Informatika",
                "level" => "Kuliah",
                "content" => "<h2>Mobile App Development</h2><p>Mobile App Development membahas pengembangan aplikasi mobile untuk platform seperti Android dan iOS. Materi mencakup pemrograman mobile, desain antarmuka pengguna, penggunaan API, dan pengujian aplikasi mobile.</p>",
                'created_at' => now()
            ],
            [
                "title" => "Database Management",
                "subject" => "Informatika",
                "level" => "SMA",
                "content" => "<h2>Database Management</h2><p>Database Management membahas pengelolaan dan penggunaan basis data dalam aplikasi. Materi mencakup pemodelan basis data, desain skema database, bahasa query SQL, normalisasi, dan optimisasi kinerja basis data.</p>",
                'created_at' => now()
            ],
            [
                "title" => "Network Security",
                "subject" => "Informatika",
                "level" => "Kuliah",
                "content" => "<h2>Network Security</h2><p>Network Security membahas keamanan jaringan komputer dan sistem komunikasi. Materi mencakup teknik kriptografi, protokol keamanan, deteksi serangan, pengelolaan identitas, dan manajemen risiko keamanan.</p>",
                'created_at' => now()
            ]
        ]);
    }
}
