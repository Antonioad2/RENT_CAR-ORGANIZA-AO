<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\Fuel; // Import the Fuel model

class FuelController extends Controller
{
    //
    public function index()
    {
        $fuels = Fuel::all();
        return view('admin.fuels.fuel.index', compact('fuels'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.fuels.fuelCreate.index');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //

        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string|max:1000',
            'date' => 'nullable|date',
        ], [
            'name.required' => 'O nome é obrigátorio.',
            'description.max' => 'The description may not be greater than 1000 characters.',
            'date.date' => 'The date must be a valid date.',
        ]);
        Fuel::create([
            'name' => $request->name,
            'description' => $request->description,
            'date' => $request->date,
        ]);

        return redirect()->route('fuels.index')->with('success', 'Marca criada com sucesso!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Fuel $fuel)
    {
        $fuel = fuel::findOrFail($fuel->id);
        return view('admin.fuels.fuelView.index', compact('fuel')); // Caminho diferente para view única
        //

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
 public function edit(Fuel $fuel)
    {
        //
        return view('admin.fuels.fuelEdit.index', ['fuel' => $fuel]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Fuel $fuel)
    {
        //
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string|max:1000',
            'date' => 'nullable|date',
        ], [
            'name.required' => 'O nome é obrigátorio.',
            'description.max' => 'O campo descrição não pode ter mais de 1000 caracteres.',
            'date.date' => 'A data deve ser uma data válida.',
        ]);

        $fuel->update([
            'name' => $request->name,
            'description' => $request->description,
            'date' => $request->date,
        ]);

        return redirect()->route('fuels.index')->with('success', 'Marca atualizada com sucesso!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Fuel $fuel)
    {
        //
        $fuel->delete();

        return redirect()->route('fuels.index')->with('success', 'Marca removida com sucesso!');
        //

    }
}
