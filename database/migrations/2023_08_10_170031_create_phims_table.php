<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('phims', function (Blueprint $table) {
            $table->id();
            $table->string('ten_phim');
            $table->string('slug_ten_phim')->unique();
            $table->string('dao_dien');
            $table->string('dien_vien');
            $table->string('the_loai');
            $table->string('quoc_gia');
            $table->string('trailer');
            $table->string('hinh_anh');
            $table->text('mo_ta');
            $table->integer('thoi_luong');
            $table->integer('trang_thai')->default(1);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('phims');
    }
};
