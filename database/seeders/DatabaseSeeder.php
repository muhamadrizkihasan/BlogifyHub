<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Category;
use App\Models\Post;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        

    //    User::create([
    //         'name' => 'Shandika Galih',
    //         'username' => 'shandika-galih',
    //         'email' => 'shandikagalih@gmail.com',
    //         'password' => bcrypt('12345')
    //     ]);
    //     User::create([
    //         'name' => 'Zahid Ibrahim',
    //         'username' => 'zahid-ibrahim',
    //         'email' => 'zahidibrahim@gmail.com',
    //         'password' => bcrypt('54321')
    //     ]);
    //     User::create([
    //         'name' => 'Kresna Galuh',
    //         'username' => 'kresna-galuh',
    //         'email' => 'kresnagaluh@gmail.com',
    //         'password' => bcrypt('6789')
    //     ]);

        // Category::create([
        //     'name' => 'Web Programming',
        //     'slug' => 'web-programming'
        // ]);
        // Category::create([
        //     'name' => 'Programmer',
        //     'slug' => 'programmer'
        // ]);
        // Category::create([
        //     'name' => 'Belajar',
        //     'slug' => 'belajar'
        // ]);

        // Post::create([
        //     'title' => 'Tips Untuk Para Programmer Pemula',
        //     'slug' => 'tips-untuk-para-programmer-pemula',
        //     'excerpt' => 'Jika kebingungan bagaimana caranya memulai belajar pemrograman.Dan ini tips umum bagaimana caranya supaya bisa belajar pemrograman.',
        //     'body' => 'Jika kebingungan bagaimana caranya memulai belajar pemrograman.Dan ini tips umum bagaimana caranya supaya bisa belajar pemrograman:<br>1.Mengerti Apa Itu Programming<br>Untuk menjadi seorang programmer itu harus bisa programming tapi masih banyak banyak yang tidak tahu programming itu apa.Makanya banyak yang kebingungan juga karena belum paham apa itu programming.Dalam hal apapun kalo kita ingin menguasai sesuatu kita harus tahu terlebih dahulu apa yang sedang kita pelajari.<br>2.Pilih Satu Bahasa Pemrograman<br>Misalnya seperti bahasa Indonesia jika kita mau belajar bahasa lainnya kita sudah punya bekal 1 bahasa.Karena ketika kita sudah menguasai 1 bahasa pemrograman kita akan punya gambaran secara umum.Memang mungkin setiap bahasa pemrograman itu punya aturan yang berbeda, syntax yang berbeda, pola yang berbeda.Jika kita sudah mahir satu bahasa pemrograman kita boleh berpindah ke bahasa lain.Karena bahasa pemrograman itu bukan agama yang harus dianut sampai mati, kita boleh berpindah-pindah bahasa pemrograman.<br>3.Segera Mulai!<br>Kebanyakan orang-orang yang baru masuk kebanyakan bertanya dan eksplorasi tetapi tidak mulai-mulai.<br>4.Berlatih dengan Membuat Program Sederhana<br>Kalian bisa membuat sebuah program yang bermanfaat karena programming itu sebenarnya tidak terbatas hanya untuk orang IT saja sebenarnya.Kita memulai dengan apa yang mudah saja, karena seiring kita berlatih skill kita akan naik, level kita akan meningkat.Kita harus berlatih tidak perlu nunggu diberi tugas oleh guru.<br>5.Selalu Update Informasi<br>Programming itu cabang dari teknologi.Teknologi itu adalah ilmu pengetahuan yang senantiasa berkembang dan sangat cepat sekali.Kalo kita tidak bisa mengikuti perkembangannya nanti kita akan tertinggal.Programmer adalah sebuah profesi yang senantiasa mengharuskan orang yang senantiasa belajar.Programmer adalah pembelajar sejati.<br>6.Bergabung Dengan Komunitas<br>Programming itu kadang-kadang kita belajar seperti sendirian belajar sendirian dirumah, ngulik di depan komputer.Kalo kita gak berkomunitas kita akan merasa sendirian dengan kita bergabung ke komunitas kita akan tahu bahwa ada teman-teman hal yang memiliki kesukaan yang sama dan memiliki kesusahan yang sama.Jadi mungkin saja dengan komunitas kita bisa belajar dengan mereka.',
        //     'category_id' => 2,
        //     'user_id' => 3
        // ]);
        // Post::create([
        //     'title' => '10 Chrome Extensions Untuk Web Designer Dan Web Developer',
        //     'slug' => '10-chrome-extensions-untuk-web-designer-dan-web-developer',
        //     'excerpt' => 'Berikut ini adalah rekomendasi 10 chrome extensions untuk web designer/wev developer:1.Buidwith Technology Profiler',
        //     'body' => 'Berikut ini adalah rekomendasi 10 chrome extensions untuk web designer/wev developer:<br>1.Buidwith Technology Profiler<br>2.Paint Tool - Maker For Chrome<br>3.CSS Preper<br>4.Stylebot<br>5.Kontrast - WCAG Contrast Checker<br>6.Mobile Simulator<br>7.Lighthouse<br>8.Lipsum Generator<br>9.Dark Reader<br>10.Placeholdifier<br>Jadi tadi itu adalah 10 extensions google chrome yang dapat di install untuk membantu kegiatan kita untuk membantu kegiatan web design/web developer.',
        //     'category_id' => '1',
        //     'user_id' => '1',
        // ]);
        // Post::create([
        //     'title' => 'Kesalahan Yang Menjadikanku Pemalas',
        //     'slug' => 'kesalahan-yang-menjadikanku-pemalas',
        //     'excerpt' => '3 kesalahan yang membuatku menjadi orang yang pemalas.Misalnya malas mengerajakan PR dan dalam keseharian pengennya hanya berbaring aja, hal ini disebabkan karena stres.',
        //     'body' => '3 kesalahan yang membuatku menjadi orang yang pemalas.Misalnya malas mengerajakan PR dan dalam keseharian pengennya hanya berbaring aja, hal ini disebabkan karena stres.Berikut cara-caranya:<br>1.Mengambil Terlalu Banyak Pekerjaan<br>kesalahan ini terdengar jelas tapi kenyataanya banyak dari kita yang gak tau sebenarnya ada apa aja diatas piring kita. Jika kita mengambil terlalu banyak pekerjaan jadinya kita akan malas ketika sedang di kelas dan pikirannya hanya ingin cepat-cepat libur saja.Berikut cara manage seberapa banyak tipe pekerjaan yang diambil<br>     Tips 1: Gunakan google calender<br>     Tips 2: Berani katakan tidak<br>2.Tekanan Yang Terlalu Tinggi<br>Hal ini biasanya terjadi pada orang yang dari kecil dianggap berprestasi, jadinya selalu ingin berada di standar yang bagus.Misalnya perfeksionis dengan pekerjaannya.Sering kita merasa terlalu gak pintar diantara teman-teman yang lain padahal situasi dan kondisi masing-masing orang berbeda.Misalnya ada orang benar-benar seneng banget belajar satu ilmu tapi menurut kita itu ilmu itu biasa-biasa saja.Jadi kita jangan membandingkan diri kta dengan orang itu.Kita tidak bisa punya semuanya dalam kehidupan ada hal yang harus dikorbankan dan kita harus manage ekspektasi dan mengurangi tekanan pada diri sendiri.<br>3.Tidak Mendengarkan Diri Sendiri<br>Kesalahan yang ketiga adalah tidak mendengarkan badan dan pikiran.Ini sering terjadi terutama kita membanggakan diri kita sebagai seorang yang selalu hadir dan selalu disiplin. Dan caranya adalah untuk mendengarkan badan dan pikiran kita, bertanya apakah kalo misalkan kita melakukan ini bisa membantu kita bertahan di waktu panjang.Misalnya kita bergadang untuk belajar, kita harus bertaya apakah bergadang ini worth it? alias kita bisa konsisten dalam jangka panjang/bergadang cuma untuk memuaskan ego kita supaya kita merasa menjadi orang yang disiplin.Yang pada akhirnya kita lakukan beberapa kali sampai kita ada di titik di mana kita burn out dan patah dan tidak bisa melanjutkan lagi.',
        //     'category_id' => '3',
        //     'user_id' => '2',
        // ]);
        // Post::create([
        //     'title' => '10 Prinsip Responsive Web Design<br>',
        //     'slug' => '10-prinsip-responsive-web-design',
        //     'excerpt' => 'Responsive Web Design merupakan sebuah pendekatan yang menyarankan agar proses perancangan dan pengembangan sebuah web app harus merespon terhadap perilaku pengguna berdasarkan dari ukuran layar,platform dan orintasi layar.Berikut ini adalah prinsip-prinsip yang harus diketahui yang berkaitan dengan pembuatan website responsive: ',
        //     'body' => 'Responsive Web Design merupakan sebuah pendekatan yang menyarankan agar proses perancangan dan pengembangan sebuah web app harus merespon terhadap perilaku pengguna berdasarkan dari ukuran layar,platform dan orintasi layar.Berikut ini adalah prinsip-prinsip yang harus diketahui yang berkaitan dengan pembuatan website responsive:<br>1.Adaptive vs Responsive Design<br>2.Viewport & Viewport Meta Tag<br>3.Breakpoints<br>4.Media Query<br>5.Fluid Layouts<br>6.Relative Units<br>7.Responsive Media<br>8.Flexbox<br>9.Grid<br>10.Mobile First Design<br>Jadi itu adalah hal yang harus dipelajari agar website kita menjadi responsive.',
        //     'category_id' => '1',
        //     'user_id' => '1'
        // ]);
        // Post::create([
        //     'title' => '5 Alasan Kenapa Kita Susah Konsisten',
        //     'slug' => '5-alasan-kenapa-kita-susah-konsisten',
        //     'excerpt' => '5 alasan kenapa kita sulit dalam membangun habits berikut alasan-alasannya :',
        //     'body' => '5 alasan kenapa kita sulit dalam membangun habits berikut alasan-alasannya :<br>1.Cek Progres Terlalu Sering<br>kita jangan terobsesi pada hasil,<br>2.Mindset all or Nothing<br>3.Terlalu Fokus Pada Hasil<br>4.Thinking "we do this forever"<br>5.Berhenti dua kali berturut-turut<br>Lebih mudah bangkit dari hari yang buruk, daripada kehilangan habit yang telah kita bangun dari sekian lama dan harus memulai kebiasaan dari awal lagi.',

        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Cara Fokus Belajar Berjam-jam',
        //     'slug' => 'cara-fokus-belajar-berjam-jam',
        //     'excerpt' => 'Tips-tips ini ideal bagi kita yang ingin ikut ujian-ujian besar semacam ujian seleksi seperti UTBK.Berikut tips-tipsnya :',
        //     'body' => 'Tips-tips ini ideal bagi kita yang ingin ikut ujian-ujian besar semacam ujian seleksi seperti UTBK.Berikut tips-tipsnya :<br>1.Eliminasi Distraksi<br>Eliminasi distraksi ini maksudnya singkirkan sesuatu yang mengganggumu contohnya seperti HP.Sekalinya kita lagi fokus kemudian ada yang menarik dan pikiranmu buyar sangat sulit untuk kembali ke zona fokus yang sebelumnya jadi pastikan sebelum belajar hilangkan dulu semua distraksi sudah di eliminasi.Tapi bagaiman jika yang mengganggu itu bukan HP melainkan pikiran diri kita sendiri.Ada 2 cara untuk mengatasinya :<br>A.Aturan 3 detik<br>Kalo kamu mulai berpikir kemana-mana saat belajar,maka hitung 1, 2, 3 kemudian lupakan itu dan langsung fokus.<br>B.Siapkan Lembar Distraksi<br>Tapi bagaimana jika yang kita pikirkan itu adalah hal yang penting? Maka tuliskan di sebuah kertas tersebut.<br>2.Menetapkan Target Yang Jelas<br>3.Aturan 4%<br>Maksud dari aturan 4% adalah mengerjakan sesuatu hal yang kesulitannya 4% lebih tinggi dari kemampuan kita.<br>4.Stasiun Pengecasan<br>Ingat power,tekad,motivasi dan dorongan kita belajar itu terbatas jadi kalo kita pakai semuanya dalam satu gas maka kita akan burn out.<br>5.Sugesti Mental "Tanggung dikit lagi nyampe"<br>6.Tingkatkan Standar',
        //     'category_id' => '3',
        //     'user_id' => '2',
        // ]);

        // Post::create([
        //     'title' => '10 Kesalahan Programmer Pemula',
        //     'slug' => '10-kesalahan-programmer-pemula',
        //     'excerpt' => 'Berikut ini adalah kesalahan-kesalahan seorang pemula ketika belajar Programman :',
        //     'body' => 'Berikut ini adalah kesalahan-kesalahan seorang pemula ketika belajar Programman :<br>1.Tidak Berusaha Untuk Belajar Bahasa Inggris<br>2.Tidak Meluangkan Waktu Untuk Membaca Pesan Error<br>3.Tidak Membaca Dokumentasi Resmi Dari Teknologi / Sesuatu Yang Sedang di Pelajari<br>4.Jangan menghafal kodingan tapi DIPAHAMI<br>5.Tidak memahami Konsep Fundamental/dasar-dasarnya<br>6. Tidak Memahami Tools Pendukung contohnya seperti code editor/pun web browser<br>7.Bisa Berkolaborasi Dalam Sebuah Tim<br>8.Tutorial Hell<br>9.Simpan Project Yang Sudah Kalian Buat Di GitHub/GitLab agar tidak hilang<br>10.Sering membandingkan diri sendiri dengan orang lain<br>',
        //     'category_id' => '2',
        //     'user_id' => '1',
        // ]);
        // Post::create([
        //     'title' => 'Cara Berhenti Kecanduan HP',
        //     'slug' => 'cara-berhenti-kecanduan-hp',
        //     'excerpt' => 'Disini akan membahas cara mengurangi kecanduan HP/media sosial secara pelan-pelan agar tidak terkontrol oleh alat ini dan agar kita di penghujung hari tidak menyesal merasa waktu 24 jam kita terbuang sia-sia ',
        //     'body' => 'Disini akan membahas cara mengurangi kecanduan HP/media sosial secara pelan-pelan agar tidak terkontrol oleh alat ini dan agar kita di penghujung hari tidak menyesal merasa waktu 24 jam kita terbuang sia-sia :<br>1.Matikan Notifikasi<br>2.Matikan Auto Play di youtebe,netflix dll<br>3.Gunakan Time Limit<br>4.Unfollow orang-orang<br>Follow/tidak follow di media sosial, bukanlah patokan hubungan seseorang berkualiatas atau tidak.<br>5.Aturan Tanpa HP 1 jam sebelum tidur & 1 jam setelah tidur<br>6.Fokus menambahkan daripada mengurangi',
        //     'category_id' => '3',
        //     'user_id' => '2',
        // ]);
        // Post::create([
        //     'title' => 'Cara Lancar Bahasa Inggris Dalam 7 Hari',
        //     'slug' => 'cara-lancar-bahasa-inggris-dalam-7-hari',
        //     'excerpt' => '',
        //     'body' => 'Sebenarnya siapapun bisa belajar bahasa untuk memenuhi targetnya masing-masing selama itu masih realistis tentunya.Salah satu hal yang menyebabkan belajar bahasa itu tidak mengasyikan karena kita berekspektasi yang berlebihan yang tidak realistis.Misalnya belajar selama 7 hari kalo bisa jujur ini bukanlah hal yang bisa kita lakukan.Jadi disini akan menawarkan yang berbeda setelah membaca artikel ini bisa punya semangat untuk belajar gak cuma untuk 7 hari tapi 7 hari, 7 hari, 7 hari, 7 hari dan kelipatan 7 hari selanjutnya.Disini akan membahas metode yang dilakukan untuk belajar bahasa dalam 7 hari<br>1.Senin : Konsumsi Konten Native Speaker<br>2.Selasa : Konsumsi Konten Native Speaker(Tetapi Lebih Selektif)<br>3. Rabu : Konsumsi Konten Native Speaker(Tetapi Dengan Catatan)<br>4.Kamis : Tentukan Target Pembelajaran<br>5.Jumat : Praktek Bahasa<br>6.Sabtu : Membuat Jurnal Bahasa<br>7.Minggu : Mereflesikan Pembelajaran<br>Nah... begitulah kita belajar bahasa selama 7 hari tetapi tentunya untuk mencapai kepasihan ini adalah tugas yang terlalu besar dan kita tidak akan enjoy nantinya dengan perjalanan bahasa kita yang harusnya menyenangkan.Maka dari itu tentukanlah tujuan yang realistis.Meskipun setelah program 7 hari ini mungkin gak bisa langsung fasih dan dengan puluhan bahkan ratusan  pengulangan dari 7 hari ini maka yakinlah akan ada tahap dimana bisa menyampaikan pendapat dengan percaya diri.',
        //         //     'category_id' => '',
        //     'user_id' => '',
        // ]);

        Post::factory(20)->create();

        // Post::create([
        //     'title' => 'Judul Pertama',
        //     'slug' => 'judul-pertama',
        //     'excerpt' => 'Ubi',
        //     'body' => 'Bolu ubi',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);
        // Post::create([
        //     'title' => 'Judul Ke Dua',
        //     'slug' => 'judul-ke-dua',
        //     'excerpt' => 'Semangka',
        //     'body' => 'Semangka Goreng',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);
        // Post::create([
        //     'title' => 'Judul Ke Tiga',
        //     'slug' => 'judul-ke-tiga',
        //     'excerpt' => 'Tomat',
        //     'body' => 'Kue Tomat',
        //     'category_id' => 2,
        //     'user_id' => 1
        // ]);
        // Post::create([
        //     'title' => 'Judul Ke Empat',
        //     'slug' => 'judul-ke-empat',
        //     'excerpt' => 'Kebab',
        //     'body' => 'Farhan Kebab',
        //     'category_id' => 2,
        //     'user_id' => 2
        // ]);
    }
}
