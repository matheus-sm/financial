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
        Schema::create('personal_submenus', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('ps_menu_id');
            $table->string('ps_link');
            $table->string('ps_description');
            $table->string('ps_icon');
            $table->boolean('ps_active')->default(1);
            $table->timestamps();

            $table->foreign('ps_menu_id')->references('id')->on('personal_menus');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('personal_submenus');
    }
};
