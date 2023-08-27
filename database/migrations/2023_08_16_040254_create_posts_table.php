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
        Schema::create('posts', function (Blueprint $table) {
            $table->id();
            $table->string('title')->nullable();
            $table->string('slug')->nullable();
            $table->tinyInteger('status')->nullable()->comment('1=>published,0=>unpublished');
            $table->tinyInteger('is_approved')->nullable()->comment('1=>approved,0=>not approved');
            $table->foreignId('category')->constrained()->cascadeOnUpdate()->cascadeOnDelete();
            $table->foreignId('sub_category')->constrained()->cascadeOnUpdate()->cascadeOnDelete();
            $table->foreignId('user_id')->constrained()->cascadeOnUpdate()->cascadeOnDelete();
            $table->text('description')->nullable();
            $table->string('photo')->nullable();
            $table->string('admin_comment')->nullable();
            $table->softDeletes();
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
        Schema::dropIfExists('posts');
    }
};
