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
        Schema::create('companies', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('short_name')->nullable();
            $table->string('ticker')->nullable();
            $table->string('listing_status')->nullable();
            $table->string('logo_url')->nullable();
            $table->string('avatar_letter', 5)->nullable();
            $table->string('isin')->nullable();
            $table->string('pan')->nullable();
            $table->string('email')->nullable();
            $table->string('phone')->nullable();
            $table->string('address')->nullable();
            $table->date('date_of_incorporation')->nullable();
            $table->date('last_agm_date')->nullable();
            $table->date('data_as_of')->nullable();
            $table->string('source_of_data')->nullable();
            $table->string('company_type')->nullable();
            $table->string('industry')->nullable();
            $table->string('founded_year')->nullable();
            $table->string('registered_address')->nullable();
            $table->text('about_summary')->nullable();
            $table->longText('overview_body')->nullable();
            $table->longText('business_overview')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('companies');
    }
};

