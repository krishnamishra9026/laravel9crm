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
        Schema::create('previous_versions', function (Blueprint $table) {
            $table->id();
            $table->string('version');
            $table->date('added_on');
            $table->string('apk_url');
            $table->integer('product_id')->nullable();
            $table->string('image')->nullable();
            $table->string('file')->nullable();
            $table->float('size')->nullable();
            $table->string('play_store_url')->nullable();
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
        Schema::dropIfExists('previous_versions');
    }
};
