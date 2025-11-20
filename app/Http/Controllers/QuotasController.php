<?php

namespace App\Http\Controllers;

use App\Models\Quota;
use App\Services\QuotaService;
use Illuminate\Http\Request;


class QuotasController
{

    protected $service;

    public function __construct(QuotaService $service)
    {
        $this->service = $service;
    }

    public function index()
    {
        $quotas = Quota::with([
            'typeAppointment',
            'affiliate',
            'medico',
            'creador'
        ])
        ->orderBy('fecha_cita', 'desc')
        ->limit(100)
        ->get();

        return response()->json($quotas);
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'types_appointments_id' => 'required|exists:types_appointments,id',
            'paciente_id' => 'required|exists:affiliates,id',
            'medico_id' => 'required|exists:users,id',
            'fecha_cita' => 'required|date',
            'descripcion' => 'nullable|string',
            'estado' => 'nullable|integer',
        ]);

        $validated['creador'] = auth()->id();

        $quota = Quota::create($validated);

        $quota->load(['typeAppointment', 'affiliate', 'medico', 'creador']);

        return response()->json([
            'message' => 'Cita creada correctamente',
            'data' => $quota
        ], 201);
    }
    public function show($id)
    {
        $quota = Quota::with([
            'typeAppointment',
            'affiliate',
            'medico',
            'creador'
        ])->findOrFail($id);

        return response()->json($quota);
    }

    public function update(Request $request, $id)
    {
        $quota = Quota::findOrFail($id);

        $validated = $request->validate([
            'types_appointments_id' => 'sometimes|exists:types_appointments,id',
            'paciente_id' => 'sometimes|exists:affiliates,id',
            'medico_id' => 'sometimes|exists:users,id',
            'fecha_cita' => 'sometimes|date',
            'descripcion' => 'nullable|string',
            'estado' => 'sometimes|integer',
        ]);

        $quota->update($validated);
        $quota->load(['typeAppointment', 'affiliate', 'medico']);

        return response()->json([
            'message' => 'Cita actualizada correctamente',
            'data' => $quota
        ]);
    }


    public function destroy($id)
    {
        $quota = Quota::findOrFail($id);
        $quota->delete();

        return response()->json([
            'message' => 'Cita eliminada correctamente'
        ]);
    }
}
