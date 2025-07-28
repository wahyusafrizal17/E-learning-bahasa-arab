<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Materi;
use App\Models\Kelas;

class MateriBahasaArabSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $kelas = Kelas::where('status', 'Aktif')->get();
        
        if ($kelas->count() > 0) {
            $materiData = [
                // Huruf Hijaiyah - Pemula
                [
                    'nama_materi' => 'Pengenalan Huruf Hijaiyah',
                    'deskripsi' => 'Mengenal 28 huruf hijaiyah dan cara membacanya dengan benar',
                    'tingkat_kesulitan' => 'Pemula',
                    'kategori' => 'Huruf Hijaiyah',
                    'urutan' => 1,
                    'status' => 'Aktif',
                    'materi' => '<h2>Pengenalan Huruf Hijaiyah</h2>
                    <p>Huruf hijaiyah adalah huruf-huruf yang digunakan dalam penulisan bahasa Arab. Terdapat 28 huruf hijaiyah yang harus dipelajari dengan benar.</p>
                    
                    <h3>28 Huruf Hijaiyah:</h3>
                    <ul>
                        <li>ا (Alif)</li>
                        <li>ب (Ba)</li>
                        <li>ت (Ta)</li>
                        <li>ث (Tsa)</li>
                        <li>ج (Jim)</li>
                        <li>ح (Ha)</li>
                        <li>خ (Kha)</li>
                        <li>د (Dal)</li>
                        <li>ذ (Dzal)</li>
                        <li>ر (Ra)</li>
                        <li>ز (Zay)</li>
                        <li>س (Sin)</li>
                        <li>ش (Syin)</li>
                        <li>ص (Shad)</li>
                        <li>ض (Dhad)</li>
                        <li>ط (Tha)</li>
                        <li>ظ (Zha)</li>
                        <li>ع (Ain)</li>
                        <li>غ (Gain)</li>
                        <li>ف (Fa)</li>
                        <li>ق (Qaf)</li>
                        <li>ك (Kaf)</li>
                        <li>ل (Lam)</li>
                        <li>م (Mim)</li>
                        <li>ن (Nun)</li>
                        <li>ه (Ha)</li>
                        <li>و (Waw)</li>
                        <li>ي (Ya)</li>
                    </ul>
                    
                    <h3>Latihan:</h3>
                    <p>Praktikkan membaca setiap huruf dengan suara yang jelas dan benar.</p>'
                ],
                
                [
                    'nama_materi' => 'Huruf Bersambung',
                    'deskripsi' => 'Belajar menulis huruf hijaiyah dalam bentuk bersambung',
                    'tingkat_kesulitan' => 'Pemula',
                    'kategori' => 'Huruf Hijaiyah',
                    'urutan' => 2,
                    'status' => 'Aktif',
                    'materi' => '<h2>Huruf Bersambung</h2>
                    <p>Dalam bahasa Arab, huruf-huruf dapat ditulis bersambung satu sama lain. Setiap huruf memiliki bentuk yang berbeda tergantung posisinya dalam kata.</p>
                    
                    <h3>Posisi Huruf:</h3>
                    <ul>
                        <li><strong>Awal:</strong> Huruf di awal kata</li>
                        <li><strong>Tengah:</strong> Huruf di tengah kata</li>
                        <li><strong>Akhir:</strong> Huruf di akhir kata</li>
                        <li><strong>Tunggal:</strong> Huruf yang berdiri sendiri</li>
                    </ul>
                    
                    <h3>Contoh Huruf Bersambung:</h3>
                    <p>ب - ت - ث - ج - ح - خ - د - ذ - ر - ز - س - ش - ص - ض - ط - ظ - ع - غ - ف - ق - ك - ل - م - ن - ه - و - ي</p>
                    
                    <h3>Latihan Menulis:</h3>
                    <p>Praktikkan menulis setiap huruf dalam berbagai posisi.</p>'
                ],
                
                // Tajwid - Pemula
                [
                    'nama_materi' => 'Hukum Nun Mati dan Tanwin',
                    'deskripsi' => 'Mempelajari hukum bacaan nun mati dan tanwin dalam tajwid',
                    'tingkat_kesulitan' => 'Pemula',
                    'kategori' => 'Tajwid',
                    'urutan' => 3,
                    'status' => 'Aktif',
                    'materi' => '<h2>Hukum Nun Mati dan Tanwin</h2>
                    <p>Hukum nun mati dan tanwin adalah salah satu hukum tajwid yang penting dalam membaca Al-Quran.</p>
                    
                    <h3>Hukum Nun Mati dan Tanwin:</h3>
                    <ol>
                        <li><strong>Idzhar Halqi:</strong> Nun mati atau tanwin bertemu dengan huruf ح خ ع غ ه أ
                        <br>Contoh: مِنْ هَادٍ</li>
                        
                        <li><strong>Idgham Bighunnah:</strong> Nun mati atau tanwin bertemu dengan huruf ي ن م و
                        <br>Contoh: مِنْ نُّطْفَةٍ</li>
                        
                        <li><strong>Idgham Bilaghunnah:</strong> Nun mati atau tanwin bertemu dengan huruf ر ل
                        <br>Contoh: مِنْ لَّدُنْكَ</li>
                        
                        <li><strong>Iqlab:</strong> Nun mati atau tanwin bertemu dengan huruf ب
                        <br>Contoh: مِنْ بَعْدِ</li>
                        
                        <li><strong>Ikhfa:</strong> Nun mati atau tanwin bertemu dengan huruf selain yang disebutkan di atas
                        <br>Contoh: مِنْ فَضْلِهِ</li>
                    </ol>
                    
                    <h3>Latihan:</h3>
                    <p>Praktikkan membaca ayat-ayat dengan memperhatikan hukum nun mati dan tanwin.</p>'
                ],
                
                // Nahwu - Menengah
                [
                    'nama_materi' => 'Isim dan Fi\'il',
                    'deskripsi' => 'Mengenal jenis kata dalam bahasa Arab: Isim (kata benda) dan Fi\'il (kata kerja)',
                    'tingkat_kesulitan' => 'Menengah',
                    'kategori' => 'Nahwu',
                    'urutan' => 4,
                    'status' => 'Aktif',
                    'materi' => '<h2>Isim dan Fi\'il</h2>
                    <p>Dalam ilmu nahwu, kata dalam bahasa Arab dibagi menjadi tiga jenis: Isim, Fi\'il, dan Harf.</p>
                    
                    <h3>1. Isim (Kata Benda)</h3>
                    <p>Isim adalah kata yang menunjukkan makna dan tidak terikat dengan waktu.</p>
                    <ul>
                        <li><strong>Contoh:</strong> كِتَابٌ (kitab), قَلَمٌ (pena), بَيْتٌ (rumah)</li>
                        <li><strong>Ciri:</strong> Dapat menerima tanwin, alif lam, dan dapat menjadi mubtada</li>
                    </ul>
                    
                    <h3>2. Fi\'il (Kata Kerja)</h3>
                    <p>Fi\'il adalah kata yang menunjukkan makna dan terikat dengan waktu.</p>
                    <ul>
                        <li><strong>Fi\'il Madhi:</strong> Kata kerja lampau - كَتَبَ (dia menulis)</li>
                        <li><strong>Fi\'il Mudhari:</strong> Kata kerja sekarang/akan datang - يَكْتُبُ (dia menulis)</li>
                        <li><strong>Fi\'il Amar:</strong> Kata kerja perintah - اُكْتُبْ (tulislah!)</li>
                    </ul>
                    
                    <h3>Latihan:</h3>
                    <p>Identifikasikan jenis kata dalam kalimat-kalimat berikut:</p>
                    <ol>
                        <li>اَلطَّالِبُ يَقْرَأُ الْكِتَابَ</li>
                        <li>كَتَبَ الرَّجُلُ رِسَالَةً</li>
                        <li>اِقْرَأْ الْقُرْآنَ</li>
                    </ol>'
                ],
                
                // Shorof - Menengah
                [
                    'nama_materi' => 'Wazan Kata Kerja',
                    'deskripsi' => 'Mempelajari pola-pola kata kerja dalam bahasa Arab (wazan)',
                    'tingkat_kesulitan' => 'Menengah',
                    'kategori' => 'Shorof',
                    'urutan' => 5,
                    'status' => 'Aktif',
                    'materi' => '<h2>Wazan Kata Kerja</h2>
                    <p>Wazan adalah pola atau timbangan kata dalam bahasa Arab yang membantu memahami makna dan fungsi kata.</p>
                    
                    <h3>Wazan Fi\'il Tsulatsi (3 Huruf):</h3>
                    <ul>
                        <li><strong>فَعَلَ:</strong> كَتَبَ (menulis), قَرَأَ (membaca)</li>
                        <li><strong>فَعِلَ:</strong> عَلِمَ (mengetahui), حَسِبَ (mengira)</li>
                        <li><strong>فَعُلَ:</strong> كَبُرَ (besar), صَغُرَ (kecil)</li>
                    </ul>
                    
                    <h3>Wazan Fi\'il Ruba\'i (4 Huruf):</h3>
                    <ul>
                        <li><strong>فَعْلَلَ:</strong> دَحْرَجَ (menggelindingkan)</li>
                        <li><strong>أَفْعَلَ:</strong> أَكْرَمَ (memuliakan)</li>
                        <li><strong>تَفَعَّلَ:</strong> تَعَلَّمَ (belajar)</li>
                    </ul>
                    
                    <h3>Latihan:</h3>
                    <p>Identifikasikan wazan dari kata-kata berikut:</p>
                    <ol>
                        <li>جَلَسَ</li>
                        <li>أَخْرَجَ</li>
                        <li>تَذَكَّرَ</li>
                    </ol>'
                ],
                
                // Muhadatsah - Menengah
                [
                    'nama_materi' => 'Percakapan Sehari-hari',
                    'deskripsi' => 'Belajar percakapan bahasa Arab untuk situasi sehari-hari',
                    'tingkat_kesulitan' => 'Menengah',
                    'kategori' => 'Muhadatsah',
                    'urutan' => 6,
                    'status' => 'Aktif',
                    'materi' => '<h2>Percakapan Sehari-hari</h2>
                    <p>Belajar percakapan bahasa Arab untuk situasi sehari-hari.</p>
                    
                    <h3>Percakapan di Rumah:</h3>
                    <ul>
                        <li><strong>Selamat Pagi:</strong> صَبَاحُ الْخَيْرِ</li>
                        <li><strong>Selamat Siang:</strong> مَسَاءُ الْخَيْرِ</li>
                        <li><strong>Selamat Malam:</strong> لَيْلَةُ سَعِيدَةٍ</li>
                        <li><strong>Terima Kasih:</strong> شُكْرًا</li>
                        <li><strong>Sama-sama:</strong> عَفْوًا</li>
                    </ul>
                    
                    <h3>Percakapan di Sekolah:</h3>
                    <ul>
                        <li><strong>Selamat Datang:</strong> مَرْحَبًا</li>
                        <li><strong>Bagaimana kabarmu?</strong> كَيْفَ حَالُكَ؟</li>
                        <li><strong>Baik, alhamdulillah:</strong> بِخَيْرٍ، الْحَمْدُ لِلَّهِ</li>
                        <li><strong>Nama saya:</strong> اِسْمِي</li>
                        <li><strong>Senang bertemu denganmu:</strong> تَشَرَّفْتُ بِمُقَابَلَتِكَ</li>
                    </ul>
                    
                    <h3>Latihan Percakapan:</h3>
                    <p>Praktikkan percakapan dengan teman menggunakan ungkapan-ungkapan di atas.</p>'
                ],
                
                // Qiroah - Lanjutan
                [
                    'nama_materi' => 'Membaca Teks Arab',
                    'deskripsi' => 'Latihan membaca teks bahasa Arab dengan pemahaman yang baik',
                    'tingkat_kesulitan' => 'Lanjutan',
                    'kategori' => 'Qiroah',
                    'urutan' => 7,
                    'status' => 'Aktif',
                    'materi' => '<h2>Membaca Teks Arab</h2>
                    <p>Latihan membaca teks bahasa Arab dengan pemahaman yang baik.</p>
                    
                    <h3>Teks Sederhana:</h3>
                    <div style="direction: rtl; text-align: right; font-size: 18px; line-height: 2;">
                        <p>اَلْبَيْتُ كَبِيرٌ وَجَمِيلٌ. فِي الْبَيْتِ غُرَفٌ كَثِيرَةٌ. فِي الْغُرْفَةِ طَاوِلَةٌ وَكُرْسِيٌّ. عَلَى الطَّاوِلَةِ كِتَابٌ وَقَلَمٌ.</p>
                    </div>
                    
                    <h3>Terjemahan:</h3>
                    <p>Rumah itu besar dan indah. Di dalam rumah ada banyak kamar. Di dalam kamar ada meja dan kursi. Di atas meja ada buku dan pena.</p>
                    
                    <h3>Kosakata Baru:</h3>
                    <ul>
                        <li>اَلْبَيْتُ = rumah</li>
                        <li>كَبِيرٌ = besar</li>
                        <li>جَمِيلٌ = indah</li>
                        <li>غُرَفٌ = kamar-kamar</li>
                        <li>كَثِيرَةٌ = banyak</li>
                        <li>طَاوِلَةٌ = meja</li>
                        <li>كُرْسِيٌّ = kursi</li>
                        <li>كِتَابٌ = buku</li>
                        <li>قَلَمٌ = pena</li>
                    </ul>
                    
                    <h3>Latihan:</h3>
                    <p>Bacalah teks di atas dengan suara yang jelas dan pahami maknanya.</p>'
                ],
                
                // Kitabah - Lanjutan
                [
                    'nama_materi' => 'Menulis Karangan Arab',
                    'deskripsi' => 'Belajar menulis karangan sederhana dalam bahasa Arab',
                    'tingkat_kesulitan' => 'Lanjutan',
                    'kategori' => 'Kitabah',
                    'urutan' => 8,
                    'status' => 'Aktif',
                    'materi' => '<h2>Menulis Karangan Arab</h2>
                    <p>Belajar menulis karangan sederhana dalam bahasa Arab.</p>
                    
                    <h3>Struktur Karangan:</h3>
                    <ol>
                        <li><strong>المقدمة (Pendahuluan):</strong> Memperkenalkan topik</li>
                        <li><strong>المحتوى (Isi):</strong> Mengembangkan ide utama</li>
                        <li><strong>الخاتمة (Penutup):</strong> Menyimpulkan dan menutup</li>
                    </ol>
                    
                    <h3>Contoh Karangan Sederhana:</h3>
                    <div style="direction: rtl; text-align: right; font-size: 16px; line-height: 1.8;">
                        <h4>اَلْعِلْمُ نُورٌ</h4>
                        <p>اَلْعِلْمُ مِنْ أَهَمِّ الْأَشْيَاءِ فِي حَيَاةِ الْإِنْسَانِ. بِالْعِلْمِ يَتَقَدَّمُ الْبَشَرُ وَيَتَطَوَّرُ الْعَالَمُ. الْعِلْمُ نُورٌ يُضِيءُ طَرِيقَ الْحَيَاةِ.</p>
                        <p>يَجِبُ عَلَى كُلِّ طَالِبٍ أَنْ يَجْتَهِدَ فِي التَّعَلُّمِ. بِالْعِلْمِ نَسْتَطِيعُ أَنْ نُسَاعِدَ أَنْفُسَنَا وَأُمَّتَنَا. الْعِلْمُ لَا يَنْفَدُ وَيَزِيدُ بِالْمُشَارَكَةِ.</p>
                        <p>فَلْنَجْتَهِدْ فِي طَلَبِ الْعِلْمِ وَلْنَكُنْ مِنَ الْعُلَمَاءِ الَّذِينَ يَنْفَعُونَ النَّاسَ.</p>
                    </div>
                    
                    <h3>Terjemahan:</h3>
                    <p><strong>Ilmu adalah Cahaya</strong></p>
                    <p>Ilmu adalah salah satu hal terpenting dalam kehidupan manusia. Dengan ilmu, manusia maju dan dunia berkembang. Ilmu adalah cahaya yang menerangi jalan kehidupan.</p>
                    <p>Setiap pelajar harus bersungguh-sungguh dalam belajar. Dengan ilmu, kita dapat membantu diri kita dan umat kita. Ilmu tidak habis dan bertambah dengan berbagi.</p>
                    <p>Mari kita bersungguh-sungguh dalam mencari ilmu dan jadilah ulama yang bermanfaat bagi manusia.</p>
                    
                    <h3>Latihan:</h3>
                    <p>Tulislah karangan sederhana tentang "Rumah Saya" dalam bahasa Arab.</p>'
                ],
                
                // Tajwid - Lanjutan
                [
                    'nama_materi' => 'Hukum Mim Mati',
                    'deskripsi' => 'Mempelajari hukum bacaan mim mati dalam tajwid',
                    'tingkat_kesulitan' => 'Lanjutan',
                    'kategori' => 'Tajwid',
                    'urutan' => 9,
                    'status' => 'Aktif',
                    'materi' => '<h2>Hukum Mim Mati</h2>
                    <p>Hukum mim mati adalah hukum tajwid yang berlaku ketika mim mati bertemu dengan huruf tertentu.</p>
                    
                    <h3>Hukum Mim Mati:</h3>
                    <ol>
                        <li><strong>Idgham Mislain:</strong> Mim mati bertemu dengan mim
                        <br>Contoh: لَهُمْ مَثَلًا</li>
                        
                        <li><strong>Ikhfa Syafawi:</strong> Mim mati bertemu dengan ba
                        <br>Contoh: تَرْمِيهِمْ بِحِجَارَةٍ</li>
                        
                        <li><strong>Idzhar Syafawi:</strong> Mim mati bertemu dengan huruf selain mim dan ba
                        <br>Contoh: لَهُمْ أَعْمَالُهُمْ</li>
                    </ol>
                    
                    <h3>Latihan:</h3>
                    <p>Praktikkan membaca ayat-ayat dengan memperhatikan hukum mim mati.</p>'
                ],
                
                // Nahwu - Lanjutan
                [
                    'nama_materi' => 'Jumlah Ismiyah dan Fi\'liyah',
                    'deskripsi' => 'Mempelajari struktur kalimat dalam bahasa Arab',
                    'tingkat_kesulitan' => 'Lanjutan',
                    'kategori' => 'Nahwu',
                    'urutan' => 10,
                    'status' => 'Aktif',
                    'materi' => '<h2>Jumlah Ismiyah dan Fi\'liyah</h2>
                    <p>Dalam bahasa Arab, kalimat dibagi menjadi dua jenis utama: Jumlah Ismiyah dan Jumlah Fi\'liyah.</p>
                    
                    <h3>1. Jumlah Ismiyah (Kalimat Nominal)</h3>
                    <p>Kalimat yang diawali dengan isim (kata benda).</p>
                    <ul>
                        <li><strong>Struktur:</strong> Mubtada + Khabar</li>
                        <li><strong>Contoh:</strong> اَلطَّالِبُ مُجْتَهِدٌ (Siswa itu rajin)</li>
                        <li><strong>Mubtada:</strong> اَلطَّالِبُ (Siswa itu)</li>
                        <li><strong>Khabar:</strong> مُجْتَهِدٌ (rajin)</li>
                    </ul>
                    
                    <h3>2. Jumlah Fi\'liyah (Kalimat Verbal)</h3>
                    <p>Kalimat yang diawali dengan fi\'il (kata kerja).</p>
                    <ul>
                        <li><strong>Struktur:</strong> Fi\'il + Fa\'il + Maf\'ul</li>
                        <li><strong>Contoh:</strong> كَتَبَ الطَّالِبُ الدَّرْسَ (Siswa menulis pelajaran)</li>
                        <li><strong>Fi\'il:</strong> كَتَبَ (menulis)</li>
                        <li><strong>Fa\'il:</strong> الطَّالِبُ (siswa)</li>
                        <li><strong>Maf\'ul:</strong> الدَّرْسَ (pelajaran)</li>
                    </ul>
                    
                    <h3>Latihan:</h3>
                    <p>Identifikasikan jenis kalimat berikut:</p>
                    <ol>
                        <li>اَلْكِتَابُ جَدِيدٌ</li>
                        <li>قَرَأَ الطَّالِبُ الْقُرْآنَ</li>
                        <li>اَلْبَيْتُ كَبِيرٌ</li>
                        <li>كَتَبَ الْمُدَرِّسُ الدَّرْسَ</li>
                    </ol>'
                ]
            ];
            
            foreach ($materiData as $index => $materi) {
                // Assign to kelas based on index
                $kelasIndex = $index % $kelas->count();
                $materi['kelas_id'] = $kelas[$kelasIndex]->id;
                
                // Create banner filename
                $materi['banner'] = 'banner_' . ($index + 1) . '.png';
                
                Materi::create($materi);
            }
        }
    }
}
