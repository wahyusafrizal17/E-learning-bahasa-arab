# Modul Materi E-Learning Bahasa Arab

## Deskripsi
Modul Materi E-Learning Bahasa Arab adalah sistem manajemen materi pembelajaran yang disesuaikan khusus untuk pembelajaran bahasa Arab dengan fitur-fitur e-learning yang lengkap.

## Fitur E-Learning
- ✅ **Kategori Materi**: Huruf Hijaiyah, Tajwid, Nahwu, Shorof, Muhadatsah, Qiroah, Kitabah
- ✅ **Tingkat Kesulitan**: Pemula, Menengah, Lanjutan
- ✅ **Durasi Pembelajaran**: Estimasi waktu belajar (5-180 menit)
- ✅ **Urutan Materi**: Pengaturan urutan pembelajaran
- ✅ **Status Materi**: Aktif, Draft, Arsip
- ✅ **Relasi dengan Kelas**: Materi dapat diassign ke kelas tertentu
- ✅ **Deskripsi Materi**: Penjelasan singkat materi pembelajaran
- ✅ **Konten HTML**: Editor CKEditor untuk konten yang kaya
- ✅ **Banner Materi**: Gambar pendukung materi
- ✅ **Validasi Lengkap**: Validasi form dengan pesan error Indonesia

## Struktur Database

### Tabel Materi (Updated)
```sql
CREATE TABLE materi (
    id BIGINT PRIMARY KEY AUTO_INCREMENT,
    nama_materi VARCHAR(255) NOT NULL,
    materi LONGTEXT NOT NULL,
    banner VARCHAR(255) NOT NULL,
    deskripsi TEXT NULL,
    tingkat_kesulitan ENUM('Pemula', 'Menengah', 'Lanjutan') DEFAULT 'Pemula',
    kategori ENUM('Huruf Hijaiyah', 'Tajwid', 'Nahwu', 'Shorof', 'Muhadatsah', 'Qiroah', 'Kitabah') DEFAULT 'Huruf Hijaiyah',
    kelas_id BIGINT NULL,
    urutan INT DEFAULT 1,
    status ENUM('Aktif', 'Draft', 'Arsip') DEFAULT 'Aktif',
    created_at TIMESTAMP NULL,
    updated_at TIMESTAMP NULL,
    FOREIGN KEY (kelas_id) REFERENCES kelas(id) ON DELETE CASCADE
);
```

## Kategori Materi Bahasa Arab

### 1. Huruf Hijaiyah
- Pengenalan 28 huruf hijaiyah
- Huruf bersambung
- Latihan menulis dan membaca

### 2. Tajwid
- Hukum nun mati dan tanwin
- Hukum mim mati
- Idzhar, Idgham, Iqlab, Ikhfa

### 3. Nahwu
- Isim dan Fi'il
- Jumlah Ismiyah dan Fi'liyah
- Struktur kalimat bahasa Arab

### 4. Shorof
- Wazan kata kerja
- Pola-pola kata kerja
- Perubahan bentuk kata

### 5. Muhadatsah
- Percakapan sehari-hari
- Ungkapan-ungkapan umum
- Latihan berbicara

### 6. Qiroah
- Membaca teks Arab
- Pemahaman bacaan
- Kosakata baru

### 7. Kitabah
- Menulis karangan Arab
- Struktur karangan
- Latihan menulis

## URL Routes
- `GET /materi` - Daftar materi
- `GET /materi/create` - Form tambah materi
- `POST /materi` - Simpan materi baru
- `GET /materi/{id}` - Detail materi
- `GET /materi/{id}/edit` - Form edit materi
- `PUT /materi/{id}` - Update materi
- `DELETE /materi/{id}` - Hapus materi
- `POST /materi/delete` - Delete via AJAX

## File yang Diupdate

### Migration
- `database/migrations/2025_07_28_173643_update_materis_table_for_e_learning.php`

### Model
- **Update**: `app/Models/Materi.php` (tambah field baru dan relasi)

### Request Classes
- **Update**: `app/Http/Requests/Materi/StoreRequest.php` (validasi lengkap)
- **Update**: `app/Http/Requests/Materi/UpdateRequest.php` (validasi lengkap)

### Controller
- **Update**: `app/Http/Controllers/MateriController.php` (load kelas dan urutan)

### Views
- **Update**: `resources/views/materi/_form.blade.php` (form lengkap)
- **Update**: `resources/views/materi/index.blade.php` (tampilan baru)

### Seeder
- **Baru**: `database/seeders/MateriBahasaArabSeeder.php` (10 materi contoh)

## Materi Contoh yang Dibuat

### Tingkat Pemula
1. **Pengenalan Huruf Hijaiyah** (45 menit)
   - 28 huruf hijaiyah lengkap
   - Cara membaca yang benar
   - Latihan praktik

2. **Huruf Bersambung** (60 menit)
   - Posisi huruf dalam kata
   - Bentuk bersambung
   - Latihan menulis

3. **Hukum Nun Mati dan Tanwin** (50 menit)
   - Idzhar Halqi
   - Idgham Bighunnah
   - Idgham Bilaghunnah
   - Iqlab
   - Ikhfa

### Tingkat Menengah
4. **Isim dan Fi'il** (55 menit)
   - Jenis kata dalam bahasa Arab
   - Ciri-ciri isim dan fi'il
   - Latihan identifikasi

5. **Wazan Kata Kerja** (65 menit)
   - Pola kata kerja tsulatsi
   - Pola kata kerja ruba'i
   - Latihan wazan

6. **Percakapan Sehari-hari** (40 menit)
   - Ungkapan umum
   - Situasi percakapan
   - Latihan berbicara

### Tingkat Lanjutan
7. **Membaca Teks Arab** (70 menit)
   - Teks sederhana
   - Kosakata baru
   - Pemahaman bacaan

8. **Menulis Karangan Arab** (80 menit)
   - Struktur karangan
   - Contoh karangan
   - Latihan menulis

9. **Hukum Mim Mati** (55 menit)
   - Idgham Mislain
   - Ikhfa Syafawi
   - Idzhar Syafawi

10. **Jumlah Ismiyah dan Fi'liyah** (75 menit)
    - Kalimat nominal
    - Kalimat verbal
    - Latihan struktur

## Validasi E-Learning
- **Nama Materi**: Maksimal 255 karakter
- **Banner**: Gambar jpeg/png/jpg, maksimal 2MB
- **Durasi**: 5-180 menit
- **Urutan**: Minimal 1
- **Kategori**: 7 kategori bahasa Arab
- **Tingkat**: 3 tingkat kesulitan
- **Status**: 3 status materi
- **Kelas**: Opsional, harus ada di database

## Tampilan Baru

### Daftar Materi
```
No  Nama Materi              Kategori        Tingkat    Durasi    Kelas        Status    Banner
1   Pengenalan Huruf         Huruf Hijaiyah  Pemula     45 menit  Dasar        Aktif    [Gambar]
2   Hukum Nun Mati           Tajwid          Pemula     50 menit  Menengah     Aktif    [Gambar]
3   Isim dan Fi'il           Nahwu           Menengah   55 menit  Lanjutan     Aktif    [Gambar]
```

### Form Materi
```
┌─────────────────────────────────────────────────────────────────┐
│ Nama Materi: [________________]  Kategori: [Huruf Hijaiyah ▼] │
│ Tingkat: [Pemula ▼]          Durasi: [45] menit              │
│ Kelas: [Pilih Kelas ▼]       Urutan: [1]                     │
│ Status: [Aktif ▼]            Banner: [Pilih File]             │
│                                                               │
│ Deskripsi:                                                    │
│ [___________________________________________________________] │
│                                                               │
│ Materi:                                                       │
│ [CKEditor - Rich Text Editor]                                 │
└─────────────────────────────────────────────────────────────────┘
```

## Integrasi dengan Kelas
- **Relasi**: Materi dapat diassign ke kelas tertentu
- **Tampilan**: Daftar materi ditampilkan di detail kelas
- **Urutan**: Materi diurutkan berdasarkan field urutan
- **Status**: Hanya materi aktif yang ditampilkan

## Fitur Khusus E-Learning

### 1. Kategori Pembelajaran
- **Huruf Hijaiyah**: Dasar membaca dan menulis
- **Tajwid**: Hukum bacaan Al-Quran
- **Nahwu**: Tata bahasa Arab
- **Shorof**: Perubahan bentuk kata
- **Muhadatsah**: Percakapan dan berbicara
- **Qiroah**: Membaca dan pemahaman
- **Kitabah**: Menulis dan mengarang

### 2. Tingkat Kesulitan
- **Pemula**: Materi dasar untuk pemula
- **Menengah**: Materi lanjutan untuk tingkat menengah
- **Lanjutan**: Materi tingkat tinggi untuk mahir

### 3. Durasi Pembelajaran
- Estimasi waktu belajar yang realistis
- 5-180 menit sesuai kompleksitas materi
- Membantu perencanaan pembelajaran

### 4. Status Materi
- **Aktif**: Materi yang sedang digunakan
- **Draft**: Materi yang sedang disiapkan
- **Arsip**: Materi yang tidak digunakan lagi

### 5. Urutan Pembelajaran
- Pengaturan urutan materi dalam kelas
- Memastikan pembelajaran berurutan
- Memudahkan navigasi siswa

## Cara Penggunaan

### 1. Tambah Materi Baru
- Klik "Tambah" di halaman materi
- Isi semua field yang diperlukan
- Pilih kategori dan tingkat kesulitan
- Set durasi dan urutan
- Upload banner materi
- Tulis konten dengan CKEditor
- Klik "Simpan"

### 2. Edit Materi
- Klik icon edit pada materi
- Ubah field yang diperlukan
- Update konten jika perlu
- Klik "Simpan"

### 3. Kelola Status
- Aktif: Materi dapat diakses siswa
- Draft: Materi sedang disiapkan
- Arsip: Materi tidak digunakan

### 4. Assign ke Kelas
- Pilih kelas di form materi
- Materi akan muncul di detail kelas
- Urutkan materi sesuai kebutuhan

## Data Contoh
Seeder telah membuat 10 materi contoh yang mencakup:
- 2 materi Huruf Hijaiyah (Pemula)
- 2 materi Tajwid (Pemula & Lanjutan)
- 2 materi Nahwu (Menengah & Lanjutan)
- 1 materi Shorof (Menengah)
- 1 materi Muhadatsah (Menengah)
- 1 materi Qiroah (Lanjutan)
- 1 materi Kitabah (Lanjutan)

## Perbedaan dengan Sistem Sebelumnya
- **Kategori Khusus**: 7 kategori bahasa Arab
- **Tingkat Kesulitan**: 3 tingkat pembelajaran
- **Durasi Realistis**: Estimasi waktu belajar
- **Urutan Pembelajaran**: Pengaturan urutan materi
- **Status Materi**: Kontrol penggunaan materi
- **Relasi Kelas**: Materi dapat diassign ke kelas
- **Konten Kaya**: Editor CKEditor untuk konten HTML
- **Validasi Lengkap**: Validasi khusus e-learning

## Keunggulan Sistem E-Learning
- **Struktur Pembelajaran**: Materi terorganisir dengan baik
- **Tingkat Kesulitan**: Progresif dari pemula ke lanjutan
- **Estimasi Waktu**: Perencanaan pembelajaran yang realistis
- **Kategori Spesifik**: Sesuai kebutuhan pembelajaran bahasa Arab
- **Status Kontrol**: Manajemen materi yang fleksibel
- **Integrasi Kelas**: Materi terhubung dengan kelas
- **Konten Interaktif**: Editor yang mendukung konten kaya
- **Validasi Ketat**: Memastikan kualitas materi 