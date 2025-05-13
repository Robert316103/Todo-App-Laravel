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
        /**Schema::create('tasks', function (Blueprint $table) {
                $table->increments('id');
                $table->string('title');
                $table->text('body');
                $table->integer('user_id');
                $table->boolean('done');
                $table->timestamps();
                **/
                Schema::table('tasks', function (Blueprint $table) {
        $table->string('photo')->nullable()->after('done'); // Add the 'photo' column

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tasks');
    }
};
