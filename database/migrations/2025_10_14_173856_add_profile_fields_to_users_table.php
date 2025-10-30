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
        Schema::table('users', function (Blueprint $table) {
            // Basic Profile Details
            $table->string('full_name')->nullable();
            $table->string('mobile_no')->nullable();
            $table->string('pan_no')->nullable();
            $table->text('address')->nullable();
            $table->string('nationality')->nullable();
            
            // Registration specific fields
            $table->string('phone_no')->nullable();
            $table->string('referral_code')->nullable();
            
            // Approval workflow
            $table->enum('status', ['pending', 'approved', 'rejected'])->default('pending');
            $table->text('rejection_reason')->nullable();
            $table->timestamp('approved_at')->nullable();
            $table->foreignId('approved_by')->nullable()->constrained('users');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn([
                'full_name', 'mobile_no', 'pan_no', 'address', 'nationality',
                'phone_no', 'referral_code', 'status', 'rejection_reason',
                'approved_at', 'approved_by'
            ]);
        });
    }
};
