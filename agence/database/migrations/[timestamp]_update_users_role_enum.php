<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    public function up(): void
    {
        // First, update any existing 'super_admin' roles to 'admin'
        DB::table('users')
            ->where('role', 'super_admin')
            ->update(['role' => 'admin']);

        // Then modify the enum
        DB::statement("ALTER TABLE users MODIFY COLUMN role ENUM('utilisateur', 'admin') DEFAULT 'utilisateur'");
    }

    public function down(): void
    {
        DB::statement("ALTER TABLE users MODIFY COLUMN role ENUM('utilisateur', 'admin', 'super_admin') DEFAULT 'utilisateur'");
    }
};