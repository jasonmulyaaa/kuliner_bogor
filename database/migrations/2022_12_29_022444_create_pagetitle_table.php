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
        Schema::create('pagetitle', function (Blueprint $table) {
            $table->id();
            $table->string('judul_alur');
            $table->string('deskripsi_alur');
            $table->string('judul_resto');
            $table->string('deskripsi_resto');
            $table->string('gambar_resto');
            $table->string('judul_counter');
            $table->string('gambar_testimonial');
            $table->string('judul_testimonial');
            $table->string('judul_partner');
            $table->string('judul_subscribe');
            $table->string('gambar_subscribe');
            $table->string('judul_blog');
            $table->string('deskripsi_blog');
            $table->string('gambar_blog');
            $table->string('judul_contact');
            $table->string('deskripsi_contact');
            $table->string('gambar_contact');
            $table->string('page_blog');
            $table->string('page_resto');
            $table->string('page_contact');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pagetitle');
    }
};
