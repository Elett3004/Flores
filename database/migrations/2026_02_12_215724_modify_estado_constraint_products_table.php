<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        DB::statement('ALTER TABLE productos DROP CONSTRAINT IF EXISTS productos_estado_check');
        DB::statement('ALTER TABLE productos ADD CONSTRAINT productos_estado_check CHECK (estado IN (\'activo\', \'terminado\', \'cancelado\'))');
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        DB::statement('ALTER TABLE productos DROP CONSTRAINT IF EXISTS productos_estado_check');
        DB::statement('ALTER TABLE productos ADD CONSTRAINT productos_estado_check CHECK (estado IN (\'activo\', \'terminado\'))');
    }
};
