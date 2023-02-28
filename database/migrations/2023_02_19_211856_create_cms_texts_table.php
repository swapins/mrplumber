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
        Schema::create('cms_texts', function (Blueprint $table) {
            $table->id();
            $table->string("title")->nullable();
            $table->string("subTitle")->nullable();
            $table->longtext("aboutUsText")->nullable();
            $table->string("addressText")->nullable();
            $table->string("phoneNo")->nullable();
            $table->string("email")->nullable();
            $table->string("twitter")->nullable();
            $table->string("facebook")->nullable();
            $table->string("instagram")->nullable();
            $table->string("linkedIn")->nullable();
            $table->string("copyRight")->nullable();
            $table->string("videourl")->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cms_texts');
    }
};
