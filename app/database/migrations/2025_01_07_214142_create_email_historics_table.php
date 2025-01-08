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
        Schema::create('email_historics', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('contact_id')->unsigned()->nullable()->default(null);
            $table->foreign('contact_id')->references('id')->on('contacts');
            $table->integer('template_id');
            $table->timestamp('sended_at')->useCurrent();
            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->nullable()->default(null);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('email_historics');
    }
};
