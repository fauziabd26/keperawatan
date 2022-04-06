<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('jenis_kelamin');
            $table->string('no_hp')->nullable();
            $table->string('password');
            $table->uuid('role_id');
            $table->uuid('mahasiswa_id');
            $table->uuid('dosen_id');
        
            $table->foreign('dosen_id')->references('id')->on('dosens');
            $table->foreign('mahasiswa_id')->references('id')->on('mahasiswas');
            $table->foreign('role_id')->references('id')->on('roles');
            $table->softDeletes();
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
