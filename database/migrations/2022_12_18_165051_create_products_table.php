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
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable();
            $table->string('slug')->nullable();
            $table->string('meta_title')->nullable();
            $table->string('meta_description')->nullable();
            $table->string('tags')->nullable();
            $table->string('image')->nullable();
            $table->string('file')->nullable();
            $table->text('description')->nullable();
            $table->string('type')->nullable();
            $table->integer('category_id')->nullable();
            $table->string('version')->nullable();
            $table->string('size')->nullable();
            $table->string('apk_url')->nullable();
            $table->string('play_store_url')->nullable();
            $table->text('features')->nullable();
            $table->string('uploaded_by')->nullable();
            $table->string('updated_on')->nullable();
            $table->string('requires_android')->nullable();
            $table->enum('status', ['Active', 'Inactive']);
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
        Schema::dropIfExists('products');
    }
};
