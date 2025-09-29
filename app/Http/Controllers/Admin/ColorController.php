<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\Color;

class ColorController extends Controller
{
    //
    public function index()
    {
        $colors = Color::all();
        return view('admin.colors.color.index', compact('colors'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.colors.colorCreate.index');
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
        Color::create([
            'name' => $request->name,
            'description' => $request->description,
            'date' => $request->date,
        ]);

        return redirect()->route('colors.index')->with('success', 'Cor criada com sucesso!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Color $color)
    {
        $color = Color::findOrFail($color->id);
        return view('admin.colors.colorView.index', compact('color')); // Caminho diferente para view única
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
 public function edit(Color $color)
    {
        //
        return view('admin.colors.colorEdit.index', ['color' => $color]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Color $color)
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

        $color->update([
            'name' => $request->name,
            'description' => $request->description,
            'date' => $request->date,
        ]);

        return redirect()->route('colors.index')->with('success', 'Cor atualizada com sucesso!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Color $color)
    {
        //
        $color->delete();

        return redirect()->route('colors.index')->with('success', 'Cor removida com sucesso!');
        //

    }

}
