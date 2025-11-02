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
        Schema::create('types_appointments', function (Blueprint $table) {
            $table->id();
            $table->string('name', 100);
            $table->text('description')->nullable();
            $table->decimal('cost', 10, 2)->nullable();
            $table->timestamps();
        });
        Schema::create('affiliates', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('identification_type');
            $table->string('identification_number');
            $table->timestamps();

        });
        Schema::create('citas', function (Blueprint $table) {
            $table->id();
            $table->foreignId('types_appointments_id')->constrained('types_appointments')->onDelete('cascade');
            $table->foreignId('paciente_id')->nullable()->constrained('affiliates')->onDelete('set null');
            $table->foreignId('medico_id')->nullable()->constrained('users')->onDelete('set null');
            $table->foreignId('creado_por')->nullable()->constrained('users')->onDelete('set null');
            $table->dateTime('fecha_cita');
            $table->text('descripcion')->nullable();
            $table->smallInteger('estado')->default(1);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('citas');
        Schema::dropIfExists('affiliates');
        Schema::dropIfExists('types_appointments');
    }

};
