<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB; // Added this import for DB facade

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // First, update empty kode_kelas values to first available kelas
        $firstKelas = DB::table('kelas')->first();
        if ($firstKelas) {
            DB::table('materi')->whereNull('kode_kelas')->orWhere('kode_kelas', '')->update(['kode_kelas' => $firstKelas->kode_kelas]);
        }

        Schema::table('materi', function (Blueprint $table) {
            // Add foreign key constraint for kode_kelas
            $table->foreign('kode_kelas')->references('kode_kelas')->on('kelas')->onDelete('cascade');
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
            // Drop the kode_kelas foreign key
            $table->dropForeign(['kode_kelas']);
        });
    }
};
