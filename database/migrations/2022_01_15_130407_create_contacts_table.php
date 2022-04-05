<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContactsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contacts', function (Blueprint $table) {
            $table->id();
            $table->string('subject');
            $table->unsignedBigInteger('target_id')->nullable();
            $table->string('name');
            $table->string('email');
            $table->string('phone');
            $table->text('message');
            $table->foreignId('user_id')->nullable()->constrained()->onDelete('cascade');
            $table->string('status')->default('pending');
            $table->text('result')->nullable();
            $table->dateTime('approved_at')->nullable();
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
        Schema::dropIfExists('contacts');
    }
}
