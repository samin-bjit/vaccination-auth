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
        Schema::create('users', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('first_name', 20);
            $table->string('last_name', 20)->nullable();
            $table->string('father_name', 20);
            $table->string('mother_name', 20);
            $table->date('date_of_birth');
            $table->string('nid', 20);
            $table->string('email', 30);
            $table->string('password');
            $table->string('mobile', 20);
            $table->string('blood_group', 10);
            $table->tinyInteger('marital_status')->comment('1 = married, 2 = unmarried');
            $table->tinyInteger('gender')->comment('1 = male, 2 = female, 3 = others');
            $table->text('address');
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
