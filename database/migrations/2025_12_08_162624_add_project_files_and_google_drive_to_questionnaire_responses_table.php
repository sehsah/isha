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
        Schema::table('questionnaire_responses', function (Blueprint $table) {
            $table->json('project_files')->nullable()->after('items_to_keep');
            $table->text('google_drive_link')->nullable()->after('project_files');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('questionnaire_responses', function (Blueprint $table) {
            $table->dropColumn(['project_files', 'google_drive_link']);
        });
    }
};
