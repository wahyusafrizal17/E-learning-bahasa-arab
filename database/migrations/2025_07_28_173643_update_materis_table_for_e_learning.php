<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('materi', function (Blueprint $table) {
            $table->text('deskripsi')->nullable()->after('materi');
            $table->enum('tingkat_kesulitan', ['Pemula', 'Menengah', 'Lanjutan'])->default('Pemula')->after('deskripsi');
            $table->enum('kategori', ['Huruf Hijaiyah', 'Tajwid', 'Nahwu', 'Shorof', 'Muhadatsah', 'Qiroah', 'Kitabah'])->default('Huruf Hijaiyah');
            $table->foreignId('kelas_id')->nullable()->constrained('kelas')->onDelete('cascade')->after('kategori');
            $table->integer('urutan')->default(1)->after('kelas_id');
            $table->enum('status', ['Aktif', 'Draft', 'Arsip'])->default('Aktif')->after('urutan');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('materi', function (Blueprint $table) {
            $table->dropForeign(['kelas_id']);
            $table->dropColumn([
                'deskripsi', 'tingkat_kesulitan', 
                'kategori', 'kelas_id', 'urutan', 'status'
            ]);
        });
    }
};
