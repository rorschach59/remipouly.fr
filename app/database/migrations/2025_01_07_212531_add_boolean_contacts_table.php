<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        if (!Schema::hasColumn('contacts', 'want_to_receive_email')) {
            Schema::table('contacts', function (Blueprint $table) {
                $table->boolean('want_to_receive_email')->default(true)->after('value');
            });
        }
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        if (Schema::hasColumn('contacts', 'want_to_receive_email')) {
            Schema::table('contacts', function (Blueprint $table) {
                $table->dropColumn('want_to_receive_email');
            });
        }
    }
};
