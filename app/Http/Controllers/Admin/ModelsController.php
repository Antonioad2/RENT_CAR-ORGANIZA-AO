<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\Brand;
use App\Model\Models; // Updated to singular Models

class ModelsController extends Controller
{
    public function index()
    {
        $models = Models::with('brand')->get(); // Eager load brand for display
        return view('admin.models.model.index', compact('models'));
    }

    public function create()
    {
        $brands = Brand::all(); // Fetch all brands for dropdown
        return view('admin.models.modelCreate.index', compact('brands'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string|max:1000',
            'date' => 'nullable|date',
            'brand_id' => 'required|exists:brands,id', // Ensure brand_id exists
        ], [
            'name.required' => 'O nome é obrigatório.',
            'description.max' => 'A descrição não pode ter mais de 1000 caracteres.',
            'date.date' => 'A data deve ser válida.',
            'brand_id.required' => 'A marca é obrigatória.',
            'brand_id.exists' => 'A marca selecionada não existe.',
        ]);

        Models::create([
            'name' => $request->name,
            'description' => $request->description,
            'date' => $request->date,
            'brand_id' => $request->brand_id,
        ]);

        return redirect()->route('models.index')->with('success', 'Modelso criado com sucesso!');
    }

    public function show(Models $models)
    {
        $model = $models;
        return view('admin.models.modelView.index', compact('model'));
    }

    public function edit(Models $models)
    {
        $model = $models;
        $brands = Brand::all();

        return view('admin.models.modelEdit.index', compact('model', 'brands'));
    }

    public function update(Request $request, Models $models)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string|max:1000',
            'date' => 'nullable|date',
            'brand_id' => 'required|exists:brands,id',
        ], [
            'name.required' => 'O nome é obrigatório.',
            'description.max' => 'A descrição não pode ter mais de 1000 caracteres.',
            'date.date' => 'A data deve ser válida.',
            'brand_id.required' => 'A marca é obrigatória.',
            'brand_id.exists' => 'A marca selecionada não existe.',
        ]);

        $models->update([
            'name' => $request->name,
            'description' => $request->description,
            'date' => $request->date,
            'brand_id' => $request->brand_id,
        ]);

        return redirect()->route('models.index')->with('success', 'Modelo atualizado com sucesso!');
    }

    public function getModelsByBrand($brandId)
    {
        $models = Models::where('brand_id', $brandId)->get();
        return response()->json($models);
    }

    public function destroy(Models $models)
    {
        $models->delete();
        return redirect()->route('models.index')->with('success', 'Modelso removido com sucesso!');
    }
}