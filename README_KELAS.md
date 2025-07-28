# Modul Data Kelas

## Deskripsi
Modul Data Kelas adalah sistem CRUD lengkap untuk mengelola data kelas dalam aplikasi e-Learning Bahasa Arab dengan fitur manajemen siswa dalam kelas.

## Fitur
- ✅ CRUD lengkap (Create, Read, Update, Delete)
- ✅ Relasi dengan Guru (One-to-Many)
- ✅ Relasi dengan Siswa (Many-to-Many)
- ✅ Manajemen siswa dalam kelas (tambah/hapus)
- ✅ Validasi form dengan pesan error Indonesia
- ✅ AJAX delete dengan konfirmasi SweetAlert
- ✅ DataTables dengan search, sort, pagination
- ✅ Responsive design
- ✅ Menu navigation yang terintegrasi
- ✅ **FITUR BARU**: Manajemen kelas dari sisi siswa
- ✅ **FITUR BARU**: Tampilan jumlah siswa di daftar kelas

## Struktur Database

### Tabel Kelas
```sql
CREATE TABLE kelas (
    id BIGINT PRIMARY KEY AUTO_INCREMENT,
    nama_kelas VARCHAR(255) NOT NULL,
    kode_kelas VARCHAR(50) UNIQUE NOT NULL,
    kapasitas INT NOT NULL,
    tahun_ajaran VARCHAR(20) NOT NULL,
    semester ENUM('Ganjil', 'Genap') NOT NULL,
    guru_id BIGINT NOT NULL,
    deskripsi TEXT NULL,
    status ENUM('Aktif', 'Tidak Aktif') DEFAULT 'Aktif',
    created_at TIMESTAMP NULL,
    updated_at TIMESTAMP NULL,
    FOREIGN KEY (guru_id) REFERENCES guru(id) ON DELETE CASCADE
);
```

### Tabel Pivot Kelas-Siswa
```sql
CREATE TABLE kelas_siswa (
    id BIGINT PRIMARY KEY AUTO_INCREMENT,
    kelas_id BIGINT NOT NULL,
    siswa_id BIGINT NOT NULL,
    created_at TIMESTAMP NULL,
    updated_at TIMESTAMP NULL,
    FOREIGN KEY (kelas_id) REFERENCES kelas(id) ON DELETE CASCADE,
    FOREIGN KEY (siswa_id) REFERENCES siswa(id) ON DELETE CASCADE,
    UNIQUE KEY unique_kelas_siswa (kelas_id, siswa_id)
);
```

## URL Routes
- `GET /kelas` - Daftar kelas
- `GET /kelas/create` - Form tambah kelas
- `POST /kelas` - Simpan kelas baru
- `GET /kelas/{id}` - Detail kelas
- `GET /kelas/{id}/edit` - Form edit kelas
- `PUT /kelas/{id}` - Update kelas
- `DELETE /kelas/{id}` - Hapus kelas
- `POST /kelas/delete` - Delete via AJAX
- `POST /kelas/{id}/add-siswa` - Tambah siswa ke kelas
- `POST /kelas/{id}/remove-siswa` - Hapus siswa dari kelas

### Routes Baru untuk Manajemen Siswa
- `GET /siswa/{id}/kelas` - Kelola kelas siswa
- `POST /siswa/{id}/add-kelas` - Tambah kelas ke siswa
- `POST /siswa/{id}/remove-kelas` - Hapus kelas dari siswa

## Menu Navigation
Menu "Data Kelas" telah ditambahkan ke sidebar dengan icon `book` dan akan aktif ketika berada di halaman kelas.

## File yang Dibuat
### Model & Migration
- `app/Models/Kelas.php`
- `database/migrations/2025_07_28_171943_create_kelas_table.php`
- `database/migrations/2025_07_28_172005_create_kelas_siswa_table.php`

### Request Classes
- `app/Http/Requests/Kelas/StoreRequest.php`
- `app/Http/Requests/Kelas/UpdateRequest.php`

### Controller
- `app/Http/Controllers/KelasController.php`
- **Update**: `app/Http/Controllers/SiswaController.php` (tambah method kelas management)

### Views
- `resources/views/kelas/index.blade.php`
- `resources/views/kelas/create.blade.php`
- `resources/views/kelas/edit.blade.php`
- `resources/views/kelas/show.blade.php`
- `resources/views/kelas/_form.blade.php`
- **Baru**: `resources/views/siswa/kelas.blade.php`
- **Update**: `resources/views/siswa/show.blade.php` (tambah tampilan kelas)
- **Update**: `resources/views/siswa/index.blade.php` (tambah button kelola kelas)

### Seeder
- `database/seeders/KelasTableSeeder.php`
- **Baru**: `database/seeders/KelasSiswaSeeder.php`

### Routes
- Ditambahkan ke `routes/web.php`

### Menu
- Ditambahkan ke `resources/views/layouts/app.blade.php`

## Cara Penggunaan

### 1. Akses Menu
Login ke aplikasi dan klik menu "Data Kelas" di sidebar.

### 2. Tambah Kelas
- Klik tombol "Tambah Kelas"
- Isi semua field yang diperlukan (bertanda *)
- Pilih guru yang akan mengajar
- Klik "Simpan"

### 3. Edit Kelas
- Klik icon edit (pensil) pada baris kelas
- Ubah data yang diperlukan
- Klik "Simpan"

### 4. Detail Kelas
- Klik icon detail (mata) pada baris kelas
- Lihat informasi lengkap kelas
- Kelola siswa dalam kelas (tambah/hapus)

### 5. Hapus Kelas
- Klik icon hapus (tempat sampah) pada baris kelas
- Konfirmasi penghapusan

### 6. Manajemen Siswa dalam Kelas
- Buka detail kelas
- Di bagian kanan akan ada daftar siswa dalam kelas
- Gunakan form "Tambah Siswa" untuk menambah siswa baru
- Klik tombol hapus untuk mengeluarkan siswa dari kelas

### 7. **FITUR BARU**: Manajemen Kelas dari Sisi Siswa
- Buka detail siswa
- Klik tombol "Kelola Kelas" atau icon buku di daftar siswa
- Lihat kelas yang diikuti siswa
- Tambah/hapus kelas untuk siswa tersebut

## Data Contoh
Seeder telah dibuat dengan 5 kelas contoh:
1. **Kelas Bahasa Arab Dasar** (ARB-001) - 25 siswa
2. **Kelas Bahasa Arab Menengah** (ARB-002) - 20 siswa
3. **Kelas Bahasa Arab Lanjutan** (ARB-003) - 15 siswa
4. **Kelas Bahasa Arab Anak-anak** (ARB-004) - 30 siswa
5. **Kelas Bahasa Arab Dewasa** (ARB-005) - 18 siswa

**Seeder Kelas-Siswa** telah menghubungkan siswa dengan kelas secara otomatis.

## Validasi
- Kode kelas harus unik
- Kapasitas minimal 1, maksimal 100
- Guru harus ada di database
- Semester hanya Ganjil/Genap
- Status hanya Aktif/Tidak Aktif
- **Baru**: Mencegah siswa masuk kelas yang sama
- **Baru**: Mencegah penambahan siswa melebihi kapasitas

## Field Khusus Kelas
- **Kode Kelas**: Kode unik untuk identifikasi kelas (wajib, unik)
- **Kapasitas**: Jumlah maksimal siswa dalam kelas (wajib, 1-100)
- **Tahun Ajaran**: Periode tahun ajaran (wajib)
- **Semester**: Ganjil atau Genap (wajib)
- **Guru**: Guru yang mengajar kelas (wajib, relasi)
- **Status**: Status aktifitas kelas (wajib)

## Relasi Database
- **Kelas → Guru**: One-to-Many (satu guru bisa mengajar banyak kelas)
- **Kelas → Siswa**: Many-to-Many (satu kelas bisa berisi banyak siswa, satu siswa bisa masuk banyak kelas)

## Fitur Khusus
- **Manajemen Siswa**: Tambah/hapus siswa dalam kelas
- **Kapasitas Check**: Mencegah penambahan siswa melebihi kapasitas
- **Duplicate Prevention**: Mencegah siswa masuk kelas yang sama
- **Status Management**: Aktif/Tidak Aktif untuk mengontrol kelas
- **Dual Management**: Kelola kelas dari sisi kelas atau sisi siswa
- **Real-time Count**: Tampilan jumlah siswa di daftar kelas

## Perbedaan dengan Modul Lain
- Memiliki relasi dengan Guru dan Siswa
- Fitur manajemen siswa dalam kelas
- Validasi kapasitas kelas
- Status aktifitas kelas
- Icon menu menggunakan `book`
- **FITUR BARU**: Manajemen dua arah (kelas ↔ siswa) 