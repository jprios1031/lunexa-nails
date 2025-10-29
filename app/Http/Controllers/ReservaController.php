<?php

namespace App\Http\Controllers;

use App\Models\Reserva;
use Illuminate\Http\Request;

class ReservaController extends Controller
{
    public function index()
    {
        return view('reservas');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required|string|max:255',
            'email' => 'required|email',
            'telefono' => 'required',
            'servicio' => 'required',
            'fecha' => 'required|date',
             'fecha' => 'required|date|after_or_equal:today',
        ]);

        Reserva::create($request->all());

        return redirect()->back()->with('success', 'Reserva realizada con éxito.');
    }
    public function dashboard()
    {
        $reservas = Reserva::orderBy('fecha', 'asc')->get(); // traer todas las reservas ordenadas por fecha
        return view('dashboard', compact('reservas'));
    }
    public function aprobar($id)
    {
        $reserva = Reserva::findOrFail($id);
        $reserva->estado = 'Aprobada';
        $reserva->save();

        return redirect()->back()->with('success', 'Reserva aprobada.');
    }

    public function cancelar($id)
    {
        $reserva = Reserva::findOrFail($id);
        $reserva->estado = 'Cancelada';
        $reserva->save();

        return redirect()->back()->with('success', 'Reserva cancelada.');
    }
}
