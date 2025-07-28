# Modul Data Guru

## Deskripsi
Modul Data Guru adalah sistem CRUD lengkap untuk mengelola data guru dalam aplikasi e-Learning Bahasa Arab.

## Fitur
- ✅ CRUD lengkap (Create, Read, Update, Delete)
- ✅ Upload foto guru
- ✅ Validasi form dengan pesan error Indonesia
- ✅ AJAX delete dengan konfirmasi SweetAlert
- ✅ DataTables dengan search, sort, pagination
- ✅ Responsive design
- ✅ Menu navigation yang terintegrasi

## Struktur Database
```sql
CREATE TABLE guru (
    id BIGINT PRIMARY KEY AUTO_INCREMENT,
    nama_lengkap VARCHAR(255) NOT NULL,
    nip VARCHAR(20) UNIQUE NOT NULL,
    nuptk VARCHAR(20) UNIQUE NOT NULL,
    jenis_kelamin ENUM('Laki-laki', 'Perempuan') NOT NULL,
    tempat_lahir VARCHAR(255) NOT NULL,
    tanggal_lahir DATE NOT NULL,
    alamat TEXT NOT NULL,
    no_telepon VARCHAR(15) NOT NULL,
    email VARCHAR(255) NULL,
    bidang_studi VARCHAR(255) NOT NULL,
    pendidikan_terakhir VARCHAR(255) NOT NULL,
    foto VARCHAR(255) NULL,
    created_at TIMESTAMP NULL,
    updated_at TIMESTAMP NULL
);
```

## URL Routes
- `GET /guru` - Daftar guru
- `GET /guru/create` - Form tambah guru
- `POST /guru` - Simpan guru baru
- `GET /guru/{id}` - Detail guru
- `GET /guru/{id}/edit` - Form edit guru
- `PUT /guru/{id}` - Update guru
- `DELETE /guru/{id}` - Hapus guru
- `POST /guru/delete` - Delete via AJAX

## Menu Navigation
Menu "Data Guru" telah ditambahkan ke sidebar dengan icon `user` dan akan aktif ketika berada di halaman guru.

## File yang Dibuat
### Model & Migration
- `app/Models/Guru.php`
- `database/migrations/2025_07_28_171220_create_guru_table.php`

### Request Classes
- `app/Http/Requests/Guru/StoreRequest.php`
- `app/Http/Requests/Guru/UpdateRequest.php`

### Controller
- `app/Http/Controllers/GuruController.php`

### Views
- `resources/views/guru/index.blade.php`
- `resources/views/guru/create.blade.php`
- `resources/views/guru/edit.blade.php`
- `resources/views/guru/show.blade.php`
- `resources/views/guru/_form.blade.php`

### Seeder
- `database/seeders/GuruTableSeeder.php`

### Routes
- Ditambahkan ke `routes/web.php`

### Menu
- Ditambahkan ke `resources/views/layouts/app.blade.php`

## Cara Penggunaan

### 1. Akses Menu
Login ke aplikasi dan klik menu "Data Guru" di sidebar.

### 2. Tambah Guru
- Klik tombol "Tambah Guru"
- Isi semua field yang diperlukan (bertanda *)
- Upload foto (opsional)
- Klik "Simpan"

### 3. Edit Guru
- Klik icon edit (pensil) pada baris guru
- Ubah data yang diperlukan
- Klik "Simpan"

### 4. Detail Guru
- Klik icon detail (mata) pada baris guru
- Lihat informasi lengkap guru

### 5. Hapus Guru
- Klik icon hapus (tempat sampah) pada baris guru
- Konfirmasi penghapusan

## Data Contoh
Seeder telah dibuat dengan 5 data guru contoh:
1. Dr. Ahmad Fauzi, M.Pd (Bahasa Arab)
2. Siti Nurhaliza, S.Pd (Bahasa Inggris)
3. Muhammad Rizki, M.Pd (Matematika)
4. Nurul Hidayah, S.Pd (Fisika)
5. Abdul Rahman, M.Pd (Kimia)

## Validasi
- NIP dan NUPTK harus unik
- Email harus valid (jika diisi)
- Foto maksimal 2MB, format JPG/PNG/JPEG
- Semua field wajib kecuali email dan foto

## Field Khusus Guru
- **NIP**: Nomor Induk Pegawai (wajib, unik)
- **NUPTK**: Nomor Unik Pendidik dan Tenaga Kependidikan (wajib, unik)
- **Bidang Studi**: Mata pelajaran yang diajar (wajib)
- **Pendidikan Terakhir**: Tingkat pendidikan tertinggi (wajib)

## Folder Upload
Foto guru disimpan di `public/foto-guru/` dengan format nama `guru_YYYYMMDDHHMMSS.ext`

## Perbedaan dengan Siswa
- Field NIP dan NUPTK (khusus guru)
- Field Bidang Studi (mata pelajaran yang diajar)
- Field Pendidikan Terakhir (tingkat pendidikan)
- Icon menu menggunakan `user` (siswa menggunakan `user-check`) 