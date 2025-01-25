<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class () extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('users', function (Blueprint $table) {
            $table->string('role', 20)->default('user')->comment('user,chef');
            $table->string('profile', 100)->default('images/profiles/default.jpg');
            $table->string('short_description', 200)->default('New Author');
            $table->text('full_description')->nullable();
            $table->string('address', 100)->default('My Address here');
            $table->string('phone', 15)->default('123-456-7890');
            $table->date('birthday', 15)->default('1990-01-30');

            $table->string('social_facebook', 300)->default('https://www.facebook.com/');
            $table->string('social_x', 300)->default('https://x.com/?lang=en');
            $table->string('social_instagram', 300)->default('https://www.instagram.com/');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        // Schema::dropIfExists('user_columns');
    }
};
