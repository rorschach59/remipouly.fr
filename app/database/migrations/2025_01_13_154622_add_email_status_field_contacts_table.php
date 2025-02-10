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
        if (!Schema::hasColumn('contacts', 'email_status')) {
            Schema::table('contacts', function (Blueprint $table) {
                $table->string('email_status')->default(null)->nullable()->after('value');
            });
        }
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        if (Schema::hasColumn('contacts', 'email_status')) {
            Schema::table('contacts', function (Blueprint $table) {
                $table->dropColumn('email_status');
            });
        }
    }
};
