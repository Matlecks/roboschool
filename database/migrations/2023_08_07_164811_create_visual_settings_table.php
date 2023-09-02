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
        Schema::create('visual_settings', function (Blueprint $table) {
            $table->id();
            $table->string('syte_color')->nullable();
            $table->string('syte_color_text')->nullable();
            $table->string('theme')->nullable();
            $table->string('font_option_titles')->nullable();
            $table->string('font_option_content')->nullable();
            $table->string('syte_width_option')->nullable();
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
        Schema::dropIfExists('visual_settings');
    }
};
