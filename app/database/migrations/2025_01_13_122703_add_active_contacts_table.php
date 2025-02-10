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
        if (!Schema::hasColumn('contacts', 'active')) {
            Schema::table('contacts', function (Blueprint $table) {
                $table->boolean('active')->default(true)->after('want_to_receive_email');
            });
        }
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        if (Schema::hasColumn('contacts', 'active')) {
            Schema::table('contacts', function (Blueprint $table) {
                $table->dropColumn('active');
            });
        }
    }
};
