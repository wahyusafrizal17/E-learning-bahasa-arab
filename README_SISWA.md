# Modul Data Siswa

## Deskripsi
Modul Data Siswa adalah sistem CRUD lengkap untuk mengelola data siswa dalam aplikasi e-Learning Bahasa Arab.

## Fitur
- ✅ CRUD lengkap (Create, Read, Update, Delete)
- ✅ Upload foto siswa
- ✅ Validasi form dengan pesan error Indonesia
- ✅ AJAX delete dengan konfirmasi SweetAlert
- ✅ DataTables dengan search, sort, pagination
- ✅ Responsive design
- ✅ Menu navigation yang terintegrasi

## Struktur Database
```sql
CREATE TABLE siswa (
    id BIGINT PRIMARY KEY AUTO_INCREMENT,
    nama_lengkap VARCHAR(255) NOT NULL,
    nis VARCHAR(20) UNIQUE NOT NULL,
    nisn VARCHAR(20) UNIQUE NOT NULL,
    jenis_kelamin ENUM('Laki-laki', 'Perempuan') NOT NULL,
    tempat_lahir VARCHAR(255) NOT NULL,
    tanggal_lahir DATE NOT NULL,
    alamat TEXT NOT NULL,
    no_telepon VARCHAR(15) NOT NULL,
    email VARCHAR(255) NULL,
    foto VARCHAR(255) NULL,
    created_at TIMESTAMP NULL,
    updated_at TIMESTAMP NULL
);
```

## URL Routes
- `GET /siswa` - Daftar siswa
- `GET /siswa/create` - Form tambah siswa
- `POST /siswa` - Simpan siswa baru
- `GET /siswa/{id}` - Detail siswa
- `GET /siswa/{id}/edit` - Form edit siswa
- `PUT /siswa/{id}` - Update siswa
- `DELETE /siswa/{id}` - Hapus siswa
- `POST /siswa/delete` - Delete via AJAX

## Menu Navigation
Menu "Data Siswa" telah ditambahkan ke sidebar dengan icon `user-check` dan akan aktif ketika berada di halaman siswa.

## File yang Dibuat
### Model & Migration
- `app/Models/Siswa.php`
- `database/migrations/2025_07_28_170535_create_siswa_table.php`

### Request Classes
- `app/Http/Requests/Siswa/StoreRequest.php`
- `app/Http/Requests/Siswa/UpdateRequest.php`

### Controller
- `app/Http/Controllers/SiswaController.php`

### Views
- `resources/views/siswa/index.blade.php`
- `resources/views/siswa/create.blade.php`
- `resources/views/siswa/edit.blade.php`
- `resources/views/siswa/show.blade.php`
- `resources/views/siswa/_form.blade.php`

### Seeder
- `database/seeders/SiswaTableSeeder.php`

### Routes
- Ditambahkan ke `routes/web.php`

### Menu
- Ditambahkan ke `resources/views/layouts/app.blade.php`

## Cara Penggunaan

### 1. Akses Menu
Login ke aplikasi dan klik menu "Data Siswa" di sidebar.

### 2. Tambah Siswa
- Klik tombol "Tambah Siswa"
- Isi semua field yang diperlukan (bertanda *)
- Upload foto (opsional)
- Klik "Simpan"

### 3. Edit Siswa
- Klik icon edit (pensil) pada baris siswa
- Ubah data yang diperlukan
- Klik "Simpan"

### 4. Detail Siswa
- Klik icon detail (mata) pada baris siswa
- Lihat informasi lengkap siswa

### 5. Hapus Siswa
- Klik icon hapus (tempat sampah) pada baris siswa
- Konfirmasi penghapusan

## Data Contoh
Seeder telah dibuat dengan 5 data siswa contoh:
1. Ahmad Fadillah
2. Siti Nurhaliza
3. Muhammad Rizki
4. Nurul Hidayah
5. Abdul Rahman

## Validasi
- NIS dan NISN harus unik
- Email harus valid (jika diisi)
- Foto maksimal 2MB, format JPG/PNG/JPEG
- Semua field wajib kecuali email dan foto

## Folder Upload
Foto siswa disimpan di `public/foto-siswa/` dengan format nama `siswa_YYYYMMDDHHMMSS.ext` 