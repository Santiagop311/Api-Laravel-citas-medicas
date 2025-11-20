<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Quota extends Model
{
    protected $table = 'citas';
    protected $fillable = [
        'types_appointments_id',
        'paciente_id',
        'medico_id',
        'creado_por',
        'fecha_cita',
        'descripcion',
        'estado',
    ];

    protected $casts = [
        'fecha_cita' => 'datetime',
        'estado' => 'integer',
    ];


    public function typeAppointment()
    {
        return $this->belongsTo(TypeAppointments::class, 'types_appointments_id');
    }

    public function affiliate()
    {
        return $this->belongsTo(Affiliates::class, 'paciente_id');
    }

    public function medico()
    {
        return $this->belongsTo(User::class, 'medico_id');
    }

    public function creador()
    {
        return $this->belongsTo(User::class, 'creado_por');
    }

}
